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


Route::get('RegistroES/new', 'RegistroESController@new');
Route::post('RegistroES/save', 'RegistroESController@save');
Route::get('RegistroES/search', 'RegistroESController@search');
Route::get('RegistroES/find', 'RegistroESController@find');
Route::get('RegistroES/delete', 'RegistroESController@delete');

Route::get('RayoCarro/index', 'SitioController@index');

Route::get('RayoCarro/RegistroConductor', 'SitioController@registroC');
Route::get('RayoCarro/DeleteConductor', 'SitioController@deleteC');

Route::get('RegistroC/save', 'GestionCondController@registroC');
Route::get('RegistroC/delete', 'GestionCondController@deleteC');
Route::get('RegistroC/find', 'GestionCondController@findC');
Route::get('RegistroC/search', 'GestionCondController@searchC');


Route::get('RegistroV/save', 'GestionVehController@registroV');
Route::get('RegistroV/delete', 'GestionVehController@deleteV');
Route::get('RegistroV/find', 'GestionVehController@findV');
Route::get('RegistroV/search', 'GestionVehController@searchV');


Route::get('RegistroU/save', 'GestionUserController@registroU');
Route::get('RegistroU/delete', 'GestionUserController@deleteU');
Route::get('RegistroU/find', 'GestionUserController@index');
Route::get('RegistroU/search', 'GestionUserController@searchU');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('users', 'GestionUserController');



Route::group(['middleware' => 'auth'], function() {
    Route::resource('users', 'GestionUserController');
});
