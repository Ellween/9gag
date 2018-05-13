<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title',
      'picture',
    ];

    public function tags(){
      return $this->belongsToMany('App\Tag');
    }

    public function category()
    {
      return $this->belongsTo('App\Category');
    }
}
