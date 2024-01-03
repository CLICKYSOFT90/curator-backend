<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ArtistSignUpRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'display_name' => [
                'required',
                'unique:users',
                'max:255'
            ],
            'email' => [
                'required',
                'email:strict',
                'unique:users',
                'max:255'
            ],
            'password' => [
                'required',
                'confirmed',
                'max:255',
//                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/',
            ],
            'term_and_conditions' => [
                'required',
                'boolean'
            ],
            'user_type' => [
                'required',
                'in:Artist,Label'
            ]

        ];
    }
    public function messages()
    {
        return [
//            'password.regex' => 'Password must contain combination of uppercase, lowercase letters, numbers, and special characters',
        ];
    }
}