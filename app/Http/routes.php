<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('cat/add',['as'=>'cat.add','uses'=>'CategorieController@create'] );
Route::post('cat/create',['as'=>'cat.create','uses'=>'CategorieController@store'] );
Route::get('cat/',['as'=>'cat.index','uses'=>'CategorieController@index'] );
Route::get('cat/delete/{id_categorie}',['as'=>'cat.delete','uses'=>'CategorieController@destroy'] );
Route::get('cat/edit/{id_categorie}',['as'=>'cat.edit','uses'=>'CategorieController@edit'] );
Route::put('cat/update/{id_categorie}',['as'=>'cat.update','uses'=>'CategorieController@update']);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
