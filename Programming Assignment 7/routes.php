<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/story/create', ['as' => 'story.create', 'uses' => 'StoryController@create']);
Route::post('/story/store', ['as' => 'story.store', 'uses' => 'StoryController@store']);
//Route::get('/greet/{name}', 'PageController@greet');
//Route::get('/weather/{location}', 'WeatherController@getWeather');
Route::get('/locations','LocationController@index');
Route::get('/stories','StoryController@index');
Route::get('/tags','TagController@tags');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
