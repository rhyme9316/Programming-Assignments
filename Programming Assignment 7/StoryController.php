<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
use App\Location;
use DB;

class StoryController extends Controller
{
    //
    public function index()
    {
        $stories = Story::with('tags')->get();
        //$stories = Story::all();
        return view('stories',['stories' => $stories]);
    }

    public function create(){
    	$locations = Location::all();
    	return view('story.create', ['locations' => $locations]);
    }


    public function store(Request $request){
    	$story = Story::create( array(
            'title' => $request->input('title'),
            'story' => $request->input('story'),
            'location_id' => $request->input('location_id'),
            'published'=> $request->input('publish')
        ));
		$stories = array($story);
    	return view('stories',['stories' => $stories]);
    } 
}
