<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class InfluencerSignUpRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'platform_type' => [
                'required',
                'in:Blogs,Instagram Editor,Twitter,Spotify Playlist,Youtuber,Soundcloud Repost,Tiktok,Facebook,Both'
            ],
            'instagram_link' => ['required_if:platform_type,Instagram Editor,Both'],
            'tiktok_link' => ['required_if:platform_type,Tiktok,Both'],
            'tiktok_followers' => ['required_if:platform_type,Tiktok,Both'],
            'instagram_followers' => ['required_if:platform_type,Instagram Editor,Both'],
            'email' => [
                'required',
                'unique:users',
            ],
            'password' => [
                'required',
                'max:255',
//                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/',
            ],
            'referred' => [
                'required',
                'in:1,0'
            ],
            'country_id' => [
                'required',
                'numeric',
                'exists:countries,id'
            ]
        ];
    }
}