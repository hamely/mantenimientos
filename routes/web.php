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
Route::post('BuscarEquipoPrincipal/', [ 'uses' => 'EquipoController@BuscarEquipoPrincipal' ])->name('BuscarEquipoPrincipal');
Route::post('ActualizarEquipoPrincipal/', [ 'uses' => 'EquipoController@ActualizarEquipoPrincipal' ])->name('ActualizarEquipoPrincipal');
Route::post('listarEquipos/', [ 'uses' => 'EquipoController@listarEquipos' ])->name('listarEquipos');
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

Route::post('BuscarOrdenServicios/buscar', [ 'uses' => 'OrdenServicioController@BuscarOrdenServicios' ])->name('BuscarOrdenServicios');
Route::post('ordenServicio/create', [ 'uses' => 'OrdenServicioController@ordenServicioCreate' ])->name('ordenServicioCreate');
Route::post('ordenServicio/actualizar', [ 'uses' => 'OrdenServicioController@ordenServicioActualizar' ])->name('ordenServicioActualizar');
Route::resource('ordenServicio','OrdenServicioController');

Route::resource('programarOrdenServicio','ProgramacionOrdenController');
//FIN

Route::resource('tipos', 'TipoController');

Route::post('listarIncidencias/', [ 'uses' => 'TipoIncidenciaController@listarIncidencias' ])->name('listarIncidencias');
Route::resource('tipoIncidencias', 'TipoIncidenciaController');
Route::post('listarIncidenciasPendientes/', [ 'uses' => 'Equipo_incidenciaController@listarIncidenciasPendientes' ])->name('listarIncidenciasPendientes');

Route::post('listarTipoMantenimiento/', ['uses' =>'OrdenServicioController@listarTipoMantenimiento'])->name('listarTipoMantenimiento');

Route::post('listarTiendas/',['uses' =>'OrdenServicioController@listarTiendas'])->name('listarTiendas');

Route::post('crearIncidencia/', [ 'uses' => 'Equipo_incidenciaController@crearIncidencia' ])->name('crearIncidencia_equipo');
Route::post('BuscarIncidencia/', [ 'uses' => 'Equipo_incidenciaController@BuscarIncidencia' ])->name('BuscarIncidencia');
Route::post('ActualizarIncidencia/', [ 'uses' => 'Equipo_incidenciaController@ActualizarIncidencial' ])->name('ActualizarIncidencia');
Route::resource('equipo_incidenciaController', 'Equipo_incidenciaController');



Route::resource('tipoIncidencias', 'TipoIncidenciaController');

Route::resource('medidors', 'MedidorController');



Route::resource('tiendas', 'TiendaController');