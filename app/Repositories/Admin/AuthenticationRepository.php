<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\AuthenticationRepositoryInterface;
use Carbon\Carbon;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Notifications\UserResetPassword;
use Illuminate\Support\Facades\RateLimiter;

class AuthenticationRepository implements AuthenticationRepositoryInterface
{
    public function getAllUser()
    {
        return Admin::all();
    }

    public function getUserById($userId): mixed
    {
        return Admin::findOrFail($userId);
    }

    public function deleteUser($userId): bool
    {
        Admin::destroy($userId);
    }

    public function createUser(array $userDetails): object
    {
        return Admin::create($userDetails);
    }

    public function updateUser($userId, array $updatedDetails): object
    {
        return Admin::whereId($userId)->update($updatedDetails);
    }

    public function loginAttempt($req)
    {
        $user =$this->checkUserExist($req->email);
        if(!empty($user)){
            if($this->isActive($user)){
                $rememberMe = !empty($req->remember_me)?true:false;
                if(Auth::guard('admin')->attempt(['email' => $req->email, 'password' => $req->password], $rememberMe)){
                    return redirect()->route('admin.dashboard');
                }else{
                    return redirect()->back()->withInput()->with('error_msg', 'Credentials not matched.');
                }
            }else{
                return redirect()->back()->withInput()->with('error_msg', 'Your account is currently inactive, Please contact your admin.');
            }
        }else{
            return redirect()->back()->withInput()->with('error_msg', 'Credentials not matched.');
        }
    }

    public function checkUserExist($email){
        return Admin::where('email', $email)->first();
    }

    public function isVerified($user): bool {
        if(!empty($user->is_verified)){
            return true;
        }
        return false;
    }

    public function isActive($user): bool {
        if(!empty($user->is_active)){
            return true;
        }
        return false;
    }

    public function checkAttempts($req): bool{
        if (! RateLimiter::tooManyAttempts($this->throttleKey($req), 2)) {
            return true;
        }
        return false;
    }

    public function throttleKey($req)
    {
        return $req->ip();
    }

    public function clearAttempts($req): void{
        RateLimiter::clear($this->throttleKey($req));
    }

    public function submitForgotPasswordReq($req){
        $user = $this->checkEmailExist($req->email);
        if(!empty($user)){
            $user->update([
                'verification_code' => Str::random(5).Carbon::now()->timestamp.Str::random(5)
            ]);
            $user->notify((new UserResetPassword())->delay(now()->addSeconds(5)));
            return redirect()->back()->with('success_msg', 'Please check your email, We send you reset password link.');
        }else{
            return redirect()->back()->withInput()->with('error_msg', 'Email not exist.');
        }
    }

    public function checkEmailExist($email){
        return Admin::where('email', $email)->first();
    }

    public function resetPasswordReq($token, $req){
        $user = $this->checkResetToken($token);
        if(!empty($user)){
            $user->update([
                'verification_code' => null,
                'password' => $req->password
            ]);
            return redirect()->route('admin.login')->with('success_msg', 'Your password successfully reset.');
        }else{
            abort(404);
        }
    }

    public function checkResetToken($token){
        return Admin::where('verification_code', $token)->first();
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
