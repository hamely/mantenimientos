<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtipo_mantenimientoRequest;
use App\Http\Requests\Updatetipo_mantenimientoRequest;
use App\Repositories\tipo_mantenimientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tipo_mantenimientoController extends AppBaseController
{
    /** @var  tipo_mantenimientoRepository */
    private $tipoMantenimientoRepository;

    public function __construct(tipo_mantenimientoRepository $tipoMantenimientoRepo)
    {
        $this->tipoMantenimientoRepository = $tipoMantenimientoRepo;
    }

    /**
     * Display a listing of the tipo_mantenimiento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoMantenimientos = $this->tipoMantenimientoRepository->all();

        return view('admin.tipo_mantenimientos.index')
            ->with('tipoMantenimientos', $tipoMantenimientos);
    }

    /**
     * Show the form for creating a new tipo_mantenimiento.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.tipo_mantenimientos.create');
    }

    /**
     * Store a newly created tipo_mantenimiento in storage.
     *
     * @param Createtipo_mantenimientoRequest $request
     *
     * @return Response
     */
    public function store(Createtipo_mantenimientoRequest $request)
    {
        $input = $request->all();

        $tipoMantenimiento = $this->tipoMantenimientoRepository->create($input);

        Flash::success('Tipo Mantenimiento saved successfully.');

        return redirect(route('tipoMantenimientos.index'));
    }

    /**
     * Display the specified tipo_mantenimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoMantenimiento = $this->tipoMantenimientoRepository->find($id);

        if (empty($tipoMantenimiento)) {
            Flash::error('Tipo Mantenimiento not found');

            return redirect(route('tipoMantenimientos.index'));
        }

        return view('admin.tipo_mantenimientos.show')->with('tipoMantenimiento', $tipoMantenimiento);
    }

    /**
     * Show the form for editing the specified tipo_mantenimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoMantenimiento = $this->tipoMantenimientoRepository->find($id);

        if (empty($tipoMantenimiento)) {
            Flash::error('Tipo Mantenimiento not found');

            return redirect(route('tipoMantenimientos.index'));
        }

        return view('admin.tipo_mantenimientos.edit')->with('tipoMantenimiento', $tipoMantenimiento);
    }

    /**
     * Update the specified tipo_mantenimiento in storage.
     *
     * @param int $id
     * @param Updatetipo_mantenimientoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipo_mantenimientoRequest $request)
    {
        $tipoMantenimiento = $this->tipoMantenimientoRepository->find($id);

        if (empty($tipoMantenimiento)) {
            Flash::error('Tipo Mantenimiento not found');

            return redirect(route('tipoMantenimientos.index'));
        }

        $tipoMantenimiento = $this->tipoMantenimientoRepository->update($request->all(), $id);

        Flash::success('Tipo Mantenimiento updated successfully.');

        return redirect(route('tipoMantenimientos.index'));
    }

    /**
     * Remove the specified tipo_mantenimiento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoMantenimiento = $this->tipoMantenimientoRepository->find($id);

        if (empty($tipoMantenimiento)) {
            Flash::error('Tipo Mantenimiento not found');

            return redirect(route('tipoMantenimientos.index'));
        }

        $this->tipoMantenimientoRepository->delete($id);

        Flash::success('Tipo Mantenimiento deleted successfully.');

        return redirect(route('tipoMantenimientos.index'));
    }
}
