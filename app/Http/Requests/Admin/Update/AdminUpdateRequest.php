<?php

namespace App\Http\Requests\Admin\Update;

use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateRequest extends FormRequest
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
            'username'                  => 'required|alpha_num|max:255',
            'email'                     => 'required|email:rfc,dns|unique:users,email,'.request('userId').'|max:255',
            'password'                  => 'sometimes|nullable|min:8|max:255',
            'profile_image'             => 'sometimes|required|mimes:png,jpg,jpeg|max:2048'
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
