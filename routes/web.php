<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'RecordController@index');
Route::get('/login', 'UserController@login');
Route::get('/complete', function(){return view('complete');});
Route::get('/logout', 'UserController@logout');
Route::get('/ranklist', 'RecordController@ranklist');

Route::post('/complete','UserController@updateInfo');

//Route::group(['middleware'=>'auth'],function(){
    Route::get('/add',function(){return view('add');});
//};