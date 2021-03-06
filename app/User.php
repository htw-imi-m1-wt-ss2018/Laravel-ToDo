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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    * Get Todos of User
    *
    */
    public function todo()
    {
        return $this->hasMany('App\Todo');
    }

    /*
    * Get Categories of User
    *
    */
    public function categories()
    {
        return $this->hasMany('App\Category');
    }
}
