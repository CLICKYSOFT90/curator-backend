<?php

namespace App\Repositories\Front;

use App\Interfaces\Front\AuthenticationRepositoryInterface;
use App\Models\User;
use App\Notifications\UserResetPassword;
use App\Notifications\VerifyEmailNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthenticationRepository implements AuthenticationRepositoryInterface
{
    public function loginAttempt($loginDetails)
    {
        $user = User::where('email', $loginDetails->email)->first();

        if (!$this->isVerified($user))
            return redirect()->back()->withInput()->with('error_msg', 'Please verify your account first.');

        if (!$this->isActive($user))
            return redirect()->back()->withInput()->with('error_msg', 'Your account is currently inactive, Please contact your admin.');

        $rememberMe = !empty($loginDetails->remember_me);
        if (Auth::attempt(['email' => $loginDetails->email, 'password' => $loginDetails->password], $rememberMe)) {
            return redirect()->intended();
        } else {
            return redirect()->back()->withInput()->with('error_msg', 'Invalid credentials.');
        }
    }

    public function signUpAttempt($req)
    {

        $user = User::create([
            'full_name' => $req->full_name,
            'email' => $req->email,
            'password' => $req->password,
            'is_verified' => true,
            'is_active' => true,
        ]);

        Auth::loginUsingId($user->id);

        return redirect()->route('lunch.program');
    }

    public function isVerified($user): bool {
        if(!empty($user->is_verified)){
            return true;
        }
        return false;
    }

    public function isActive($user): bool
    {
        return $user->is_active;
    }

    public function submitForgotPasswordReq($req)
    {
        $user = User::where('email', $req->email)->first();

        if(empty($user)){
            return redirect()->back()->withInput()->with('error_msg', 'User not found.');
        }

        $user->update([
            'verification_code' => Str::random(5) . Carbon::now()->timestamp . Str::random(5)
        ]);
        $data = [
            'user' => $user,
            'route' => 'reset.password'
        ];

        $user->notify((new UserResetPassword($data))->delay(now()->addSeconds(5)));
        return redirect()->back()->with('success_msg', 'Please check your email, We have sent you reset password link.');
    }

    public function resetPasswordReq($token, $req)
    {
        $user = $this->checkResetToken($token);
        if (!empty($user)) {
            $user->update([
                'verification_code' => null,
                'password' => $req->password
            ]);
            return redirect()->route('login')->with('success_msg', 'Your password successfully reset.');
        } else {
            abort(404);
        }
    }

    public function checkResetToken($token)
    {
        return User::where('verification_code', $token)->first();
    }

    public function verifyUserAttempt($token)
    {
        $user = $this->checkResetToken($token);
        if (!empty($user)) {
            $user->update([
                'is_verified' => true,
                'verification_code' => null,
            ]);
            return redirect()->route('login')->with('success_msg', 'Email verified successfully.');
        } else {
            abort(404);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
