<?php

namespace App\Http\Requests\Front;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class AccountSettingRequest extends FormRequest
{
    public function rules(): array
    {
        $user = auth()->user();

        if (in_array(auth()->user()->role_id, [User::CURATOR_ID, User::INFLUENCER_ID])){
            return [
                'first_name' => [
                    'required',
                    'max:255'
                ],
                'last_name' => [
                    'required',
                    'max:255'
                ],
                'display_name' => [
                    'required',
                    'unique:users,display_name,'.$user->id,
                    'max:255'
                ],
                'date_of_birth' => [
                    'required'
                ],
                'country_id' => [
                    'required',
                    'numeric',
                    'exists:countries,id'
                ]
            ];
        }else{
            return [
                'display_name' => [
                    'required',
                    'unique:users,display_name,'.$user->id,
                    'max:255'
                ],
                'country_id' => [
                    'required',
                    'numeric',
                    'exists:countries,id'
                ]
            ];
        }
    }
}