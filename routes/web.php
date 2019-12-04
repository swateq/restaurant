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

Route::get('/', 'MainPageController@index');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/news', 'NewsController@index');
    Route::get('/news/create', 'NewsController@create');
    Route::post('/news', 'NewsController@store');
    Route::get('/news/last', 'NewsController@last');
});

