<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use Illuminate\Http\Request;

/**
 * Class BancoController
 * @package App\Http\Controllers
 */
class BancoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancos = Banco::paginate();

        return view('bancos.index', compact('bancos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bancos.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Banco::$rules);

        $banco = Banco::create($request->all());

        return redirect()->route('bancos.index')
            ->with('success', 'Banco created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banco = Banco::find($id);

        return view('bancos.show', compact('banco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banco = Banco::find($id);

        return view('bancos.edit', compact('banco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Banco $banco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banco $banco)
    {
        request()->validate(Banco::$rules);

        $banco->update($request->all());

        return redirect()->route('bancos.index')
            ->with('success', 'Banco updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $banco = Banco::find($id)->delete();

        return redirect()->route('bancos.index')
            ->with('success', 'Banco deleted successfully');
    }
}
