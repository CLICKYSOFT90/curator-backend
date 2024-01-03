<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats';

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'is_media',
        'media',
        'message',
        'seen'
    ];

    public function getReceiverCustomer()
    {
        return $this->belongsTo(User::class, 'receiver_id','id');
    }

    public function getSenderCustomer()
    {
        return $this->belongsTo(User::class, 'sender_id','id');
    }
}