<?php

namespace App\Http\Controllers;

use App\Models\Recibo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banco;
use App\Models\Inscripcion;
/**
 * Class ReciboController
 * @package App\Http\Controllers
 */
class ReciboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recibos = Recibo::paginate();

        return view('recibos.index', compact('recibos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banco = Banco::all();
        $inscripcion = Inscripcion::all();


        return view('recibos.create', compact('banco', 'inscripcion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $url =Storage::disk('public')->put('recibos', $request->file('idfile'));
        $recibo = Recibo::create([
            'idInscripcion' => $request->idInscripcion,
            'idBanco' => $request->idBanco,
            // 'fecha' => date('Y-m-d'),
        ]);
        $recibo->archivo()->create([
            'url' => $url,
        ]);
        // $request->file('idfile');

         //return
        // request()->validate(Recibo::$rules);

        // $recibo = Recibo::create($request->all());

        return redirect()->route('recibos.index')
             ->with('success', 'Recibo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recibo = Recibo::find($id);

        return view('recibos.show', compact('recibo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recibo $recibo)
    {
        $banco = Banco::all();
        $inscripcion = Inscripcion::all();
        return view('recibos.edit', compact('recibo', 'banco', 'inscripcion'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recibo $recibo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recibo $recibo)
    {
        request()->validate(Recibo::$rules);
//return $request->all();
        $recibo->update($request->all());

        // return $request->all();
        return redirect()->route('recibos.index')
            ->with('success', 'Recibo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recibo = Recibo::find($id)->delete();

        return redirect()->route('recibos.index')
            ->with('success', 'Recibo deleted successfully');
    }
}
