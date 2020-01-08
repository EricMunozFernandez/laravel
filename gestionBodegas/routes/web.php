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

Route::get('/',function (){
    return redirect()->route('bodegas.index');
});

Route::get('/bodegas', 'BodegaController@index')->name('bodegas.index');

Route::get('/bodegas/create', 'BodegaController@create')->name('bodegas.create');

Route::post('/bodegas', 'BodegaController@store')->name('bodegas.store');

Route::get('/bodegas/{id}', 'BodegaController@show')->name('bodegas.show');

Route::get('/bodegas/{id}/edit', 'BodegaController@edit')->name('bodegas.edit');

Route::post('/bodegas/{id}', 'BodegaController@update')->name('bodegas.update');

Route::delete('/bodegas/{id}', 'BodegaController@destroy')->name('bodegas.destroy');

Route::get('/bodegas/{id}/vinos', 'VinoController@create')->name('vinos.create');

Route::post('/bodegas/{bodega_id}/vinos', 'VinoController@store')->name('vinos.store');

Route::get('/bodegas/{bodega_id}/vinos/{vino_id}/edit', 'VinoController@edit')->name('vinos.edit');

Route::post('/bodegas/{bodega_id}/vinos/{vino_id}', 'VinoController@update')->name('vinos.update');

Route::get('/bodegas/{bodega_id}/vinos/{vino_id}', 'VinoController@show')->name('vinos.show');

Route::delete('/bodegas/{bodega_id}/vinos/{vino_id}', 'VinoController@destroy')->name('vinos.destroy');



