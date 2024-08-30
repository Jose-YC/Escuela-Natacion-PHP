<?php

namespace App\Http\Controllers;

use App\Models\DetalleEmpresa;
use Illuminate\Http\Request;

/**
 * Class DetalleEmpresaController
 * @package App\Http\Controllers
 */
class DetalleEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleEmpresas = DetalleEmpresa::paginate();

        return view('detalle-empresa.index', compact('detalleEmpresas'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleEmpresas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleEmpresa = new DetalleEmpresa();
        return view('detalle-empresa.create', compact('detalleEmpresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetalleEmpresa::$rules);

        $detalleEmpresa = DetalleEmpresa::create($request->all());

        return redirect()->route('detalle-empresas.index')
            ->with('success', 'DetalleEmpresa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleEmpresa = DetalleEmpresa::find($id);

        return view('detalle-empresa.show', compact('detalleEmpresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleEmpresa = DetalleEmpresa::find($id);

        return view('detalle-empresa.edit', compact('detalleEmpresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleEmpresa $detalleEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleEmpresa $detalleEmpresa)
    {
        request()->validate(DetalleEmpresa::$rules);

        $detalleEmpresa->update($request->all());

        return redirect()->route('detalle-empresas.index')
            ->with('success', 'DetalleEmpresa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleEmpresa = DetalleEmpresa::find($id)->delete();

        return redirect()->route('detalle-empresas.index')
            ->with('success', 'DetalleEmpresa deleted successfully');
    }
}
