<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class CuratorSignUpRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'platform_type' => [
                'required',
                'in:Blogs,Instagram Editor,Twitter,Spotify Playlist,Youtuber,Soundcloud Repost,Tiktok,Facebook,Both'
            ],
            'first_name' => [
                'required',
                'max:255'
            ],
            'spotify_link' => ['required_if:platform_type,Spotify Playlist'],
            'instagram_link' => ['required_if:platform_type,Instagram Editor,Both'],
            'youtube_link' => ['required_if:platform_type,Youtuber'],
            'soundcloud_link' => ['required_if:platform_type,Soundcloud Repost'],
            'twitter_link' => ['required_if:platform_type,Twitter'],
            'tiktok_link' => ['required_if:platform_type,Tiktok,Both'],
            'website_link' => ['required_if:platform_type,Blogs'],
            'facebook_link' => ['required_if:platform_type,Facebook'],
            'display_name' => [
                'required',
                'unique:users',
                'max:255'
            ],
            'email' => [
                'required',
                'unique:users',
            ],
            'password' => [
                'required',
                'max:255',
//                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).+$/',
            ],
            'followers' => [
                'required',
                'numeric'
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