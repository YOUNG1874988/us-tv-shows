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

// Route::get('/', 'HomeController@index');
Route::get('/', function(){
    return view('theme2.index');
});
Route::get('category/{id?}', 'HomeController@categories');
Route::get('video/{id}', 'HomeController@detail');
Route::get('ranking', 'HomeController@rankingList');
Route::get('search', 'HomeController@search');


Route::get('/test', function(){
    dd(date("Y-m-d H:i:s"));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
