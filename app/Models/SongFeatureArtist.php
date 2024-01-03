<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongFeatureArtist extends Model
{
    protected $table = 'song_feature_artists';

    protected $fillable = [
        'song_submission_id',
        'name'
    ];
}