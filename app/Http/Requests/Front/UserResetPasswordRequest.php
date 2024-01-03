<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class UserResetPasswordRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'password' => [
                'required',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/',
            ],
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => 'Password must contain combination of uppercase, lowercase letters, numbers, and special characters',
        ];
    }

}