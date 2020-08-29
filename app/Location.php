<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';
    public function feeding() {
	    return $this->hasMany('App\Feeding');
    }
}
