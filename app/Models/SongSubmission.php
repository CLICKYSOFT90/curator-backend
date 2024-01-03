<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongSubmission extends Model
{
    protected $table = 'song_submissions';

    protected $fillable = [
        'user_id',
        'submission_type',
        'audio_type',
        'audio',
        'cover_image',
        'is_released',
        'released_date',
        'artist_name',
        'track_title',
        'release_type',
        'has_lyrics',
        'lyrics_language',
        'lyrics',
        'is_explicit',
        'instrumental_lease',
        'permission_youtubers',
        'pitch',
        'submit_type',
        'location',
        'has_concept',
        'concept',
        'has_tag',
        'tag_account_link',
        'has_hashtag',
        'hashtag',
        'package_id'
    ];

    public function songActivities(){
        return $this->hasMany(SongActivity::class, 'song_id');
    }
}