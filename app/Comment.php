<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name', 'email','comment'
    ];

    public function blog()
    {
        
        return $this->belongsTo('\App\Blog');
        
    }
}
