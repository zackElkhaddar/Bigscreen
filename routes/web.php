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


/*																			
|--------------------------------------------------------------------------|
| 				Route de creation du questionnaire						   |
|--------------------------------------------------------------------------|
*/
Route::get('/','QuestionController@create')->name('front.create');

/*
|--------------------------------------------------------------------------|
| 		Route d'enregistrement des données du questionnaire				   |
|--------------------------------------------------------------------------|
*/
Route::POST('/','ReponseController@store')->name('front.store');

/*
|--------------------------------------------------------------------------|
| Route avec un slug id de gérération du lien des réponses utilisateur   |
|--------------------------------------------------------------------------|
*/
Route::get('/{id}','QuestionController@edite')
->where('id','[0-9a-fA-F]{8}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{4}\-[0-9a-fA-F]{12}')
->name('front.edite');

/*
|--------------------------------------------------------------------------|
| 			Route d'affichage du tableau des réponses utilisateur		   |
|--------------------------------------------------------------------------|
*/
Route::get('/validation',function(){
	return view('front.validation');
});


/*																		   
|--------------------------------------------------------------------------|
| 				Route d'affichage page d'accueil côté admin				   |
|--------------------------------------------------------------------------|
*/																		   
Route::get('/administration','HomeController@administration')->name('admin.administration');


/*																		   
|--------------------------------------------------------------------------|
| 				Route d'affichage page questions côté admin				   |
|--------------------------------------------------------------------------|
*/																		   
Route::get('/questions', 'HomeController@questions')->name('admin.questions');


/*																		   
|--------------------------------------------------------------------------|
| 				Route d'affichage page réponses côté admin				   |
|--------------------------------------------------------------------------|
*/												
Route::get('/reponses', 'HomeController@reponses')->name('admin.reponses');


/*																		   
|--------------------------------------------------------------------------|
| 				Route de déconnexion du backoffice côté admin			   |
|--------------------------------------------------------------------------|
*/												
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Authentification
Auth::routes();










