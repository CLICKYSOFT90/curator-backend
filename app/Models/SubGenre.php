<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubGenre extends Model
{
    protected $table = 'sub_genres';

    protected $fillable = [
        'genre_id',
        'name'
    ];
}