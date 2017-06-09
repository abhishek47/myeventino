<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Venue;
use App\Event;

class PagesController extends Controller
{
    
    public function index()
    {
    	$page = 'home';

    	$venues = Venue::latest()->limit(5)->get();

    	$events = Event::latest()->limit(5)->get();

    	return view('welcome', compact('page', 'venues', 'events'));
    }
}
