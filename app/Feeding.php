<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feeding extends Model
{
    protected $table = 'feeding';

    public function user() {
	    return $this->hasOne('App\User');
    }
    public function location() {
	    return $this->hasOne('App\Location');
    }

    public function fed() {
	    return $this->hasMany('App\Fed');
    }
    public function food() {
	    public $this->hasManyThrough('App\Food', 'App\Fed');
    }
}
