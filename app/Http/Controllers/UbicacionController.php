<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUbicacionRequest;
use App\Http\Requests\UpdateUbicacionRequest;
use App\Repositories\UbicacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UbicacionController extends AppBaseController
{
    /** @var  UbicacionRepository */
    private $ubicacionRepository;

    public function __construct(UbicacionRepository $ubicacionRepo)
    {
        $this->ubicacionRepository = $ubicacionRepo;
    }

    /**
     * Display a listing of the Ubicacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ubicacions = $this->ubicacionRepository->all();

        return view('admin.ubicacions.index')
            ->with('ubicacions', $ubicacions);
    }

    /**
     * Show the form for creating a new Ubicacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.ubicacions.create');
    }

    /**
     * Store a newly created Ubicacion in storage.
     *
     * @param CreateUbicacionRequest $request
     *
     * @return Response
     */
    public function store(CreateUbicacionRequest $request)
    {
        $input = $request->all();

        $ubicacion = $this->ubicacionRepository->create($input);

        Flash::success('Ubicacion saved successfully.');

        return redirect(route('ubicacions.index'));
    }

    /**
     * Display the specified Ubicacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ubicacion = $this->ubicacionRepository->find($id);

        if (empty($ubicacion)) {
            Flash::error('Ubicacion not found');

            return redirect(route('ubicacions.index'));
        }

        return view('admin.ubicacions.show')->with('ubicacion', $ubicacion);
    }

    /**
     * Show the form for editing the specified Ubicacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ubicacion = $this->ubicacionRepository->find($id);

        if (empty($ubicacion)) {
            Flash::error('Ubicacion not found');

            return redirect(route('ubicacions.index'));
        }

        return view('admin.ubicacions.edit')->with('ubicacion', $ubicacion);
    }

    /**
     * Update the specified Ubicacion in storage.
     *
     * @param int $id
     * @param UpdateUbicacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUbicacionRequest $request)
    {
        $ubicacion = $this->ubicacionRepository->find($id);

        if (empty($ubicacion)) {
            Flash::error('Ubicacion not found');

            return redirect(route('ubicacions.index'));
        }

        $ubicacion = $this->ubicacionRepository->update($request->all(), $id);

        Flash::success('Ubicacion updated successfully.');

        return redirect(route('ubicacions.index'));
    }

    /**
     * Remove the specified Ubicacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ubicacion = $this->ubicacionRepository->find($id);

        if (empty($ubicacion)) {
            Flash::error('Ubicacion not found');

            return redirect(route('ubicacions.index'));
        }

        $this->ubicacionRepository->delete($id);

        Flash::success('Ubicacion deleted successfully.');

        return redirect(route('ubicacions.index'));
    }
}
