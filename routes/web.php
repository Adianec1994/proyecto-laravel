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
Route::post('mtto', function (){
    return 'test';
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('inicio', 'HomeController@inicio');
    //Route::post('mtto', 'Nomencladores\MantenimientoController@store');

    Route::resources([
        'bateria'       => 'Nomencladores\BateriaController',
        'central'       => 'Nomencladores\CentralController',
        'empresa'       => 'Nomencladores\EmpresaController',
        'grupo'         => 'Nomencladores\GrupoController',
        'hecho'         => 'Nomencladores\HechoController',
        'indisponible'  => 'Nomencladores\IndisponiblidadController',
        'mantenimiento' => 'Nomencladores\MantenimientoController',
        'potencia'      => 'Nomencladores\PotenciaController',
        'provincia'     => 'Nomencladores\ProvinciaController',
        'tecnologia'    => 'Nomencladores\TecnologiaController',
        'cobertura'     => 'Generales\CoberturaController',
        'datogeneral'   => 'Generales\DatoGeneralController',
        'eventodiario'  => 'Generales\EventoDiarioController',
        'generacion'    => 'Generales\GeneracionController',
        'glimitado'     => 'Generales\GrupoLimitadoController',
        'mcv'           => 'Generales\MCVController',
        'paila'         => 'Generales\PailaController'
    ]);




 //   Route::put('post/{id}', function ($id){
        //
   // })->middleware('auth');



});

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');


