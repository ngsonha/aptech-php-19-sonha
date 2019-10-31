<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    protected $fillable=["title","description","image","content","so_like","slug","user_id",];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
