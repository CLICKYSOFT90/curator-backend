<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongActivity extends Model
{
    protected $table = 'song_activities';

    protected $fillable = [
        'user_id',
        'song_id',
        'playlist',
        'message',
        'song_event',
        'share',
        'share_date',
        'feedback',
        'about'
    ];

    public function getUser(){
        return $this->belongsTo(User::class, 'user_id','id');
    }

}