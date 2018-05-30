<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Comment extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'comments';

    protected $fillable = [
        'user_id', 'place_id', 'comment',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
