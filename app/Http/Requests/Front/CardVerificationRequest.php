<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class CardVerificationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'card_number' => 'required|max:20',
            'expiration_year' => 'required|max:50',
            'expiration_month' => 'required|in:1,2,3,4,5,6,7,8,9,10,11,12',
            'cvv' => 'required|max:4',
            'coupon' => 'nullable|max:50'
        ];
    }
}
