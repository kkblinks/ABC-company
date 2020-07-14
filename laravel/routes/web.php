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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/create', 'BlogController@create');
Route::get('blog/show/{id}', 'BlogController@show');
Route::get('blog/edit/{id}', 'BlogController@edit');
Route::get('blog/delete/{id}', 'BlogController@destroy');
Route::post('blog/create', 'BlogController@store');
Route::put('blog/update/{id}', 'BlogController@update');
