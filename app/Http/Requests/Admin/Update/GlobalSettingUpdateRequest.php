<?php

namespace App\Http\Requests\Admin\Update;

use Illuminate\Foundation\Http\FormRequest;

class GlobalSettingUpdateRequest extends FormRequest
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
            'basic_info' => 'required|max:255',
            'contact_email' => 'required|max:255',
            'facebook_link' => 'required|max:255',
            'twitter_link' => 'required|max:255',
            'instagram_link' => 'required|max:255'
        ];
    }
}
