<?php

namespace App\Http\Controllers;

use App\Models\Pisina;
use Illuminate\Http\Request;

class PisinaController extends Controller
{

    public function index()
    {
        $piscina = Pisina::all();
        return view('piscinas.index', compact('piscina'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('piscinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->lugar;
    if($request->lugar =="Propio")

         $request->validate([
            'lugar' => 'required',
            'profundidad' => 'required',
            'ancho' => 'required',
            'alto' => 'required',

        ],[
            'lugar.required' => 'El lugar es requerido',
            'profundidad.required' => 'La profundidad es requerido',
            'ancho.required' => 'El ancho es requerido',
            'alto.required' => 'El alto es requerido',

        ]);
    else{

        $request->validate([
            'lugar' => 'required',
            'especificacion' => 'required',
            'profundidad' => 'required',
            'ancho' => 'required',
            'alto' => 'required',

        ],[
            'lugar.required' => 'El lugar es requerido',
            'especificacion.required' => 'La especificacion es requerido',
            'profundidad.required' => 'La profundidad es requerido',
            'ancho.required' => 'El ancho es requerido',
            'alto.required' => 'El alto es requerido',

        ]);
    }
        $pisina=  Pisina::create($request->all());
        return redirect()->route('piscinas.index')->with('success','Pisina creada correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pisina  $pisina
     * @return \Illuminate\Http\Response
     */
    public function show(Pisina $pisina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pisina  $pisina
     * @return \Illuminate\Http\Response
     */
    public function edit(Pisina $piscina)
    {
        //
        return view('piscinas.edit', compact('piscina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pisina  $pisina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pisina $piscina)
    {
        //
        // if($request->has('lugar')){
        //     $piscina->lugar = $request->lugar;
        // }else{
        //     $piscina->lugar = $piscina->lugar;
        // }

         $aux = $piscina->update($request->all());
        return redirect()->route('piscinas.index')->with('success','Pisina Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pisina  $pisina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pisina $piscina)
    {
        //
        $piscina->delete();
        return redirect()->route('piscinas.index')->with('success', 'Pisina Eliminada  correctamente');
    }
}
