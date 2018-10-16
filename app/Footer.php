<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'footer_text', 'facebook', 'twitter', 'google_plus','instagram','youtube'
    ];
}
