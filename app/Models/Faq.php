<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'answer',
        'is_active',
        'is_popular',
        'is_global'
    ];

    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeIsPopular($query)
    {
        return $query->where('is_popular', 1);
    }

    public function scopeIsNotPopular($query)
    {
        return $query->where('is_popular', 0);
    }

    public function scopeIsGlobal($query)
    {
        return $query->where('is_global', 1);
    }

    public function scopeIsNotGlobal($query)
    {
        return $query->where('is_global', 0);
    }
}