<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function search(string $searchTerm) {
	    return \App\Location::where('description', 'like', '%' . $searchTerm . '%')->get()->toJson();
    }
}
