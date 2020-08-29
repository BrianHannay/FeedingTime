<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	protected $table = 'scheduled_feeding';

	public function template() {
		return $this->hasOne('App\Feeding');
	}
}
