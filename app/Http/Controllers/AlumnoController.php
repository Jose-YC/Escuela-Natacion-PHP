<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Apoderado;
use App\Models\Apoderado_Alummos;
use App\Models\DetalleEmpresa;
use App\Models\Empresa;
use App\Models\Grupal;
use App\Models\Persona;


use App\Models\Particular;
use Illuminate\Http\Request;

/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();

        return view('alumno.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::pluck('nombre', 'idPersona');
        return view('alumno.create', compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        request()->validate(
            Alumno::$rules,
            Alumno::$messages
        );

        $alumno = Alumno::create($request->all());
        if ($request->tipo === 'particular') {
            $particular = Particular::create(['idAlumno' => $alumno->idAlumno]);
            if ($request->edad === 'on') {
                request()->validate(
                    Apoderado::$rules,
                );
                $apoderado = Apoderado::create([
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido,
                    'dniApoderado' => $request->dniApoderado,
                    'tipo' => $request->tipoApoderado,
                    'especifique' => $request->razonSocial,
                    'telefono' => $request->telefono,
                ]);
                $apoderadoAlumno = Apoderado_Alummos::create([
                    'idApoderado' => $apoderado->idApoderado,
                    'idAlumno' => $alumno->idAlumno,
                ]);
            }
        } else if ($request->tipo === "grupal") {

            $grupal = Grupal::create([
                'idAlumno' => $alumno->idAlumno,
            ]);
        } else {
            request()->validate(
                DetalleEmpresa::$rules,
                DetalleEmpresa::$messages
            );
            $DetalleEmpresa = DetalleEmpresa::create([
                'RUC' => $request->RUC,
                'nombreEmpresa' => $request->nombreEmpresa,
                'razonSocial' => $request->razonSocial,
                'area' => $request->area
            ]);

            $empresa = Empresa::create([
                'idAlumno' => $alumno->idAlumno,
                'idDetalleEmpresa' => $DetalleEmpresa->idDetalleEmpresa,
            ]);
        }

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);

        return view('alumno.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Alumno $alumno)
    {
        return view('alumno.edit', compact('alumno'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        request()->validate(Alumno::$rules);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno deleted successfully');
    }
}
