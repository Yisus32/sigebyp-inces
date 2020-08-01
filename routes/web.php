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

//auth.login es la pagina de inicio, modificar luego
//Middleware guest que mantiene la vista del dashboard siempre y cuando esté auntetificado el usuario
Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');

//La ruta que hace referencia a la vista login, mediante el controlador LoginController
Route::get('login','Auth\LoginController@login')->name('login');

Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::get('dashboard','DashboardController@index')->name('dashboard');

//Controladores de la entidad personas
Route::resource('personas','PersonaController');
Route::get('personas/{id}/destroy', ['uses' => 'PersonaController@destroy'
	,'as' => 'personas.destroy']);

//Controladores de la entidad muebles
Route::resource('muebles','MuebleController');
Route::get('muebles/{id}/destroy', ['uses' => 'MuebleController@destroy'
	,'as' => 'muebles.destroy']);





