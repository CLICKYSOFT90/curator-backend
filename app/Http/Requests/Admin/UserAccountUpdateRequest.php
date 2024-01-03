<?php

namespace App\Http\Requests\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserAccountUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'username'              =>  'required|alpha_num|max:255',
            'email'                 =>  'required|unique:users,email,'.Auth::id().'|max:255',
            'password'              =>  'sometimes|nullable|min:8|max:255|confirmed',
            'profile_picture'       =>  'sometimes|required|mimes:png,jpg,jpeg|max:2048',
        ];
    }
    
    public function messages(): array
    {
        return [
            'username.required'         => 'The User name field is required.',
            'email.required'            => 'The Email field is required.',
            'password.min'              =>  'The new password must be at least 8 characters.',
            'password.max'              =>  'The new password must not be greater than 255 characters.',
            'password.confirmed'        =>  'The new password confirmation does not match.'
        ];
    }
}
