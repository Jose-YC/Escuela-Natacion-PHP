<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $horarios = Horario::all();
        //return $horarios;
        return view('horarios.index', compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('horarios.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'dia' => 'required',
            'turno' => 'required',
        ],[
            'dia.required' => 'Dia Requerido',
            'turno.required' => 'Turno Necesario',
        ]);
        $horario=  Horario::create($request->all());
        return redirect()->route('horarios.index')->with('success','horario  creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario $horario)
    {
        //
        return view('horarios.edit', compact('horario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        //
        $request->validate([
            'dia' => 'required',
            'turno' => 'required',
        ],[
            'dia.required' => 'Dia Requerido',
            'turno.required' => 'Turno Necesario',
        ]);
        $horario->update($request->all());
        return redirect()->route('horarios.index')->with('success','horario  actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario $horario)
    {
        //
        $horario->delete();
        return redirect()->route('horarios.index')->with('success','horario  eliminado correctamente');
    }
}
