<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEquipoRequest;
use App\Http\Requests\UpdateEquipoRequest;
use App\Repositories\EquipoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
class EquipoController extends AppBaseController
{
    /** @var  EquipoRepository */
    private $equipoRepository;

    public function __construct(EquipoRepository $equipoRepo)
    {
        $this->equipoRepository = $equipoRepo;
    }

    /**
     * Display a listing of the Equipo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $equipos = $this->equipoRepository->all();

        return view('admin.equipos.index')
            ->with('equipos', $equipos);
    }


  public function CrearEquipoPrincipal(Request $request)
    {

        $input = $request->all();
        // dd($request->all());
        // $equipo = $this->equipoRepository->create($input);

        // Flash::success('Equipo saved successfully.');
        DB::table('equipo')->insert([
            'idequipo' => $request->codigo,
            'descripcion' => $request->descripcion,
            'id_marca' => $request->id_marca,
            'id_pais' => $request->id_ubicacion,
            'peso' => $request->peso,
            'modelo' => $request->modelo,
            'peso_envio' => $request->peso_envio,
            'estado_cliente' =>'1',
            'altura' => $request->altura,
            'ancho' => $request->ancho,
            'largo' => $request->largo,
            'umedimens' => $request->umedimens,
            'cantidad' => $request->cantidad,
            'potencia' => $request->potencia,
            'id_empresa' => $request->id_empresa,
            'estado_equipo' =>'1',
        ]);

        $id=DB::table('equipo')->max('id'); 

        return response(['id' => $id]);
    }

    public function ActualizarEquipoPrincipal(Request $request)
    {
        DB::table('equipo')
            ->where('id', '=', $request->id)
            ->update([
                'idequipo' => $request->codigo,
                'descripcion' => $request->descripcion,
                'id_marca' => $request->id_marca,
                'id_pais' => $request->id_ubicacion,
                'peso' => $request->peso,
                'modelo' => $request->modelo,
                'peso_envio' => $request->peso_envio,
                'estado_cliente' =>'1',
                'altura' => $request->altura,
                'ancho' => $request->ancho,
                'largo' => $request->largo,
                'umedimens' => $request->umedimens,
                'cantidad' => $request->cantidad,
                'potencia' => $request->potencia,
                'id_empresa' => $request->id_empresa,
                'estado_equipo' =>'1',
            ]);
    }
    public function BuscarEquipoPrincipal(Request $request)
    {

       $codigo=$request->codigo;

       $resultado=DB::table('equipo')
                        ->select('equipo.id','equipo.descripcion','equipo.peso','equipo.idequipo','equipo.modelo','equipo.peso','equipo.umedimens','equipo.peso_envio','equipo.umedpeso','equipo.altura','equipo.ancho','equipo.largo','equipo.cantidad','equipo.potencia','equipo.estado_equipo','empresas.nombre as nombreEmpresa','equipo.id_empresa','equipo.id_marca','marcas.codigo','equipo.id_pais','paises.nombre as nombrePais')
                        ->join('marcas', 'marcas.id', '=', 'equipo.id_marca')
                        ->join('empresas', 'empresas.id', '=', 'equipo.id_empresa')
                        ->join('paises', 'paises.id', '=', 'equipo.id_pais')
                        ->where('equipo.idequipo',  $codigo)->get();

        
          return response(['data' => $resultado]);

    }
    

     public function listarEquipos(Request $request)
     {
        $listar = $this->equipoRepository->all();
        $opcon=2;
        return response(['data' => $listar,'opcionUrl'=>$opcon]);
     }
    /**
     * Show the form for creating a new Equipo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.equipos.create');
    }

    /**
     * Store a newly created Equipo in storage.
     *
     * @param CreateEquipoRequest $request
     *
     * @return Response
     */
    public function store(CreateEquipoRequest $request)
    {
        $input = $request->all();

        $equipo = $this->equipoRepository->create($input);

        Flash::success('Equipo saved successfully.');

        return redirect(route('equipos.index'));
    }

    /**
     * Display the specified Equipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error('Equipo not found');

            return redirect(route('equipos.index'));
        }

        return view('admin.equipos.show')->with('equipo', $equipo);
    }

    /**
     * Show the form for editing the specified Equipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error('Equipo not found');

            return redirect(route('equipos.index'));
        }

        return view('admin.equipos.edit')->with('equipo', $equipo);
    }

    /**
     * Update the specified Equipo in storage.
     *
     * @param int $id
     * @param UpdateEquipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEquipoRequest $request)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error('Equipo not found');

            return redirect(route('equipos.index'));
        }

        $equipo = $this->equipoRepository->update($request->all(), $id);

        Flash::success('Equipo updated successfully.');

        return redirect(route('equipos.index'));
    }

    /**
     * Remove the specified Equipo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $equipo = $this->equipoRepository->find($id);

        if (empty($equipo)) {
            Flash::error('Equipo not found');

            return redirect(route('equipos.index'));
        }

        $this->equipoRepository->delete($id);

        Flash::success('Equipo deleted successfully.');

        return redirect(route('equipos.index'));
    }
}
