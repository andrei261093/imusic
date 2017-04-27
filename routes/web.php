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
Auth::routes();
Route::get('/home', function () {
    return view('home');
});


Route::get('/add-songs', [
    'uses' => 'YoutubeController@getAddSongs',
    'as' => 'addSongs'
])->middleware('auth');

Route::get('/a', function () {
    return view('addVideos');
})->middleware('auth');



Route::get('/logout', [
    'uses' => 'HomeController@logout',
    'as' => 'logout'
])->middleware('auth');

Route::get('/bogdan', [
    'uses' => 'HomeController@bogdan',
    'as' => 'bogdan'
])->middleware('auth');

Route::get('/addVideo', [
    'uses' => 'HomeController@addVideo',
    'as' => 'addVideo'
])->middleware('auth');

Route::get('/song/{videoID}', [
    'uses' => 'HomeController@songView',
    'as' => 'songView'
])->middleware('auth');

Route::get('/mySongs', [
    'uses' => 'HomeController@getMySongs',
    'as' => 'mySongs'
])->middleware('auth');

Route::get('/search', [
    'uses' => 'HomeController@search',
    'as' => 'search'
])->middleware('auth');