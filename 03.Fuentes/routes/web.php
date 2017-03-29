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
    return view('auth/login');
});


Route::get('/test', function() {
    return view('Prueba');
});


Route::get('RayoCarro/index', 'SitioController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('users', 'UserController');
    Route::resource('perfils', 'PerfilController');
    Route::resource('vehiculos', 'GestionVehController');
    Route::resource('personas', 'PersonaController');
    Route::resource('opcions', 'OpcionController');
    Route::resource('opcionperfil', 'OpcionPerfilController');
    Route::resource('registros','RegistroESController');
    Route::resource('conductorsV', 'ConductorVehiculoController');
    Route::resource('conductorsC', 'ConductorPersonaController');
    Route::get('listas/listConductores/{id}', 'RayoCarroFunctionsController@obtainConductores');
});

