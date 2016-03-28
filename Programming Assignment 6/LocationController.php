<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resourses\Views;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Location;
use App\Story;

class LocationController extends Controller
{
    //
    public function index()
    {
        $location = Location::with('storys')->get();
        //$location = Location::all();
        return view('locations', ['locations' => $location]);
    }
 
}
