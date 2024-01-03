<?php

namespace App\Http\Requests\Admin\Update;

use Illuminate\Foundation\Http\FormRequest;

class ThresholdUpdateRequest extends FormRequest
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
            'tier'                  => 'required',
            'price'                 => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'coins'                 => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'tiktok_plays_min'      => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'tiktok_plays_max'      => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'story_views_min'       => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'story_views_max'       => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'reels_views_min'       => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'reels_views_max'       => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'instagram_posts_min'   => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'instagram_posts_max'   => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
        ];
    }

    public function messages(): array
    {
        return [
            'tier.required'                 => 'The Tier field is required.',
            'price.required'                => 'The Price field is required.',
            'coins.required'                => 'The Coins field is required.',
            'tiktok_plays_min.required'     => 'The Tiktok Plays Minimum field is required.',
            'tiktok_plays_min.numeric'      => 'The Tiktok Plays Minimum field must be a number.',
            'tiktok_plays_max.required'     => 'The Tiktok Plays Maximum field is required.',
            'tiktok_plays_max.numeric'      => 'The Tiktok Plays Maximum field must be a number.',
            'story_views_min.required'      => 'The Story Views Minimum field is required.',
            'story_views_min.numeric'       => 'The Story Views Minimum field must be a number.',
            'story_views_max.required'      => 'The Story Views Maximum field is required.',
            'story_views_max.numeric'       => 'The Story Views Maximum field must be a number.',
            'reels_views_min.required'      => 'The Reels Views Minimum field is required.',
            'reels_views_min.numeric'       => 'The Reels Views Minimum field must be a number.',
            'reels_views_max.required'      => 'The Reels Views Maximum field is required.',
            'reels_views_max.numeric'       => 'The Reels Views Maximum field must be a number.',
            'instagram_posts_min.required'  => 'The Instagram Posts Minimum field is required.',
            'instagram_posts_min.numeric'   => 'The Instagram Posts Minimum field must be a number.',
            'instagram_posts_max.required'  => 'The Instagram Posts Maximum field is required.',
            'instagram_posts_max.numeric'   => 'The Instagram Posts Maximum field must be a number.',
        ];
    }
}
