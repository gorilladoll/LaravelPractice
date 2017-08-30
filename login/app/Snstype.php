<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snstype extends Model
{
    //
    protected $fillable = [
        'user_id', 'content', 'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id','created_at',
    ];
}
