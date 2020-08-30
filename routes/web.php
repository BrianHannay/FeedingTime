<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/post', 'FeedingController@post')->name('post')->middleware('auth');
Route::get('/searchLocation/{search}', 'LocationController@search')->name('searchLocations')->middleware('auth');
Route::get('/addLocation/{search}', 'LocationController@create')->name('createLocation')->middleware('auth');
Route::get('/searchFoods/{search}', 'FoodController@search')->name('searchFoods')->middleware('auth');
