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

// SUPPLIER ROUTE
Route::group(['prefix' => 'suppliers'], function(){
	Route::get('/', [
		'as'   => 'supplier.index',
		'uses' => 'SuppliersController@index'
	]);
	Route::get('/create', [
		'as'   => 'supplier.create',
		'uses' => 'SuppliersController@create'
	]);
	Route::get('/{id}', [
		'as'   => 'supplier.show',
		'uses' => 'SuppliersController@show'
	]);
	Route::post('/', [
		'as'   => 'supplier.store',
		'uses' => 'SuppliersController@store'
	]);
	Route::get('/{id}/edit', [
		'as'   => 'supplier.edit',
		'uses' => 'SuppliersController@edit'
	]);
	Route::put('/{id}', [
		'as'   => 'supplier.update',
		'uses' => 'SuppliersController@update'
	]);
	Route::delete('/{id}', [
		'as'   => 'supplier.destroy',
		'uses' => 'SuppliersController@destroy'
	]);
	Route::get('/{id}/orders', [
		'as'   => 'order_supplier.show',
		'uses' => 'SuppliersController@orderShow'
	]);
});
// END SUPPLIER ROUTE

// PRODUCTS ROUTE
Route::group(['prefix' => 'suppliers/{id_supplier}/products'], function() {
	Route::get('/', [
		'as'   => 'product.index',
		'uses' => 'ProductsController@index'
	]);
	Route::get('/create', [
		'as'   => 'product.create',
		'uses' => 'ProductsController@create'
	]);
	Route::get('/{id_product}', [
		'as'   => 'product.show',
		'uses' => 'ProductsController@show'
	]);
	Route::post('/', [
		'as'   => 'product.store',
		'uses' => 'ProductsController@store'
	]);
	Route::get('/{id_product}/edit', [
		'as'   => 'product.edit',
		'uses' => 'ProductsController@edit'
	]);
	Route::put('/{id_product}', [
		'as'   => 'product.update',
		'uses' => 'ProductsController@update'
	]);
	Route::delete('/{id_product}', [
		'as'   => 'product.destroy',
		'uses' => 'ProductsController@destroy'
	]);
	Route::delete('/delete-all', [
		'as'   => 'product.destroyAll',
		'uses' => 'ProductsController@destroyAll'
	]);
});
//END PRODUCTS ROUTE

// REQUEST ORDER ROUTE
Route::group(['prefix' => 'request-orders'], function() {
	Route::get('/', [
		'as'   => 'request_order.index',
		'uses' => 'RequestOrdersController@index'
	]);
	Route::get('/create', [
		'as'   => 'request_order.create',
		'uses' => 'RequestOrdersController@create'
	]);
	Route::get('/{id}', [
		'as'   => 'request_order.show',
		'uses' => 'RequestOrdersController@show'
	]);
	Route::post('/', [
		'as'   => 'request_order.store',
		'uses' => 'RequestOrdersController@store'
	]);
	Route::get('/{id}/edit', [
		'as'   => 'request_order.edit',
		'uses' => 'RequestOrdersController@edit'
	]);
	Route::put('/{id}', [
		'as'   => 'request_order.update',
		'uses' => 'RequestOrdersController@update'
	]);
	Route::delete('/{id}', [
		'as'   => 'request_order.destroy',
		'uses' => 'RequestOrdersController@destroy'
	]);
});
// END REQUEST ORDER ROUTE

// ORDER ROUTE
Route::group(['prefix' => 'orders'], function() {
	Route::get('/', [
		'as'   => 'order.index',
		'uses' => 'OrdersController@index'
	]);
	Route::get('/create', [
		'as'   => 'order.create',
		'uses' => 'OrdersController@create'
	]);
	Route::get('/{id}', [
		'as'   => 'order.show',
		'uses' => 'OrdersController@show'
	]);
	Route::post('/', [
		'as'   => 'order.store',
		'uses' => 'OrdersController@store'
	]);
	Route::get('/{id}/edit', [
		'as'   => 'order.edit',
		'uses' => 'OrdersController@edit'
	]);
	Route::put('/{id}', [
		'as'   => 'order.update',
		'uses' => 'OrdersController@update'
	]);
	Route::delete('/{id}', [
		'as'   => 'order.destroy',
		'uses' => 'OrdersController@destroy'
	]);
});
// END ORDER ROUTE