<?php

namespace App\Http\Requests\Admin\Store;

use Illuminate\Foundation\Http\FormRequest;

class AdminStoreRequest extends FormRequest
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
    public function rules()
    {
        return [
            'username'                  => 'required|alpha_num|unique:admins,username|max:255',
            'email'                     => 'required|email:rfc,dns|unique:admins,email|max:255',
            'password'                  => 'required|min:8|max:255',
            'profile_image'             => 'required|mimes:png,jpg,jpeg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'username.required'         => 'The User name field is required.',
            'email.required'            => 'The Email field is required.',
            'password.required'         => 'The Password field is required.',
            'profile_image.required'    => 'The Profile Image field is required.'
        ];
    }
}
