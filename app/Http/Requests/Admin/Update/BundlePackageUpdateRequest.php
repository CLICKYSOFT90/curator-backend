<?php

namespace App\Http\Requests\Admin\Update;

use Illuminate\Foundation\Http\FormRequest;

class BundlePackageUpdateRequest extends FormRequest
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
            'package_name'              => 'required|max:255',
            'package_price'             => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'coins'                     => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/'
        ];
    }

    public function messages(): array
    {
        return [
            'package_name.required'     => 'The Package Name field is required.',
            'package_price.required'    => 'The Package Price field is required.',
            'package_price.numeric'     => 'The Package Price field must be numeric or double value.',
            'coins.required'            => 'The Coins field is required.',
            'coins.numeric'             => 'The Coins field field must be numeric or double value.',
        ];
    }
}
