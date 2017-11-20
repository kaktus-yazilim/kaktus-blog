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
    App::setLocale('tr');
    return view('welcome');
});

Route::get('/welcome', function () {
    App::setLocale('tr');
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'Blog\MainController@index')->name('blog');
Route::get('/{id}', 'Blog\MainController@postDetails')->name('postDetails');

