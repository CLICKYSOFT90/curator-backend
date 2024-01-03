<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CuratorCampaign extends Model
{
    protected $table = 'curator_campaigns';

    const AUDIO_TYPES = [
        'Link',
        'Upload'
    ];

    const RELEASE_TYPES = [
        'Official Release',
        'Remix',
        'Cover',
        'Unfinished Demo'
    ];

    const LINK = 'Link';

    const UPLOAD = 'Upload';

    const OFFICIAL_RELEASE = 'Official Release';

    const REMIX = 'Remix';

    const COVER = 'Cover';

    const UNFINISHED_DEMO = 'Unfinished Demo';

    protected $fillable = [
        'user_id',
        'campaign_id',
        'link',
        'audio',
        'cover_image',
        'is_released',
        'release_date',
        'artist_name',
        'feature_artist',
        'track_title',
        'release_type',
        'has_lyrics',
        'lyrics',
        'is_explicit',
        'instrumental_lease',
        'share_youtube',
        'is_custom_pitch',
        'pitch'
    ];
    public function getLinkTypeAttribute(){
        $parsed = parse_url($this->link);

        return $parsed["host"];
    }
}