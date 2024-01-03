<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class SongActivityUp extends FormRequest
{
    public function rules(): array
    {
        return [
            'playlist' => [
                'required'
            ],
            'feedback' => [
                'required'
            ]
        ];
    }
}