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

// Route::get('/inicio', function () {
//     return view('welcome');
// });
Route::get('/','ControllerInicio@inicio');
Route::get('/inicio','ControllerInicio@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('ponentes', 'PonenteController');

Route::resource('nuevos', 'nuevoController');


Route::resource('usuarios', 'UsuarioController');


Route::resource('tipoMantenimientos', 'tipo_mantenimientoController');

Route::resource('areas', 'AreaController');