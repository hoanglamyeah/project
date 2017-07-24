<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    /**
     * @Description Table defined
     */
    protected $table = 'rates';

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
