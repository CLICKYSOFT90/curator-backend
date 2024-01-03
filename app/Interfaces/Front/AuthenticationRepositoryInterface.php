<?php

namespace App\Interfaces\Front;

interface AuthenticationRepositoryInterface
{
    public function signUpData(array $data);

    public function userVerificationData(array $data);

    public function loginData(array $data);

    public function forgotPasswordData(array $data);

    public function resetPasswordData($token, array $data);
}
