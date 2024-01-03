<?php

namespace App\Http\Requests\Admin\Store;

use Illuminate\Foundation\Http\FormRequest;

class ArtistStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'profile_image'             => 'required|mimes:png,jpg,jpeg|max:2048',
            'firstname'                 => 'required|max:255',
            'lastname'                  => 'required|max:255',
            'date_of_birth'             => 'required',
            'gender'                    => 'required',
            'username'                  => 'required|alpha_num|max:255',
            'email'                     => 'required|email:rfc,dns|unique:users,email|max:255',
            'password'                  => 'required|min:8|max:255',
            'country'                   => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'profile_image.required'    => 'The Profile Image field is required.',
            'firstname.required'        => 'The First name field is required.',
            'lastname.required'         => 'The Last name field is required.',
            'date_of_birth.required'    => 'The Date Of Birth field is required.',
            'gender.required'           => 'The Gender field is required.',
            'username.required'         => 'The User name field is required.',
            'email.required'            => 'The Email field is required.',
            'password.required'         => 'The Password field is required.',
            'country.required'          => 'The Country field is required.',
        ];
    }
}
