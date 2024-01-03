<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LyricLanguage extends Model
{
    protected $table = 'lyric_languages';

    protected $fillable = [
        'name'
    ];
}