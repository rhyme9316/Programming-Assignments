<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resourses\Views;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Location;

class LocationController extends Controller
{
    //
    public function index()
    {
        $location = Location::all();
        return view('locations', ['locations' => $location]);
    }
 
}
