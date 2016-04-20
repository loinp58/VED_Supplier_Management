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
    return view('dashboard');
});

Route::group(['prefix' => 'suppliers'], function(){
	Route::get('/', [
		'as' => 'supplier.index',
		'uses' => 'SuppliersController@index'
	]);
	Route::get('/create', [
		'as' => 'supplier.create',
		'uses' => 'SuppliersController@create'
	]);
	Route::get('/{id}', [
		'as' => 'supplier.show',
		'uses' => 'SuppliersController@show'
	]);
	Route::post('/', [
		'as' => 'supplier.store',
		'uses' => 'SuppliersController@store'
	]);
	Route::get('/{id}/edit', [
		'as' => 'supplier.edit',
		'uses' => 'SuppliersController@edit'
	]);
	Route::put('/{id}', [
		'as' => 'supplier.update',
		'uses' => 'SuppliersController@update'
	]);
	Route::delete('/{id}', [
		'as' => 'supplier.destroy',
		'uses' => 'SuppliersController@destroy'
	]);
	Route::get('/{id}/orders', [
		'as' => 'order_supplier.show',
		'uses' => 'SuppliersController@orderShow'
	]);
});

// PRODUCTS ROUTE
Route::group(['prefix' => 'suppliers/{id_supplier}/products'], function() {
	Route::get('/', [
		'as' => 'product.index',
		'uses' => 'ProductsController@index'
	]);
	Route::get('/create', [
		'as' => 'product.create',
		'uses' => 'ProductsController@create'
	]);
	Route::get('/{id_product}', [
		'as' => 'product.show',
		'uses' => 'ProductsController@show'
	]);
	Route::post('/', [
		'as' => 'product.store',
		'uses' => 'ProductsController@store'
	]);
	Route::get('/{id_product}/edit', [
		'as' => 'product.edit',
		'uses' => 'ProductsController@edit'
	]);
	Route::put('/{id_product}', [
		'as' => 'product.update',
		'uses' => 'ProductsController@update'
	]);
	Route::delete('/{id_product}', [
		'as' => 'product.destroy',
		'uses' => 'ProductsController@destroy'
	]);
	Route::delete('/delete-all', [
		'as' => 'product.destroyAll',
		'uses' => 'ProductsController@destroyAll'
	]);
});
//END PRODUCTS ROUTE
