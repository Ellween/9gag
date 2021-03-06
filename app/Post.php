<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title',
      'picture',
      'category',
    ];

    public function tags(){
      return $this->belongsToMany('App\Tag');
    }

    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }
    public function user()
    { 
    return $this->belongsTo('App\User');
    }
}
