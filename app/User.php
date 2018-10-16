<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'company',
        'user_photo',
        'email',
        'password',
        'con_password',
        'permissions',
        'last_login',
        'number',
        'address',
        'city',
        'postal_code',
        'gender',
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public static function byEmail($email)
    {
        return static::whereEmail($email)->first();
    }

    public static function byId($id)
    {
        return static::whereId($id)->first();
    }
    
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
