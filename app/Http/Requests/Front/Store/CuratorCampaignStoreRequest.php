<?php

namespace App\Http\Requests\Front\Store;

use App\Models\CuratorCampaign;
use Illuminate\Foundation\Http\FormRequest;

class CuratorCampaignStoreRequest extends FormRequest
{
    public function rules(): array
    {
//        dd(request()->all());
        if ((int)request('step') === 1){
            return [
                'link' => [
                    'sometimes',
                    'nullable',
                    'max:1400'
                ],
                'audio' => [
                    'required',
                    'file',
                    'mimes:audio/mpeg,mpga,mp3,wav',
                    'max:10000'
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
                    'required',
                    'max:255'
                ],
                'feature_artist.*' => [
                    'sometimes',
                    'nullable',
                    'max:255'
                ],
                'track_title' => [
                    'required',
                    'max:255'
                ],
                'release_type' => [
                    'required',
                    'in:'.implode(',', CuratorCampaign::RELEASE_TYPES)
                ]
            ];
        }elseif ((int)request('step') === 2){
            return [
                'has_lyrics' => [
                    'required',
                ],
                'lyrics' => [
                    'required_if:has_lyrics,1',
                    'max:12000'
                ],
                'is_explicit' => [
                    'required'
                ],
                'instrumental_lease' => [
                    'sometimes',
                    'nullable',
                    'file',
                    'mimes:audio/mpeg,mpga,mp3,wav',
                    'max:10000'
                ],
                'permission_youtubers' => [
                    'required'
                ],
                'pitch' => [
                    'required_if:is_custom_pitch,1',
                    'max:4000'
                ],
            ];
        }elseif ((int)request('step') === 3){
            return [
                'submit_option' => [
                    'required',
                    'in:Manually,Automated'
                ]
            ];
        }
    }

    public function messages()
    {
        return [
            'audio.required' => 'Please upload a audio file.',
            'audio.mimes' => 'The file must be a valid audio format (MP3, WAV, etc.).',
            'audio.max' => 'The file size must not exceed 10MB.',
        ];
    }
}