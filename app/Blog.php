<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'blog_img', 'title','body'
    ];
    
    
    
    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }
    
    
}
