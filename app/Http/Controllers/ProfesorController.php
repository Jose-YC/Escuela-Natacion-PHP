<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

/**
 * Class ProfesorController
 * @package App\Http\Controllers
 */
class ProfesorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesors = Profesor::paginate();

        return view('profesores.index', compact('profesors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Profesor::$rules);

        $profesor = Profesor::create($request->all());

        return redirect()->route('profesores.index')
            ->with('success', 'Profesor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        return view('profesores.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        return view('profesores.edit', compact('profesor'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Profesor $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
        request()->validate(Profesor::$rules);

        $profesor->update($request->all());

        return redirect()->route('profesores.index')
            ->with('success', 'Profesor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Profesor $profesore)
    {
        $profesore->delete();

        return redirect()->route('profesores.index')
            ->with('success', 'Profesor deleted successfully');
    }

}
