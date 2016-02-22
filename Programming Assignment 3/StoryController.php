<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
class StoryController extends Controller
{
    //
    public function index()
    {
        $stories = Story::all();
        return view('stories',['stories' => $stories]);
    }
}
