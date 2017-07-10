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

// DEFINE ADMIN ROUTES
// ALL ADMIN ROUTES WILL BE PLACED HERE
Route::group(array('prefix' => 'admin'), function(){
    Route::get('/', 'AdminController@index')->name('admin');
});

// DEFINE API ROUTES
// ALL API ROUTES WILL BE PLACED HERE
Route::group(array('prefix' => 'api'), function(){
    Route::get('/', function(){
        return view('api');
    });
});

// STORE PREVIEW ROUTES
// THIS WILL SIMULATE REAL SHOP LAYOUT
Route::get('/', function () {
    return view('preview');
});
