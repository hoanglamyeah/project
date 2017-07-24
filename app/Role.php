<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     *
     * @Description Table defined
     *
     */
    protected $table = 'roles';

    /**
     * @funtion get user with role
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
