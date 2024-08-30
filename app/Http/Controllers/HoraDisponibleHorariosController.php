<?php

namespace App\Http\Controllers;

use App\Models\Hora_Disponible__Horarios;
use App\Models\Horario;
use App\Models\Horas__disponible;
use Illuminate\Http\Request;

class HoraDisponibleHorariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $horas_disponibles = Hora_Disponible__Horarios::all();
        return view('horariosdefinidos.index', compact('horas_disponibles'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    
    {
        //
        $turno = $request->get('turno');
       // return $turno;

        $horario = Horas__disponible::pluck('horasDisponible', 'idHoraDisponible');
        // ->where('turno', $turno);
        $horariosDisponiblesa = Horario::pluck('dia', 'idHorario');
        // ->where('turno', $turno);

        return view('horariosdefinidos.create', compact('horario', 'horariosDisponiblesa'));
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
            'turno' => 'required',
            'idHoraDisponible' => 'required',
            'idHorario' => 'required',
        ],[
            'turno.required' => 'Seleccione un Turno',
            'idHoraDisponible.required' => 'Hora Disponible Requerido',
            'idHorario.required' => 'Día Requerido',
        ]);
        $horarios=  Hora_Disponible__Horarios::create($request->all());
        return redirect()->route('horariosdefinidos.index')->with('success','horario  creado correctamente');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hora_Disponible__Horarios  $hora_Disponible__Horarios
     * @return \Illuminate\Http\Response
     */
    public function show(Hora_Disponible__Horarios $hora_Disponible__Horarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hora_Disponible__Horarios  $hora_Disponible__Horarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Hora_Disponible__Horarios $horariosdefinido)
    {
        //
        $horario = Horas__disponible::pluck('horasDisponible', 'idHoraDisponible');
        // ->where('turno', $turno);
        $horariosDisponiblesa = Horario::pluck('dia', 'idHorario');
        // ->where('turno', $turno);
        return view('horariosdefinidos.edit', compact('horariosdefinido', 'horario', 'horariosDisponiblesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hora_Disponible__Horarios  $hora_Disponible__Horarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hora_Disponible__Horarios $hora_Disponible__Horarios)
    {
        //
        $request->validate([
            'turno' => 'required',
            'idHoraDisponible' => 'required',
            'idHorario' => 'required',
            
            
        ],[
            'turno.required' => 'Seleccione un Turno',
            'idHoraDisponible.required' => 'Hora Disponible Requerido',
            'idHorario.required' => 'Día Requerido',
        ]);
        $aux = $hora_Disponible__Horarios->update($request->all());
        return redirect()->route('horariosdefinidos.index')->with('success','hora Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hora_Disponible__Horarios  $hora_Disponible__Horarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hora_Disponible__Horarios $hora_Disponible__Horarios)
    {
        //
        $hora_Disponible__Horarios->delete();
        return redirect()->route('horariosdefinidos.index')->with('success', 'Horario eliminada correctamente');
    }
    public function buscarhorario(Horario $horario){
        $hora = Horario::all();
        return $hora;
    }
}
