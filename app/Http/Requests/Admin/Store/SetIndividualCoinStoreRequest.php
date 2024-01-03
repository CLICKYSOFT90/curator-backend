<?php

namespace App\Http\Requests\Admin\Store;

use Illuminate\Foundation\Http\FormRequest;

class SetIndividualCoinStoreRequest extends FormRequest
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
            'coins'                 => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'elite'                 => 'required',
            'user_type'             => 'required_if:elite,==,1'
        ];
    }

    public function messages(): array
    {
        return [
            'coins.required'        => 'The Coins field is required.',
            'elite.required'        => 'The Elite field is required.',
            'user_type.required_if' => 'The User field is required.'
        ];
    }
}
