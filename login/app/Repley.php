<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repley extends Model
{
    //
    protected $fillable = [
        'user_id','board_id', 'content'
    ];

    protected $hidden = [
      'remember_token','user_id','board_id'
    ];
}
