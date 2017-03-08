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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function() {
   return view('Prueba');
});


Route::get('RayoCarro/index', 'SitioController@index');
Route::get('RayoCarro/RegistroConductor', 'SitioController@registroC');
Route::get('RayoCarro/DeleteConductor', 'SitioController@deleteC');
/*
Route::get('TallerEstatico/verCurriculum/{nombre}', 'SitioController@verCurriculum');
Route::get('TallerEstatico/encuestaSatisfaccion', 'SitioController@encuestaSatisfaccion');
*/
