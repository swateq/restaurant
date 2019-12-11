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
    Route::resource('/admin/news', 'NewsController');
    Route::get('admin/reservations','ReservationController@index');
    Route::post('admin/reservations','ReservationController@store');
    Route::post('admin/reservations/update','ReservationController@update');
    Route::post('admin/reservations/delete','ReservationController@destroy');
    Route::get('admin/reservations/create','ReservationController@create');
});


Route::post('/newsletter','NewsletterController@store');
Route::get('/admin/newsletter','NewsletterController@index');
Route::get('/admin/newsletter/search','NewsletterController@search');
