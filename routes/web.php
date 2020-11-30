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

Route::get('/profiles', 'ChildController@index');
Route::get("/profiles/create", "ChildController@create");
Route::post("/profiles", "ChildController@store");
Route::patch("/profiles/{child}", "ChildController@update")->name("profile.update");
Route::get('/profiles/{child}/show', 'ChildController@show'); // This route shall change very soon


// These routes are used for the admin side
Route::get("/admin/videocategories/create","VideoCategoryController@create");
Route::post("/admin/videocategories","VideoCategoryController@store");

Route::get("/admin/videocategories/{videoCategory}/videos/create","VideoController@create");
Route::post('/admin/videocategories/{videoCategory}/videos','VideoController@store');
Route::get('/admin/videocategories/{videoCategory}/videos','VideoController@index');
Route::get('/admin/videocategories/{videoCategory}/videos/{video}/edit','VideoController@edit');
Route::patch('/admin/videocategories/{videoCategory}/videos/{video}','VideoController@update');
Route::delete('/admin/videocategories/{videoCategory}/videos/{video}/delete','VideoController@destroy');
