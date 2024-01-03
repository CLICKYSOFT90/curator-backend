<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongGenre extends Model
{
    protected $table = 'song_genres';

    protected $fillable = [
        'song_submission_id',
        'genre_id',
        'sub_genre_id'
    ];
}