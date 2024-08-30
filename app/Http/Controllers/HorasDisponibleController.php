<?php

namespace App\Http\Controllers;

use App\Models\Horas__disponible;
use Illuminate\Http\Request;

class HorasDisponibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $horas = Horas__disponible::all();
        //return $horas;
        return view('horas.index', compact('horas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('horas.create');
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
            'horasDisponible' => 'required ',
            'turno' => 'required',
            
           
        ],[
            'horasDisponible.required' => 'Hora Requerida',
            'turno.required' => 'Turno Necesario',

           
        ]);
        $pisina=  Horas__disponible::create($request->all());
        return redirect()->route('horas.index')->with('success','hora  creada correctamente');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horas__disponible  $horas__disponible
     * @return \Illuminate\Http\Response
     */
    public function show(Horas__disponible $horas__disponible)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horas__disponible  $horas__disponible
     * @return \Illuminate\Http\Response
     */
    public function edit(Horas__disponible $hora)
    {

        return view('horas.edit', compact('hora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horas__disponible  $horas__disponible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horas__disponible $hora)
    {
        //
        $request->validate([
            'horasDisponible' => 'required ',
            'turno' => 'required',
            
           
        ],[
            'horasDisponible.required' => 'Hora Requerida',
            'turno.required' => 'Turno Necesario',

           
        ]);
       
         $aux = $hora->update($request->all());
        return redirect()->route('horas.index')->with('success','hora Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horas__disponible  $horas__disponible
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horas__disponible $hora)
    {
        //
        
        $hora->delete();
        return redirect()->route('horas.index')->with('success', 'hora Eliminada  correctamente');
    }
}
