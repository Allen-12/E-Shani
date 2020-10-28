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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profiles', function () {
    return view('profiles');
});// remake this route i was doing this for front end dev purposes

Route::get("/videocategories/create","VideoCategoryController@create");
Route::post("/videocategories","VideoCategoryController@store");

Route::get("/videocategories/{videoCategory}/videos/create","VideoController@create");
Route::post('/videocategories/{videoCategory}/videos','VideoController@store');
Route::get('/videocategories/{videoCategory}/videos','VideoController@index');
Route::get('/videocategories/{videoCategory}/videos/{video}/edit','VideoController@edit');
Route::patch('/videocategories/{videoCategory}/videos/{video}','VideoController@update');
Route::delete('/videocategories/{videoCategory}/videos/{video}/delete','VideoController@destroy');
