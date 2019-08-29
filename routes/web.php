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


Route::get('/','QuestionController@create')->name('front.create');
Route::POST('/','ReponseController@store')->name('front.store');
Route::get('/validation',function(){
	return view('front.validation');
});

Route::get('/{id}','QuestionController@edite')->where('id','[0-9a-fA-F]{8}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{12}')->name('front.edite');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
