<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Resources\View;
use App\Tag;
class TagController extends Controller
{
    //
    public function tags()
    {
        $tags = Tag::all();
        return view('tags', ['tags'=> $tags]);
    }
}
