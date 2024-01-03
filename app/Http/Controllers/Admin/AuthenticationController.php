<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Interfaces\Admin\AuthenticationRepositoryInterface;
use App\Http\Requests\Admin\AdminResetPasswordRequest;
use App\Http\Requests\Admin\AdminForgotPasswordRequest;

class AuthenticationController extends Controller
{
    private AuthenticationRepositoryInterface $authenticationRepository;

    public function __construct(AuthenticationRepositoryInterface $authenticationRepository)
    {
        $this->authenticationRepository = $authenticationRepository;
    }

    public function login(){
        return view('admin.authentication.login');
    }

    public function loginData(AdminLoginRequest $request){
        return $this->authenticationRepository->loginAttempt($request);
    }

    public function forgotPassword(){
        return view('admin.authentication.forgot-password');
    }

    public function forgotPasswordData(AdminForgotPasswordRequest $request){
        return $this->authenticationRepository->submitForgotPasswordReq($request);
    }

    public function resetPassword($token){
        $user = $this->authenticationRepository->checkResetToken($token);
        if(!empty($user)){
            return view('admin.authentication.reset-password', compact('user'));
        }
        abort(404);
    }

    public function resetPasswordData($token, AdminResetPasswordRequest $request){
        return $this->authenticationRepository->resetPasswordReq($token, $request);
    }

    public function logout(){
        return $this->authenticationRepository->logout();
    }
}
