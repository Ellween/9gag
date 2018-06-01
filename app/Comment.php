<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'comment',
      'meme',
      'post_id',
      'user_id',
    ];

    protected $table = 'comments';

    public function posts()
    {
      return $this->belongsTo('App\Post');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
