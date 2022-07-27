<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepengajarRequest;
use App\Http\Requests\UpdatepengajarRequest;
use App\Repositories\pengajarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class pengajarController extends AppBaseController
{
    /** @var  pengajarRepository */
    private $pengajarRepository;

    public function __construct(pengajarRepository $pengajarRepo)
    {
        $this->pengajarRepository = $pengajarRepo;
    }

    /**
     * Display a listing of the pengajar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pengajars = $this->pengajarRepository->all();

        return view('pengajars.index')
            ->with('pengajars', $pengajars);
    }

    /**
     * Show the form for creating a new pengajar.
     *
     * @return Response
     */
    public function create()
    {
        return view('pengajars.create');
    }

    /**
     * Store a newly created pengajar in storage.
     *
     * @param CreatepengajarRequest $request
     *
     * @return Response
     */
    public function store(CreatepengajarRequest $request)
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
            $request->foto->move(public_path('/foto_pengajar'), $imageName);

            $path = "foto_pengajar/" . $imageName;
        }

        $input['foto'] = $path;

        $this->pengajarRepository->create($input);

        Flash::success('Pengajar saved successfully.');

        return redirect(route('pengajars.index'));
    }

    /**
     * Display the specified pengajar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pengajar = $this->pengajarRepository->find($id);

        if (empty($pengajar)) {
            Flash::error('Pengajar not found');

            return redirect(route('pengajars.index'));
        }

        return view('pengajars.show')->with('pengajar', $pengajar);
    }

    /**
     * Show the form for editing the specified pengajar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pengajar = $this->pengajarRepository->find($id);

        if (empty($pengajar)) {
            Flash::error('Pengajar not found');

            return redirect(route('pengajars.index'));
        }

        return view('pengajars.edit')->with('pengajar', $pengajar);
    }

    /**
     * Update the specified pengajar in storage.
     *
     * @param int $id
     * @param UpdatepengajarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepengajarRequest $request)
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
            $request->foto->move(public_path('/foto_pengajar'), $imageName);

            $path = "foto_pengajar/" . $imageName;
        }

        $input['foto'] = $path;

        $pengajar = $this->pengajarRepository->update($input, $id);

        Flash::success('Pengajar updated successfully.');

        return redirect(route('pengajars.index'));
    }

    /**
     * Remove the specified pengajar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengajar = $this->pengajarRepository->find($id);

        if (empty($pengajar)) {
            Flash::error('Pengajar not found');

            return redirect(route('pengajars.index'));
        }

        $this->pengajarRepository->delete($id);

        Flash::success('Pengajar deleted successfully.');

        return redirect(route('pengajars.index'));
    }
}
