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

Route::get('/', function () {
    return view('welcome');
});

//-----> Blade

// Route::get('/Home', function(){
// 	return view('index');
// });

// Route::get('/Register', function(){
// 	return view('form');
// });

// Route::get('/Welcome', function(){
// 	return view('welcomes');
// });

//-----> Controller

Route::get('/Home', 'HomeController@Home');
Route::get('/Register', 'AuthController@Register');
//buat nama dilink langsung
Route::get('/Welcome/{firstname}/{lastname}', 'AuthController@Welcome');
//buat nama diform register
Route::post('/Welcome', 'AuthController@Welcome_post');