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
Route::get('layout', 'HomeController@index');
Route::get('/layouts', function () {
    return view('app');
});


//Route::post('mantenimientow/{{id}}','MantenimientoController@update');
Route::get('cobertura_central/{idCElectricas}','Operaciones\CoberturaController@coberturasPorCentrales');
Route::get('paila_central/{idCElectricas}','Operaciones\PailaController@pailasPorCentrales');
Route::get('generacion_grupo/{idGrupos}','Operaciones\GeneracionController@generacionPorGrupos');
Route::get('emergencia_provincia/{idProvincias}','Operaciones\EmergenciaController@emergenciaPorProvincias');
Route::get('mcv_grupo/{idGrupos}','Operaciones\MCVController@trabajosPorGrupos');

Route::get('cambiar_password','Nomencladores\Usuario@cambiarPassword');
Route::post('usuario_nuevo_password','Nomencladores\Usuario@nuevoPassword');


Route::group(['middleware' => ['auth']], function () {
    Route::get('inicio', 'HomeController@inicio');
    Route::post('mttoedit', 'Nomencladores\MantenimientoController@update');

    Route::resources([
        'bateria'       => 'Nomencladores\BateriaController',
        'central'       => 'Nomencladores\CentralController',
        'empresa'       => 'Nomencladores\EmpresaController',
        'grupo'         => 'Nomencladores\GrupoController',
        'hecho'         => 'Nomencladores\HechoController',
        'estado'        => 'Nomencladores\EstadoController',
        'mantenimiento' => 'Nomencladores\MantenimientoController',
        'provincia'     => 'Nomencladores\ProvinciaController',
        'tecnologia'    => 'Nomencladores\TecnologiaController',
        'cobertura'     => 'Operaciones\CoberturaController',
        'datogeneral'   => 'Generales\DatoGeneralController',
        'eventodiario'  => 'Generales\EventoDiarioController',
        'generacion'    => 'Operaciones\GeneracionController',
        'glimitado'     => 'Generales\GrupoLimitadoController',
        'mcv'           => 'Operaciones\MCVController',
        'paila'         => 'Operaciones\PailaController',
        'emergencia'    => 'Operaciones\EmergenciaController',
        'usuario'       => 'Configuracion\UsuarioController'

    ]);




 //   Route::put('post/{id}', function ($id){
        //
   // })->middleware('auth');



});

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');


