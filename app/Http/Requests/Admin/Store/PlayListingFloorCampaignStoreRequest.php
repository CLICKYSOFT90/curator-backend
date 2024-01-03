<?php

namespace App\Http\Requests\Admin\Store;

use Illuminate\Foundation\Http\FormRequest;

class PlayListingFloorCampaignStoreRequest extends FormRequest
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
            'campaign_days'         => 'required|numeric',
            'coins_per_month'       => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'price_per_month'       => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'coins_per_week'        => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'price_per_week'        => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
        ];
    }

    public function messages(): array
    {
        return [
            'campaign_days.required'    => 'The Campaign Days field is required.',
            'campaign_days.numeric'     => 'The Campaign Days field must be numeric or double value.',
            'coins_per_month.required'  => 'The Coins Per Month field is required.',
            'coins_per_month.numeric'   => 'The Coins Per Month field must be numeric or double value.',
            'price_per_month.required'  => 'The Price Per Month field is required.',
            'price_per_month.numeric'   => 'The Price Per Month field must be numeric or double value.',
            'coins_per_week.required'  => 'The Coins Per Week field is required.',
            'coins_per_week.numeric'   => 'The Coins Per Week field must be numeric or double value.',
            'price_per_week.required'  => 'The Price Per Week field is required.',
            'price_per_week.numeric'   => 'The Price Per Week field must be numeric or double value.',
        ];
    }
}
