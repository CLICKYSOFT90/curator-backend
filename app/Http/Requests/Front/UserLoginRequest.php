<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'email:strict',
                'exists:users,email',
            ],
            'password' => [
                'required',
                'max:255',
//                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/',
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'This email does not exists',
            'password.regex' => 'Password must contain combination of uppercase, lowercase letters, numbers, and special characters'
        ];
    }
}