<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;

class MapController extends Controller
{	
	public function showMap() {

		return view('map.map');
	}

}