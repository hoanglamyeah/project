<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /*
     * @Description Table defined
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     *
     */
    public function role()
    {
        return $this->hasOne('App\Role');
    }

    /**
     *
     */
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     *
     */
    public function rate()
    {
        return $this->hasMany('App\Rate');
    }

    /**
     *
     */
    public function blog()
    {
        return $this->hasMany('App\Blog');
    }
}
