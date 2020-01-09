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
    return redirect()->route('article.index');
});

Route::get('/articulos','ArticleController@index')->name('article.index');

Route::get('/articulos/create','ArticleController@create')->name('article.create')->middleware('auth');

Route::post('/articulos','ArticleController@store')->name('article.store');

Route::get('/articulos/{id}','ArticleController@show')->name('article.show');

Route::delete('/articulos/{id}','ArticleController@destroy')->name('article.destroy');

Route::post('/articulos/{id}/comentario','ComentarioController@store')->name('comentario.store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
