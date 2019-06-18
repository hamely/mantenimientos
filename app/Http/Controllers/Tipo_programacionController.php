<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTipo_programacionRequest;
use App\Http\Requests\UpdateTipo_programacionRequest;
use App\Repositories\Tipo_programacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Tipo_programacionController extends AppBaseController
{
    /** @var  Tipo_programacionRepository */
    private $tipoProgramacionRepository;

    public function __construct(Tipo_programacionRepository $tipoProgramacionRepo)
    {
        $this->tipoProgramacionRepository = $tipoProgramacionRepo;
    }

    /**
     * Display a listing of the Tipo_programacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoProgramacions = $this->tipoProgramacionRepository->all();

        return view('admin.tipo_programacions.index')
            ->with('tipoProgramacions', $tipoProgramacions);
    }

    /**
     * Show the form for creating a new Tipo_programacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.tipo_programacions.create');
    }

    /**
     * Store a newly created Tipo_programacion in storage.
     *
     * @param CreateTipo_programacionRequest $request
     *
     * @return Response
     */
    public function store(CreateTipo_programacionRequest $request)
    {
        $input = $request->all();

        $tipoProgramacion = $this->tipoProgramacionRepository->create($input);

        Flash::success('Tipo Programacion saved successfully.');

        return redirect(route('tipoProgramacions.index'));
    }

    /**
     * Display the specified Tipo_programacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoProgramacion = $this->tipoProgramacionRepository->find($id);

        if (empty($tipoProgramacion)) {
            Flash::error('Tipo Programacion not found');

            return redirect(route('tipoProgramacions.index'));
        }

        return view('admin.tipo_programacions.show')->with('tipoProgramacion', $tipoProgramacion);
    }

    /**
     * Show the form for editing the specified Tipo_programacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoProgramacion = $this->tipoProgramacionRepository->find($id);

        if (empty($tipoProgramacion)) {
            Flash::error('Tipo Programacion not found');

            return redirect(route('tipoProgramacions.index'));
        }

        return view('admin.tipo_programacions.edit')->with('tipoProgramacion', $tipoProgramacion);
    }

    /**
     * Update the specified Tipo_programacion in storage.
     *
     * @param int $id
     * @param UpdateTipo_programacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipo_programacionRequest $request)
    {
        $tipoProgramacion = $this->tipoProgramacionRepository->find($id);

        if (empty($tipoProgramacion)) {
            Flash::error('Tipo Programacion not found');

            return redirect(route('tipoProgramacions.index'));
        }

        $tipoProgramacion = $this->tipoProgramacionRepository->update($request->all(), $id);

        Flash::success('Tipo Programacion updated successfully.');

        return redirect(route('tipoProgramacions.index'));
    }

    /**
     * Remove the specified Tipo_programacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoProgramacion = $this->tipoProgramacionRepository->find($id);

        if (empty($tipoProgramacion)) {
            Flash::error('Tipo Programacion not found');

            return redirect(route('tipoProgramacions.index'));
        }

        $this->tipoProgramacionRepository->delete($id);

        Flash::success('Tipo Programacion deleted successfully.');

        return redirect(route('tipoProgramacions.index'));
    }
}
