<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //
    protected $fillable = [
        'user_id','subject', 'content'
    ];

    protected $hidden = [
      'remember_token','user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
