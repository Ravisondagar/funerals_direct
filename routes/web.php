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
Route::get('/dashboard', function () {
    return view('index2');
})->name('dashboard');

Auth::routes();

Route::get('setting','UsersController@setting')->name('users.setting');
Route::resource('users','UsersController');
Route::get('user-register','UsersController@register')->name('users.register');
Route::post('user-post-register','UsersController@post_register')->name('users.post_register');
Route::get('user-login','UsersController@login')->name('users.login');
Route::post('user-post-login','UsersController@post_login')->name('users.post_login');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth'],'prefix'=>'admin','namespace'=>'Admin',], function(){

	Route::resource('categories','CategoriesController');
	Route::resource('blog-categories','BlogCategoriesController');
	Route::resource('blogs','BlogsController');
	Route::resource('ranges','RangesController');
	Route::resource('extras','ExtrasController');
	Route::resource('authors','AuthorsController');
	Route::resource('advertisements','AdvertisementsController');
	Route::resource('locations','LocationsController');

});

Route::group(['middleware'=>['auth'],'prefix'=>'portal','namespace'=>'Portal',], function(){

	Route::resource('funeral-home','FuneralHomesController');

});
