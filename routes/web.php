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

 Route::get('/', function() {
     return view('welcome');
 });
 
	Route::get('/Index/index','IndexController@index');
	Route::get('/Index/index','IndexController@index');




	Route::get('/Regist/regist','RegistController@Regist');





//Auth::routes();
//
//Route::get('/index', 'HomeController@index')->name('home');
// Route::get('/Index/user', 'HomeController@index')->name('home');

