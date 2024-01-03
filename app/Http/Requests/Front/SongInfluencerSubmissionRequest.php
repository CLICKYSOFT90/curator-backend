<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class SongInfluencerSubmissionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'platform_type' => [
                'required',
                'in:TikTok,Instagram,Both'
            ],
            'tiktok_account_link' => [
                'required'
            ],
            'tiktok_reel_link' => [
                'required'
            ],
            'instagram_account_link' => [
                'required'
            ],
            'instagram_reel_link' => [
                'required'
            ],
            'artist_name' => [
                'required'
            ],
            'track_title' => [
                'required'
            ],
            'lyrics_language' => [
                'required',
//                'in:English,German,French'
            ],
            'location' => [
                'required',
            ],
            'influencer_type' => [
                'required',
            ],
            'submit_type' => [
                'required',
                'in:0,1'
            ]
        ];
    }
}