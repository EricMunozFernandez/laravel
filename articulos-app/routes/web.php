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
    return "egibide";
});

Route::get('/paciente/{id}',function ($id){
    $data=request();
    return $data;
});

Route::get('/articulos','ArticleController@index')->name('article.index');

Route::get('/articulos/{id}','ArticleController@show')->name('article.show');

Route::get('/crear','ArticleController@create')->name('article.create');

Route::post('/guardar','ArticleController@store')->name('article.store');

Route::get('/destroy/{id}','ArticleController@destroy')->name('article.destroy');
