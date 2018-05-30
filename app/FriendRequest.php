<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    //
    protected $table = 'friend_requests';

    protected $fillable = [
        'sender_id', 'reciever_id', 'message', 'status'
    ];

}
