<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedingsController extends Controller
{
    //
	public function post() {
		\App\Feeding::create();
	}
}
