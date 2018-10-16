<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $fillable = ['img', 'name','designations', 'body'];
}
