<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ArtistVerificationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'verification_code' => [
                'required',
                'max:5'
            ]
        ];
    }
}