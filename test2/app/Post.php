<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public $timestamps = false;
    // public $fillable = ['title','body'];
    //10장 ORM때 생성

    //18장 모델 관계 생성
    public function user(){
      return $this->belongsTo('App\User');
    }
}
