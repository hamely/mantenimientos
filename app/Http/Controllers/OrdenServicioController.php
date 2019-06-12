<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class OrdenServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $data=DB::table('orden_servicio')
                                ->select('orden_servicio.id','orden_servicio.estado','orden_servicio.fecha','orden_servicio.descripcion','orden_servicio.codigo', 'orden_servicio.codigo','orden_servicio.prioridad','equipo_incidencia.id as idIncidencia','equipo_incidencia.descripcion as incidenciaDes','tipo_mantenimientos.id as idMante','tipo_mantenimientos.descripcion as manteDes','users.name as nameUser')
                                ->join('tipo_mantenimientos', 'tipo_mantenimientos.id', '=', 'orden_servicio.id_tipo_mantenimiento')
                                ->join('equipo_incidencia', 'equipo_incidencia.id', '=', 'orden_servicio.id_incidencia')
                                ->join('users', 'users.id', '=', 'orden_servicio.id_usuario')
                                ->get();
        
        return view('admin.ordenServicio.index',['data' =>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ordenServicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    public function ordenServicioCreate(Request $request)
    {

        DB::table('orden_servicio')->insert(
                [

                'codigo' => $request->codigo, 
                'prioridad' => $request->prioridad,
                'id_incidencia' =>$request->id_incidencia,
                'id_tipo_mantenimiento' => $request->id_tipo_mantenimiento,
                'estado' => $request->estado,
                'fecha' => $request->fecha,
                'descripcion'=>$request->descripcion,
                'id_usuario'=>1
                ]
            );
       
        $id=DB::table('orden_servicio')->max('id'); 

        return response(['id' => $id]);
    }

     public function BuscarOrdenServicios(Request $request)
    {

        $codigo=$request->codigo;

        $resultado=DB::table('orden_servicio')
                                ->select('orden_servicio.id','orden_servicio.estado','orden_servicio.fecha','orden_servicio.descripcion','orden_servicio.codigo', 'orden_servicio.codigo','orden_servicio.prioridad','equipo_incidencia.id as idIncidencia','equipo_incidencia.descripcion as incidenciaDes','tipo_mantenimientos.id as idMante','tipo_mantenimientos.descripcion as manteDes')
                                ->join('tipo_mantenimientos', 'tipo_mantenimientos.id', '=', 'orden_servicio.id_tipo_mantenimiento')
                                ->join('equipo_incidencia', 'equipo_incidencia.id', '=', 'orden_servicio.id_incidencia')
                                ->join('users', 'users.id', '=', 'orden_servicio.id_usuario')
                                ->where('orden_servicio.codigo', $codigo)->get();

         return response(['data' => $resultado]);
    }

    public function ordenServicioActualizar(Request $request)
    {
         DB::table('orden_servicio')
            ->where('id', '=', $request->id)
            ->update([
                'codigo' => $request->codigo, 
                'prioridad' => $request->prioridad,
                'id_incidencia' =>$request->id_incidencia,
                'id_tipo_mantenimiento' => $request->id_tipo_mantenimiento,
                'estado' => $request->estado,
                'fecha' => $request->fecha,
                'descripcion'=>$request->descripcion,
            ]); 
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

    public function listarTipoMantenimiento()
    {
        $data=DB::table('tipo_mantenimientos')
                ->select('id','codigo','descripcion')
                ->get();

        return response(['data' => $data]);
    }
    public function listarTiendas()
    {
        $data=DB::table('tiendas')
                ->select('id','codigo','nombre')
                ->get();
        
        return response(['data' =>$data]);
    }
}
