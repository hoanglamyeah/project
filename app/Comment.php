<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * @Description Table defined
     */
    protected $table = 'comments';

    /**
     *
     */
    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }

    /**
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
