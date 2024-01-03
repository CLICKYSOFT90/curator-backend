<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
      'user_id',
      'country_id',
      'state',
      'zip_code',
      'payment_type',
      'transaction_id',
      'amount',
    ];

}