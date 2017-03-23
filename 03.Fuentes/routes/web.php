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

    Route::get('users1/find', 'UserController@index');
    Route::get('vehiculos', 'GestionVehController@index');
    Route::get('vehiculos/create', 'GestionVehController@create');

});

Route::group(['middleware' => 'auth'], function() {
    Route::resource('conductores', 'GestionCondController');
    Route::get('conductores/create', 'GestionCondController@create');
});

