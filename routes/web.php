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

//MATERI 1 CONTROLLER


//-----> Blade

Route::get('/Home', function(){
	return view('index');
});

Route::get('/Register', function(){
	return view('form');
});

Route::get('/Welcome', function(){
	return view('welcomes');
});

//-----> Controller

Route::get('/Home', 'HomeController@Home');
Route::get('/Register', 'AuthController@Register');
//buat nama dilink langsung
Route::get('/Welcome/{firstname}/{lastname}', 'AuthController@Welcome');
//buat nama diform register
Route::post('/Welcome', 'AuthController@Welcome_post');



//MATERI 2 MIGRATION


Route::get('/', function(){
	return view('/MateriKedua/table');
});

Route::get('/data-tables', function(){
	return view('/MateriKedua/datatables');
});



//MATERI 4 CRUD


// Route::get('/pertanyaan/create', 'PertanyaanController@create');
// Route::post('/pertanyaan', 'PertanyaanController@store');
// Route::get('/pertanyaan', 'PertanyaanController@index');
// Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
// Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
// Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
// Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');



//MATERI 5 MODEL

Route::resource('/pertanyaan', 'PertanyaanController');