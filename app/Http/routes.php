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
Route::get('cat/delete/{id_categorie}/{id_caisse}',['as'=>'cat.delete','uses'=>'CategorieController@destroy'] );
Route::get('cat/edit/{id_categorie}/{id_caisse}',['as'=>'cat.edit','uses'=>'CategorieController@edit'] );
Route::put('cat/update/{id_categorie}/{id_caisse}',['as'=>'cat.update','uses'=>'CategorieController@update']);

//produit routes
//
//Route::get('produit/',['as'=>'produit.index','uses'=>'ProduitController@index'] );
//Route::get('produit/add',['as'=>'produit.add','uses'=>'ProduitController@create'] );
//Route::post('produit/create',['as'=>'produit.create','uses'=>'ProduitController@store'] );
//Route::get('produit/delete/{id_produit}/{id_caisse}',['as'=>'produit.delete','uses'=>'ProduitController@destroy'] );
//Route::get('produit/edit/{id_produit}/{id_caisse}',['as'=>'produit.edit','uses'=>'ProduitController@edit'] );
//Route::put('produit/update/{id_produit}',['as'=>'produit.update','uses'=>'ProduitController@update']);


//Client routes

Route::get('clients/',['as'=>'client.index','uses'=>'ClientController@index'] );
Route::get('clients/add',['as'=>'client.add','uses'=>'ClientController@create'] );
Route::post('clients/create',['as'=>'client.create','uses'=>'ClientController@store'] );
Route::get('clients/delete/{id_client}/{id_caisse}',['as'=>'client.delete','uses'=>'ClientController@destroy'] );
Route::get('clients/edit/{id_client}/{id_caisse}',['as'=>'client.edit','uses'=>'ClientController@edit'] );
Route::put('clients/update/{id_client}/{id_caisse}',['as'=>'client.update','uses'=>'ClientController@update']);

//Client routes

Route::get('catalogue/',['as'=>'catalogue.index','uses'=>'ProduitController@catalogue'] );

//Produit routes

Route::get('produit/',['as'=>'produit.index','uses'=>'ProduitController@index'] );
Route::get('produit/add',['as'=>'produit.add','uses'=>'ProduitController@create'] );
Route::post('produit/create',['as'=>'produit.create','uses'=>'ProduitController@store'] );
Route::get('produit/delete/{id_produit}/{id_caisse}',['as'=>'produit.delete','uses'=>'ProduitController@destroy'] );
Route::get('produit/edit/{id_produit}/{id_caisse}',['as'=>'produit.edit','uses'=>'ProduitController@edit'] );
Route::put('produit/update/{id_produit}/{id_caisse}',['as'=>'produit.update','uses'=>'ProduitController@update']);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
