<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    public function fed() {
	    return $this->hasMany('App\Fed');
    }
}
