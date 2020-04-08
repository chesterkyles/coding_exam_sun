<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/article', 'ArticleController@index')->name('article.index');
Route::get('/article/create', 'ArticleController@create')->name('article.create');
Route::post('/article', 'ArticleController@store')->name('article.store');
Route::get('/article/{article}', 'ArticleController@show')->name('article.show');
Route::get('/article/{article}/edit', 'ArticleController@edit')->name('article.edit');
Route::patch('/article/{article}', 'ArticleController@update')->name('article.update');
Route::delete('/article/{article}', 'ArticleController@destroy')->name('article.destroy');
