<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipoIncidenciaRequest;
use App\Http\Requests\UpdateTipoIncidenciaRequest;
use App\Repositories\TipoIncidenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TipoIncidenciaController extends AppBaseController
{
    /** @var  TipoIncidenciaRepository */
    private $tipoIncidenciaRepository;

    public function __construct(TipoIncidenciaRepository $tipoIncidenciaRepo)
    {
        $this->tipoIncidenciaRepository = $tipoIncidenciaRepo;
    }

    /**
     * Display a listing of the TipoIncidencia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoIncidencias = $this->tipoIncidenciaRepository->all();

        return view('admin.tipo_incidencias.index')
            ->with('tipoIncidencias', $tipoIncidencias);
    }

    /**
     * Show the form for creating a new TipoIncidencia.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.tipo_incidencias.create');
    }

    /**
     * Store a newly created TipoIncidencia in storage.
     *
     * @param CreateTipoIncidenciaRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoIncidenciaRequest $request)
    {
        $input = $request->all();

        $tipoIncidencia = $this->tipoIncidenciaRepository->create($input);

        Flash::success('Tipo Incidencia saved successfully.');

        return redirect(route('tipoIncidencias.index'));
    }

    /**
     * Display the specified TipoIncidencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoIncidencia = $this->tipoIncidenciaRepository->find($id);

        if (empty($tipoIncidencia)) {
            Flash::error('Tipo Incidencia not found');

            return redirect(route('tipoIncidencias.index'));
        }

        return view('admin.tipo_incidencias.show')->with('tipoIncidencia', $tipoIncidencia);
    }

    /**
     * Show the form for editing the specified TipoIncidencia.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoIncidencia = $this->tipoIncidenciaRepository->find($id);

        if (empty($tipoIncidencia)) {
            Flash::error('Tipo Incidencia not found');

            return redirect(route('tipoIncidencias.index'));
        }

        return view('admin.tipo_incidencias.edit')->with('tipoIncidencia', $tipoIncidencia);
    }

    /**
     * Update the specified TipoIncidencia in storage.
     *
     * @param int $id
     * @param UpdateTipoIncidenciaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoIncidenciaRequest $request)
    {
        $tipoIncidencia = $this->tipoIncidenciaRepository->find($id);

        if (empty($tipoIncidencia)) {
            Flash::error('Tipo Incidencia not found');

            return redirect(route('tipoIncidencias.index'));
        }

        $tipoIncidencia = $this->tipoIncidenciaRepository->update($request->all(), $id);

        Flash::success('Tipo Incidencia updated successfully.');

        return redirect(route('tipoIncidencias.index'));
    }

    /**
     * Remove the specified TipoIncidencia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoIncidencia = $this->tipoIncidenciaRepository->find($id);

        if (empty($tipoIncidencia)) {
            Flash::error('Tipo Incidencia not found');

            return redirect(route('tipoIncidencias.index'));
        }

        $this->tipoIncidenciaRepository->delete($id);

        Flash::success('Tipo Incidencia deleted successfully.');

        return redirect(route('tipoIncidencias.index'));
    }
}
