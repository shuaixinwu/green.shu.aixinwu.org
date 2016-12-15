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
Route::get('/logout', 'UserController@logout');
Route::get('/ranklist', 'RecordController@ranklist');

Route::group(['middleware'=>'isLogin'],function(){
    Route::get('/add','RecordController@indexAdd');
    Route::get('/list','RecordController@listRecords');
    Route::get('/detail','RecordController@detailRecords');
    Route::post('/add','RecordController@add');
    Route::get('/complete', function(){return view('complete');});
    Route::post('/complete','UserController@updateInfo');
});