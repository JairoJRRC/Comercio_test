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

Route::get('/', function () {
    return view('welcome');
});

	


Route::get('Test',[
	'uses' => 'TestController@store',
	'as'=>'test.busqueda'
]);

Route::get('Client/{id}',[
	'uses' => 'TestController@edit',
	'as'=>'test.edit'
]);

Route::post('monto',[
	'uses' => 'TestController@monto',
	'as'=>'test.monto'
]);
	

