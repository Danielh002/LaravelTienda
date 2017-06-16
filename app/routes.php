<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::get('/', 'StoreController@index');

Route::get('/crear', function(){
	return View::make('Store.crearProducto');
});

Route::post('/insert', 'StoreController@insert');

Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@destroy'
]);