<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class AccountPasswordRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            'password' => [
                'required',
                'confirmed',
//                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/',
            ],
        ];
    }
}