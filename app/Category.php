<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
      'category',
      'image',

    ];

    public function posts()
    {
      return $this->hasMany('App\Post');
    }
}
