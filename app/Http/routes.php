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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::resource('/','InicioController');



Route::group(['middleware'=>['web']], function (){
	
	Route::resource('quienessomos','QuienessomosController');
	Route::resource('contactanos','ContactanosController');
	Route::resource('registro','RegistroController');
	
});

Route::group(['prefix'=>'admin','middleware'=>['admin','auth']], function(){
#Route::group(['prefix'=>'admin'], function(){

/*alumnos  */
	Route::resource('alumnos','AlumnosController');

	
	Route::resource('revisores','RevisoresController');


	Route::resource('plan','PlandetrabajoController');
	
	Route::get('ante/{id}/destroy',[
		'uses' => 'PlandetrabajoController@destroy',
		'as' => 'admin.plan.destroy'
		]);

	Route::get('esquema/{id}/destroy',[
		'uses' => 'PlandetrabajoController@destroyesquema',
		'as' => 'admin.plan.destroyesquema'
		]);

	Route::get('createesquema/',[
	'uses' => 'PlandetrabajoController@createesquema',
	'as' => 'admin.plan.createesquema'
	]);

	Route::post('esquemas/',[
		'uses' => 'PlandetrabajoController@storee',
		'as' => 'admin.plan.storee'
		]);

	Route::put('upesquema/{id}',[
		'uses' => 'PlandetrabajoController@upesquema',
		'as' => 'admin.plan.upesquema'
		]);

	Route::get('editesquema/{id}',[
		'uses' => 'PlandetrabajoController@editesquema',
		'as' => 'admin.plan.editesquema'
		]);



	Route::resource('presidente','AdminPresidenteController');
	Route::resource('secretario','AdminSecretarioController');
	Route::resource('esquema','EsquemasController');

	Route::get('verdiairio/{id}',[
	'uses' => 'EsquemasController@veresquema',
	'as' => 'admin.esquema.veresquema'
	]);
	
	
	Route::get('list',[
	'uses' => 'AlumnosController@list',
	'as' => 'admin.alumnos.list'
	]);

	Route::get('alumnoss/{id}/destroy',[
		'uses' => 'AlumnosController@destroy',
		'as' => 'admin.alumnos.destroy'
		]);

	Route::put('estatus/{id}',[
		'uses' => 'AlumnosController@updateestatus',
		'as' => 'admin.alumnos.updateestatus'
		]);
Route::get('asignar/{id}',[
		'uses' => 'AlumnosController@asignar',
		'as' => 'admin.alumnos.asignar'
		]);
	Route::put('escuelass/{id}',[
		'uses' => 'AlumnosController@updateescuelas',
		'as' => 'admin.alumnos.updateescuelas'
		]);
	Route::put('updateasesorr/{id}',[
		'uses' => 'AlumnosController@updateasesorr',
		'as' => 'admin.alumnos.updateasesorr'
		]);

	Route::put('direction/{id}',[
		'uses' => 'AlumnosController@updatedirecciones',
		'as' => 'admin.alumnos.updatedirecciones'
		]);

/* escuelas */
	Route::resource('escuelas','EscuelasController');
	
	Route::put('directoresescuela/{id}',[
		'uses' => 'EscuelasController@updatedirectores',
		'as' => 'admin.escuelas.updatedirectores'
		]);

	Route::put('direccionnn/{id}',[
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

	Route::get('asesoress/{id}/destroy',[
		'uses' => 'AsesoresController@destroy',
		'as' => 'admin.asesores.destroy'
		]);


	#perfil
	Route::resource('perfil','AdminperfilController');
	Route::resource('perfilsub','AdminsubperfilController');
	
	Route::put('direccion/{id}',[
		'uses' => 'AdminPresidenteController@updatedireccion',
		'as' => 'admin.presidente.updatedireccion'
		]);

	Route::put('updateuserpresidente/{id}',[
		'uses' => 'AdminPresidenteController@updateuserpresidente',
		'as' => 'admin.presidente.updateuserpresidente'
		]);

	Route::get('presidente/{id}/destroy',[
		'uses' => 'AdminPresidenteController@destroy',
		'as' => 'admin.presidente.destroy'
		]);

	Route::put('updateusersecretario/{id}',[
		'uses' => 'AdminSecretarioController@updateusersecretario',
		'as' => 'admin.secretario.updateusersecretario'
		]);

	Route::get('secretario/{id}/destroy',[
		'uses' => 'AdminSecretarioController@destroy',
		'as' => 'admin.secretario.destroy'
		]);
	
	Route::put('direccionn/{id}',[
		'uses' => 'AdminSecretarioController@updatedireccion',
		'as' => 'admin.secretario.updatedireccion'
		]);



	Route::put('updateuserperfil/{id}',[
		'uses' => 'AdminperfilController@updateuserperfil',
		'as' => 'admin.perfil.updateuserperfil'
		]);

	Route::put('direccion/{id}',[
		'uses' => 'AdminperfilController@updatedireccion',
		'as' => 'admin.perfil.updatedireccion'
		]);


});


Route::group(['prefix'=>'secretario','middleware'=>['secretario','auth']], function(){

Route::resource('perfil','SecretarioPerfilController');
Route::resource('acta','ActaController');


Route::get('actapdf/{id}',[
	'uses' => 'ActaController@actapdf',
	'as' => 'secretario.pdf.actapdf'
	]);

Route::put('updateusersecretario/{id}',[
		'uses' => 'SecretarioPerfilController@updateusersecretario',
		'as' => 'secretario.perfil.updateusersecretario'
		]);

Route::put('updatedireccionn/{id}',[
		'uses' => 'SecretarioPerfilController@updatedireccion',
		'as' => 'secretario.perfil.updatedireccion'
		]);

	});

#inicio asesores
Route::group(['prefix'=>'asesor','middleware'=>['asesor','auth']], function(){

Route::resource('alumnos','AsesorAlumnosController');

Route::put('escuelaa/{id}',[
		'uses' => 'AsesorAlumnosController@escuelaa',
		'as' => 'asesor.alumno.escuelaa'
		]);

Route::put('updateuserr/{id}',[
		'uses' => 'AsesorAlumnosController@updateuserr',
		'as' => 'asesor.user.updateuserr'
		]);

Route::put('updatedir/{id}',[
		'uses' => 'AsesorAlumnosController@updatedir',
		'as' => 'asesor.escuelas.updatedir'
		]);

Route::get('descargaanteproyecto/{id}',[
	'uses' => 'AsesorAlumnosController@descargaanteproyecto',
	'as' => 'asesor.alumno.descargaanteproyecto'
	]);

Route::put('comentariodocumento/{id}',[
		'uses' => 'AsesorAlumnosController@comentariodocumento',
		'as' => 'asesor.alumno.comentariodocumento'
		]);

Route::get('ver/{id}',[
	'uses' => 'AsesorAlumnosController@ver',
	'as' => 'asesor.alumno.ver'
	]);

Route::get('verdiairio/{id}',[
	'uses' => 'AsesorAlumnosController@verdiairio',
	'as' => 'asesor.alumno.verdiairio'
	]);
});

Route::get('descargadiarioasesor/{id}',[
	'uses' => 'AsesorAlumnosController@descargadiarioasesor',
	'as' => 'asesor.alumno.descargadiarioasesor'
	]);


Route::put('updatefotoasesor/{id}',[
		'uses' => 'AsesorAlumnosController@updatefotoasesor',
		'as' => 'alumno.update.updatefotoasesor'
		]);
#fin asesores

#inicio alumnos
Route::group(['prefix'=>'alumno','middleware'=>['alumno','auth']], function(){
Route::resource('perfil','PerfilController');


Route::resource('esquema','AlumnoEsquemaController');
Route::get('descarga/{id}',[
	'uses' => 'AlumnoEsquemaController@descarga',
	'as' => 'alumno.descarga.descarga'
	]);

Route::put('comentdocument/{id}',[
		'uses' => 'AlumnoEsquemaController@comentdocument',
		'as' => 'alumno.esquema.comentdocument'
		]);

Route::put('updatefoto/{id}',[
		'uses' => 'PerfilController@updatefoto',
		'as' => 'alumno.update.updatefoto'
		]);

Route::put('updatedirecc/{id}',[
		'uses' => 'PerfilController@updatedirecc',
		'as' => 'alumno.update.updatedirecc'
		]);


Route::put('updatetutor/{id}',[
		'uses' => 'PerfilController@updatetutor',
		'as' => 'alumno.update.updatetutor'
		]);



Route::resource('ensayo','AlumnoEnsayoController');

Route::get('descargaensayo/{id}',[
	'uses' => 'AlumnoEnsayoController@descarga',
	'as' => 'alumno.descargaensayo.descarga'
	]);

Route::put('updateensayo/{id}',[
		'uses' => 'AlumnoEnsayoController@updateensayo',
		'as' => 'alumno.update.updateensayo'
		]);


Route::get('verensayo/{id}',[
	'uses' => 'AlumnoEnsayoController@verensayo',
	'as' => 'alumno.show.verensayo'
	]);

Route::resource('diario','AlumnoDiarioController');

Route::get('vereanteproyecto/{id}',[
	'uses' => 'AlumnoDiarioController@vereanteproyecto',
	'as' => 'alumno.anteproyecto.vereanteproyecto'
	]);

Route::put('updateanteproyecto/{id}',[
		'uses' => 'AlumnoDiarioController@updateanteproyecto',
		'as' => 'alumno.update.updateanteproyecto'
		]);



Route::get('descargadiario/{id}',[
	'uses' => 'AlumnoDiarioController@descargadiario',
	'as' => 'alumno.descargadiario.descarga'
	]);
});



#Route::auth();
#Route::get('/home', 'HomeController@index');
#Route::resource('escuelas','EscuelasController');

Route::resource('/general','GeneralController');
/*
Route::get('admin/auth/login', [
	'uses' => 'Auth\AuthController@showLoginForm',
	'as'=> 'admin.auth.login']);
*/
Route::post('admin/auth/login', [
	'uses' => 'Auth\AuthController@login',
	'as'=> 'admin.auth.login']);
 

Route::get('admin/auth/logout', [
	'uses' => 'Auth\AuthController@logout',
	'as'=> 'admin.auth.logout']);