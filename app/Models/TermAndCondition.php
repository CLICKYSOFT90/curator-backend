<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermAndCondition extends Model
{
    protected $table = 'terms_and_conditions';

    protected $fillable = [
        'content'
    ];
}