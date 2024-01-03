<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavoriteGenre extends Model
{
    use HasFactory;
    protected $table = 'user_favorite_genres';
    protected $fillable = [
      'user_id',
      'genre_id',
      'sub_genre_id',
    ];
}
