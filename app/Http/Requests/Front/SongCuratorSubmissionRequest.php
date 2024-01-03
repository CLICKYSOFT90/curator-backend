<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class SongCuratorSubmissionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'audio_type' => [
                'required',
                'in:Link,Upload'
            ],
            'cover_image' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,gif,svg'
            ],
            'is_released' => [
                'required'
            ],
            'released_date' => [
                'required'
            ],
            'artist_name' => [
                'required'
            ],
            'track_title' => [
                'required'
            ],
            'release_type' => [
                'required',
            ],
            'has_lyrics' => [
                'required',
            ],
//            'lyrics_language' => [
//                'required',
////                'in:English,German,French'
//            ],
            'lyrics' => [
                'required',
            ],
            'is_explicit' => [
                'required',
            ],
            'genres' => [
                'array',
//                'min:0',
//                'max:5'
            ],
            'submit_type' => [
                'required',
                'in:0,1'
            ]
        ];
    }
}