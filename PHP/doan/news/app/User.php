<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function profiles()
    {
        return $this->hasOne('App\Profile');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
