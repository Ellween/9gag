<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'countires',
        'avatar',
        'about','old_password',
        'new_password','avatar',
        'input_username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','old_password','new_password',
    ];

    public function comments()
    {
      return $this->hasMany('App\Comment');
    }

    public function posts()
    {
    return $this->hasMany('App\Post');
    }

  
}
