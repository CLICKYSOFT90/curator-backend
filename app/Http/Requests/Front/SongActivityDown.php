<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class SongActivityDown extends FormRequest
{
    public function rules(): array
    {
        return [
            'feedback' => [
                'required'
            ],
            'about' => [
                'required'
            ]
        ];
    }
}