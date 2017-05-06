<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

class SearchController extends Controller
{

    public function find(Request $request)
	{
	    return Venue::search($request->get('q'))->get();
	}


}
