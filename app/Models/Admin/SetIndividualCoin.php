<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SetIndividualCoin extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'coins',
        'elite',
        'user_type',
        'added_by',
        'is_active',
    ];
}
