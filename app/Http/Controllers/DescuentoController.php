<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;

/**
 * Class DescuentoController
 * @package App\Http\Controllers
 */
class DescuentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descuentos = Descuento::all();

        return view('descuento.index', compact('descuentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('descuento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(
            Descuento::$rules,
            Descuento::$messages);

        $descuento = Descuento::create($request->all());

        return redirect()->route('descuentos.index')
            ->with('success', 'Descuento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Descuento $descuento)
    {

        return view('descuentos.show', compact('descuento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Descuento $descuento)
    {


        return view('descuentos.edit', compact('descuento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Descuento $descuento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descuento $descuento)
    {
        request()->validate(Descuento::$rules);

        $descuento->update($request->all());

        return redirect()->route('descuentos.index')
            ->with('success', 'Descuento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Descuento $descuento)
    {
        $descuento->delete();

        return redirect()->route('descuentos.index')
            ->with('success', 'Descuento deleted successfully');
    }
}
