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



Route::group(['middleware'=>['web']], function (){
	
	Route::resource('quienessomos','QuienessomosController');
	Route::resource('contactanos','ContactanosController');
	
});

#Route::group(['prefix'=>'admin','middleware'=>['admin','auth']], function(){
Route::group(['prefix'=>'admin'], function(){

/*alumnos  */
	Route::resource('alumnos','AlumnosController');

	Route::get('alumnos/{id}/destroy',[
		'uses' => 'AlumnosController@destroy',
		'as' => 'admin.alumnos.destroy'
		]);

	Route::put('estatus/{id}',[
		'uses' => 'AlumnosController@updateestatus',
		'as' => 'admin.alumnos.updateestatus'
		]);

	Route::put('escuelas/{id}',[
		'uses' => 'AlumnosController@updateescuelas',
		'as' => 'admin.alumnos.updateescuelas'
		]);

	Route::put('direction/{id}',[
		'uses' => 'AlumnosController@updatedirecciones',
		'as' => 'admin.alumnos.updatedirecciones'
		]);

/* escuelas */
	Route::resource('escuelas','EscuelasController');
	
	Route::put('directores/{id}',[
		'uses' => 'EscuelasController@updatedirectores',
		'as' => 'admin.escuelas.updatedirectores'
		]);

	Route::put('direccion/{id}',[
		'uses' => 'EscuelasController@updatedirecciones',
		'as' => 'admin.escuelas.updatedirecciones'
		]);
	Route::get('escuelas/{id}/destroy',[
		'uses' => 'EscuelasController@destroy',
		'as' => 'admin.escuelas.destroy'
		]);
	/* Asesores */
	Route::resource('asesores','AsesoresController');

	Route::put('users/{id}',[
		'uses' => 'AsesoresController@updateuser',
		'as' => 'admin.asesores.updateuser'
		]);

	Route::put('direcciones/{id}',[
		'uses' => 'AsesoresController@updatedirecciones',
		'as' => 'admin.asesores.updatedirecciones'
		]);
});

#Route::group(['prefix'=>'asesor','middleware'=>['asesor','auth']], function(){
Route::group(['prefix'=>'asesor'], function(){

Route::resource('alumnos','AsesorAlumnosController');

});

#Route::auth();

#Route::get('/home', 'HomeController@index');
	Route::resource('escuelas','EscuelasController');

Route::resource('/general','GeneralController');

Route::get('admin/auth/login', [
	'uses' => 'Auth\AuthController@showLoginForm',
	'as'=> 'admin.auth.login']);

Route::post('admin/auth/login', [
	'uses' => 'Auth\AuthController@login',
	'as'=> 'admin.auth.login']);
 

Route::get('admin/auth/logout', [
	'uses' => 'Auth\AuthController@logout',
	'as'=> 'admin.auth.logout']);