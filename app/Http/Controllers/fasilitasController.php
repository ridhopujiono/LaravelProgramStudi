<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefasilitasRequest;
use App\Http\Requests\UpdatefasilitasRequest;
use App\Repositories\fasilitasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class fasilitasController extends AppBaseController
{
    /** @var  fasilitasRepository */
    private $fasilitasRepository;

    public function __construct(fasilitasRepository $fasilitasRepo)
    {
        $this->fasilitasRepository = $fasilitasRepo;
    }

    /**
     * Display a listing of the fasilitas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $fasilitas = $this->fasilitasRepository->all();

        return view('fasilitas.index')
            ->with('fasilitas', $fasilitas);
    }

    /**
     * Show the form for creating a new fasilitas.
     *
     * @return Response
     */
    public function create()
    {
        return view('fasilitas.create');
    }

    /**
     * Store a newly created fasilitas in storage.
     *
     * @param CreatefasilitasRequest $request
     *
     * @return Response
     */
    public function store(CreatefasilitasRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([
                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/foto_fasilitas'), $imageName);

            $path = "foto_fasilitas/" . $imageName;
        }

        $input['foto'] = $path;


        $fasilitas = $this->fasilitasRepository->create($input);

        Flash::success('Fasilitas saved successfully.');

        return redirect(route('fasilitas.index'));
    }

    /**
     * Display the specified fasilitas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fasilitas = $this->fasilitasRepository->find($id);

        if (empty($fasilitas)) {
            Flash::error('Fasilitas not found');

            return redirect(route('fasilitas.index'));
        }

        return view('fasilitas.show')->with('fasilitas', $fasilitas);
    }

    /**
     * Show the form for editing the specified fasilitas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fasilitas = $this->fasilitasRepository->find($id);

        if (empty($fasilitas)) {
            Flash::error('Fasilitas not found');

            return redirect(route('fasilitas.index'));
        }

        return view('fasilitas.edit')->with('fasilitas', $fasilitas);
    }

    /**
     * Update the specified fasilitas in storage.
     *
     * @param int $id
     * @param UpdatefasilitasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefasilitasRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('foto')) {

            //Validate the uploaded file
            $Validation = $request->validate([
                'foto' => 'required'
            ]);

            // cache the file
            $file = $Validation['foto'];

            // generate a new filename. getClientOriginalExtension() for the file extension
            $imageName = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/foto_fasilitas'), $imageName);

            $path = "foto_fasilitas/" . $imageName;
        }

        $input['foto'] = $path;

        $fasilitas = $this->fasilitasRepository->update($input, $id);

        Flash::success('Fasilitas updated successfully.');

        return redirect(route('fasilitas.index'));
    }

    /**
     * Remove the specified fasilitas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fasilitas = $this->fasilitasRepository->find($id);

        if (empty($fasilitas)) {
            Flash::error('Fasilitas not found');

            return redirect(route('fasilitas.index'));
        }

        $this->fasilitasRepository->delete($id);

        Flash::success('Fasilitas deleted successfully.');

        return redirect(route('fasilitas.index'));
    }
}
