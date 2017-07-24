<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * @Description Table defined
     *
     */
    protected $table = 'blogs';

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
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
