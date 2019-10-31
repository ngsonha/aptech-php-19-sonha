<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categpry extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
