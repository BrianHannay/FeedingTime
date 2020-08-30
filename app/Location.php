<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';
    protected $fillable = ['coordinates', 'description'];
    public function feeding() {
	    return $this->hasMany('App\Feeding');
    }
}
