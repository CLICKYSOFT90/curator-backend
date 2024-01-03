<?php

namespace App\Http\Requests\Front\update;

use Illuminate\Foundation\Http\FormRequest;

class CoverImageUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'cover_image'  => 'required|mimes:png,jpg,jpeg|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'cover_image.required'  => 'The cover image is required.',
            'cover_image.mimes'  =>  'The cover image file must be a PNG, JPEG.',
            'cover_image.max'  =>  'The cover image not allowed to greater than 2MB.'
        ];
    }
}