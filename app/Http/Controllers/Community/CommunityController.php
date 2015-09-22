<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;

class CommunityController extends Controller
{	
	public function showIndexPage() {

		return view('community.index');
	}

}