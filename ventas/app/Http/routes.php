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
    return view('empleado.index');
});

Route::group(array('prefix' => 'administrar'), function(){
	// Route::get('clientes', function(){
	// 	return view('administrar.nuevo.cliente');
	// });
	Route::group(array('prefix' => 'productos'), function(){
		Route::get('/', function(){
			return view('productos.index');
		});
	});
});


Route::get('controlador',['uses'=>'HomeController@index'] );
Route::get('svg',function(){
	return view('test.svg');
});