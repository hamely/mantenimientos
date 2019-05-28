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
Route::get('mis-ponentes','PonenteController@getPonentes');
Route::post('guardar-ponentes','PonenteController@guardar');

Route::resource('nuevos', 'nuevoController');

Route::resource('usuarios', 'UsuarioController');
Route::resource('tipoMantenimientos', 'tipo_mantenimientoController');
Route::resource('areas', 'AreaController');

Route::post('CrearEquipoPrincipal/', [ 'uses' => 'EquipoController@CrearEquipoPrincipal' ])->name('CrearEquipoPrincipal');
Route::resource('equipos', 'EquipoController');

Route::post('listarMarcas/', [ 'uses' => 'MarcaController@listarMarcas' ])->name('listarMarcas');
Route::resource('marcas', 'MarcaController');

Route::resource('unidadMedidas', 'Unidad_medidaController');

Route::resource('tipoEquipos', 'Tipo_equipoController');
Route::post('listarEquipoCategoria/', [ 'uses' => 'Tipo_equipoController@listarEquipoCategoria' ])->name('listarEquipoCategoria');

Route::resource('ubicacions', 'UbicacionController');
Route::resource('tipoInformes', 'Tipo_informeController');
Route::resource('categorias', 'CategoriaController');

//Equipo proceso
Route::resource('equipoPrincipal', 'EquipoPrincipal');
//Fin equipo proceso

Route::post('listarEmpresas/', [ 'uses' => 'EmpresaController@listarEmpresas' ])->name('listarEmpresas');
Route::resource('empresas', 'EmpresaController');

Route::resource('logiProveedores', 'Logi_ProveedoresController');

Route::resource('paises', 'PaisesController');

Route::post('listarPaises/', [ 'uses' => 'PaisesController@listarPaises' ])->name('listarPaises');
Route::resource('frecuencias', 'FrecuenciaController');

Route::post('listarTipos/', [ 'uses' => 'TipoController@listarTipos' ])->name('listarTipos');



//PROCESO DE INCIDENCIAS
Route::resource('incidencias', 'IncidenciasController');
Route::resource('ordenServicio','OrdenServicioController');
Route::resource('programarOrdenServicio','ProgramacionOrdenController');
//FIN

Route::resource('tipos', 'TipoController');


Route::resource('tipoIncidencias', 'TipoIncidenciaController');