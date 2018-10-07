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

Route::get('/', function () {
    return view('welcome');
});

Route::get('catalogues', 'CatalogueController@index');
Route::get('catalogues/create', 'CatalogueController@create');
Route::get('catalogues/{id}', 'CatalogueController@show');
Route::post('catalogues', 'CatalogueController@store');
//Route::get('catalogues/{id}', 'CatalogueController@update');
//Route::get('catalogues/{id}', 'CatalogueController@delete');

Route::get('catalogues/category/{id}', 'CategoryController@show');
Route::get('categories', 'CategoryController@index');
Route::get('category/create', 'CategoryController@create');
Route::get('categories/{id}', 'CategoryController@show');
Route::post('category', 'CategoryController@store');
//Route::get('category/{id}', 'CategoryController@update');
//Route::get('category/{id}', 'CategoryController@delete');

Route::get('products', 'ProductController@index');
Route::get('product/create', 'ProductController@create');
Route::get('product/{id}', 'ProductController@show');
Route::post('product', 'ProductController@store');
//Route::get('product/{id}', 'ProductController@update');
//Route::get('product/{id}', 'ProductController@delete');