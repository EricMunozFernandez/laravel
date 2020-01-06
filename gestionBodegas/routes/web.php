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

Route::get('/','BodegaController@index');

Route::get('/bodega/{id}','BodegaController@show');

Route::get('/craearBodega','BodegaController@create');

Route::get('/borrarBodega/{id}','BodegaController@destroy');

Route::get('/vino/{id}','VinoController@show');

Route::get('/bodega/{id}/createVino','VinoController@create');

Route::post('/storeVino','VinoController@store');

Route::get('/editarVino/{id}','VinoController@edit');

Route::post('/updateVino/{id}','VinoController@update');

Route::get('/borrarVino/{id}','VinoController@destroy');



