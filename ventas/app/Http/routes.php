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
	Route::group(array('prefix' => 'productos'), function(){
		Route::get('/', function(){
			return view('administrar.productos.index');
		});
	});
	Route::group(array('prefix' => 'proveedores'), function(){
		Route::get('/', function(){
			return view('administrar.proveedores.index');
		});
	});
	Route::group(array('prefix'=>'categorias'),function (){
		Route::post('/',['uses'=>'CategoriasController@index']);
		Route::post('store',[
							'as'=>'categorias.store',
							'uses'=>'CategoriasController@store']);
	});
	Route::resource('categorias','CategoriasController');
});


Route::get('controlador',['uses'=>'HomeController@index'] );
Route::get('svg',function(){
	return view('test.svg');
});