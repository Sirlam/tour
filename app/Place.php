<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Place extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'places';

    protected $fillable = [
        'title', 'location', 'user_id', 'description', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5',
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
