<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IncidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         $data=DB::table('equipo_incidencia')
                                ->select('equipo.id as idEquipo','equipo.descripcion as descripcionEquipo','empresas.id as idEmpresa','empresas.nombre as nombreEmpresa','equipo_incidencia.id as idInsidencia','equipo_incidencia.descripcion as descripIncidencia','equipo_incidencia.fecha_incidencia','equipo_incidencia.codigo as codigoEquipoIncidencia','tipo_incidencias.id as idTipoInsicencia','tipo_incidencias.description as descriptionTipoInsicencia')
                                ->join('equipo', 'equipo.id', '=', 'equipo_incidencia.id_equipo')
                                ->join('empresas', 'empresas.id', '=', 'equipo_incidencia.id_empresa')
                                ->join('tipo_incidencias', 'tipo_incidencias.id', '=', 'equipo_incidencia.id_incidencia')
                                ->get();
      

        return view('admin.incidencias.index',['data' =>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
     
     public function create()
    {
        return view('admin.incidencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
