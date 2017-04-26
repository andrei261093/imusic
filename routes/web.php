<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});


Route::get('/add-songs', [
    'uses' => 'YoutubeController@getAddSongs',
    'as' => 'addSongs'
]);

Route::get('/a', function () {
    return view('addVideos');
});

Auth::routes();

Route::get('/logout', [
    'uses' => 'HomeController@logout',
    'as' => 'logout'
]);

Route::get('/bogdan', [
    'uses' => 'HomeController@bogdan',
    'as' => 'bogdan'
]);

Route::get('/addVideo', [
    'uses' => 'HomeController@addVideo',
    'as' => 'addVideo'
]);

Route::get('/mySongs/{videoID}', [
    'uses' => 'HomeController@getMyVideos',
    'as' => 'mySongs'
]);