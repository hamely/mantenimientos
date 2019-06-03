<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Equipo_incidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function crearIncidencia(Request $request)
    {


        DB::table('equipo_incidencia')->insert(
                [

                'codigo' => $request->codigo, 
                'id_equipo' => $request->id_equipo,
                'id_incidencia' =>$request->id_incidencia,
                'id_empresa' => $request->id_tienda,
                'descripcion' => $request->descripcion,
                'fecha_incidencia' => $request->fecha,
                'prioridad' => '1',
                ]
            );

        $id=DB::table('equipo_incidencia')->max('id'); 

        return response(['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function BuscarIncidencia(Request $request)
    {

        $codigo=$request->codigo;

        $resultado=DB::table('equipo_incidencia')
                                ->select('equipo.id as idEquipo','equipo.descripcion as descripcionEquipo','empresas.id as idEmpresa','empresas.nombre as nombreEmpresa','equipo_incidencia.id as idInsidencia','equipo_incidencia.descripcion as descripIncidencia','equipo_incidencia.fecha_incidencia','equipo_incidencia.codigo as codigoEquipoIncidencia','tipo_incidencias.id as idTipoInsicencia','tipo_incidencias.description as descriptionTipoInsicencia')
                                ->join('equipo', 'equipo.id', '=', 'equipo_incidencia.id_equipo')
                                ->join('empresas', 'empresas.id', '=', 'equipo_incidencia.id_empresa')
                                ->join('tipo_incidencias', 'tipo_incidencias.id', '=', 'equipo_incidencia.id_incidencia')
                                ->where('equipo_incidencia.codigo', $codigo)->get();

         return response(['data' => $resultado]);
    }

    public function ActualizarIncidencial(Request $request)
    {
       
        DB::table('equipo_incidencia')
            ->where('id', '=', $request->idCodigo)
            ->update([
                'codigo' => $request->codigo, 
                'id_equipo' => $request->id_equipo,
                'id_incidencia' =>$request->id_incidencia,
                'id_empresa' => $request->id_tienda,
                'descripcion' => $request->descripcion,
                'fecha_incidencia' => $request->fecha,
          
            ]);
    
    }
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
