<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BundlePackage extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'package_name',
        'package_price',
        'added_by',
        'coins',
        'is_active',
    ];
}
