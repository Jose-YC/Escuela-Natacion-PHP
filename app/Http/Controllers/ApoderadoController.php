<?php

namespace App\Http\Controllers;

use App\Models\Apoderado;
use Illuminate\Http\Request;

/**
 * Class ApoderadoController
 * @package App\Http\Controllers
 */
class ApoderadoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apoderados = Apoderado::paginate();

        return view('apoderado.index', compact('apoderados'))
            ->with('i', (request()->input('page', 1) - 1) * $apoderados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apoderado = new Apoderado();
        return view('apoderado.create', compact('apoderado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Apoderado::$rules);

        $apoderado = Apoderado::create($request->all());

        return redirect()->route('apoderados.index')
            ->with('success', 'Apoderado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apoderado = Apoderado::find($id);

        return view('apoderado.show', compact('apoderado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apoderado = Apoderado::find($id);

        return view('apoderado.edit', compact('apoderado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Apoderado $apoderado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apoderado $apoderado)
    {
        request()->validate(Apoderado::$rules);

        $apoderado->update($request->all());

        return redirect()->route('apoderados.index')
            ->with('success', 'Apoderado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $apoderado = Apoderado::find($id)->delete();

        return redirect()->route('apoderados.index')
            ->with('success', 'Apoderado deleted successfully');
    }
}
