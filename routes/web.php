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

Auth::routes();

Route::get('setting','UsersController@setting')->name('users.setting');


Route::get('/dashboard', function () {
    return view('index2');
})->name('dashboard');

Route::resource('users','UsersController');
Route::get('user-register','UsersController@register')->name('users.register');
Route::post('user-post-register','UsersController@post_register')->name('users.post_register');

Route::get('/home', 'HomeController@index')->name('home');
