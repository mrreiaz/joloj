<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'name', 
        'short_title', 
        'long_title',
        'short_description',
        'long_description',
        'brand_name',
        'brand_photo',
        'product_photo',
        'real_price',
        'discunt_price',
        'discunt_price_by_parsents',
        'quantity',
        'instagram_links',
        'facebook_links',
        'youtube_links'
    ];
    
    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
    
    
    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
    
    
}
