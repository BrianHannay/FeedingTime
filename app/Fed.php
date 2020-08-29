<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fed extends Model
{
    //
    protected $table = 'fed';

    public function food() {
	    return $this->hasOne('App\Food');
    }
    public function feeding() {
	    return $this->hasOne('App\Feeding');
    }
}
