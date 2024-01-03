<?php

namespace App\Http\Requests\Front\update;

use Illuminate\Foundation\Http\FormRequest;

class ProfileImageUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'profile_image'  => 'required|mimes:png,jpg,jpeg|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'profile_image.required'  => 'The profile image is required.',
            'profile_image.mimes'  =>  'The profile image file must be a PNG, JPEG.',
            'profile_image.max'  =>  'The profile image not allowed to greater than 2MB.'
        ];
    }
}