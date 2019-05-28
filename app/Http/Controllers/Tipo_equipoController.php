<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_equipoRequest;
use App\Http\Requests\UpdateTipo_equipoRequest;
use App\Repositories\Tipo_equipoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Tipo_equipoController extends AppBaseController
{
    /** @var  Tipo_equipoRepository */
    private $tipoEquipoRepository;

    public function __construct(Tipo_equipoRepository $tipoEquipoRepo)
    {
        $this->tipoEquipoRepository = $tipoEquipoRepo;
    }

    /**
     * Display a listing of the Tipo_equipo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoEquipos = $this->tipoEquipoRepository->all();

        return view('admin.tipo_equipos.index')
            ->with('tipoEquipos', $tipoEquipos);
    }

    public function listarEquipoCategoria()
    {
        $tipoEquipos = $this->tipoEquipoRepository->all();
        $opcon=1;
        return response(['data' => $tipoEquipos,'opcionUrl'=>$opcon]);
    }
    /**
     * Show the form for creating a new Tipo_equipo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.tipo_equipos.create');
    }

    /**
     * Store a newly created Tipo_equipo in storage.
     *
     * @param CreateTipo_equipoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_equipoRequest $request)
    {
        $input = $request->all();

        $tipoEquipo = $this->tipoEquipoRepository->create($input);

        Flash::success('Tipo Equipo saved successfully.');

        return redirect(route('tipoEquipos.index'));
    }

    /**
     * Display the specified Tipo_equipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoEquipo = $this->tipoEquipoRepository->find($id);

        if (empty($tipoEquipo)) {
            Flash::error('Tipo Equipo not found');

            return redirect(route('tipoEquipos.index'));
        }

        return view('admin.tipo_equipos.show')->with('tipoEquipo', $tipoEquipo);
    }

    /**
     * Show the form for editing the specified Tipo_equipo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoEquipo = $this->tipoEquipoRepository->find($id);

        if (empty($tipoEquipo)) {
            Flash::error('Tipo Equipo not found');

            return redirect(route('tipoEquipos.index'));
        }

        return view('admin.tipo_equipos.edit')->with('tipoEquipo', $tipoEquipo);
    }

    /**
     * Update the specified Tipo_equipo in storage.
     *
     * @param int $id
     * @param UpdateTipo_equipoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_equipoRequest $request)
    {
        $tipoEquipo = $this->tipoEquipoRepository->find($id);

        if (empty($tipoEquipo)) {
            Flash::error('Tipo Equipo not found');

            return redirect(route('tipoEquipos.index'));
        }

        $tipoEquipo = $this->tipoEquipoRepository->update($request->all(), $id);

        Flash::success('Tipo Equipo updated successfully.');

        return redirect(route('tipoEquipos.index'));
    }

    /**
     * Remove the specified Tipo_equipo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoEquipo = $this->tipoEquipoRepository->find($id);

        if (empty($tipoEquipo)) {
            Flash::error('Tipo Equipo not found');

            return redirect(route('tipoEquipos.index'));
        }

        $this->tipoEquipoRepository->delete($id);

        Flash::success('Tipo Equipo deleted successfully.');

        return redirect(route('tipoEquipos.index'));
    }
}
