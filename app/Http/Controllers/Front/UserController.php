<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserForgotPasswordRequest;
use App\Http\Requests\Front\UserLoginRequest;
use App\Interfaces\Front\UserRepositoryInterface;
use App\Http\Requests\Front\UserResetPasswordRequest;

class UserController extends Controller
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(){
        return view('admin.authentication.login');
    }

    public function loginData(UserLoginRequest $request){
        return $this->userRepository->loginAttempt($request);
    }

    public function forgotPassword(){
        return view('admin.authentication.forgot-password');
    }

    public function forgotPasswordData(UserForgotPasswordRequest $request){
        return $this->userRepository->submitForgotPasswordReq($request);
    }

    public function resetPassword($token){
        $user = $this->userRepository->checkResetToken($token);
        if(!empty($user)){
            return view('admin.authentication.reset-password', compact('user'));
        }
        abort(404);
    }

    public function resetPasswordData($token, UserResetPasswordRequest $request){
        return $this->userRepository->resetPasswordReq($token, $request);
    }

    public function logout(){
        return $this->userRepository->logout();
    }
}