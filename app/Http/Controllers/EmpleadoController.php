<?php

namespace App\Http\Controllers;

use App\Models\Administrativo;
//use Dompdf\Dompdf;
use App\Models\Empleado;
use App\Models\Profesor;
use App\Models\Hora_Disponible__Horarios;
use App\Models\Pisina;
use App\Models\Persona;
use Illuminate\Http\Request;
//use PDF;

/**
 * Class EmpleadoController
 * @package App\Http\Controllers
 */
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate(10);
        //$dompdf = PDF::loadView('empleados.index');

        // $dompdf->pdf(view('empleados.index', compact('empleados')));
        //$dompdf->setPaper('A4', 'landscape');
        //return $dompdf->stream();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //seleccionar los datos de la tabla persona que no estes
        // asociados a un empleado
        //selececciona solo los datos nombre y idPersona de la tabla persona que no esten asociados a un empleado
        $personas = Persona::pluck('nombre', 'idPersona');
        // $personas = Persona::whereDoesntHave('empleados')->pluck('nombre', 'idPersona');
        //$personas = Persona::Select();
        $pisinas = Pisina::all();
        $horahorarios = Hora_Disponible__Horarios::all();
        //$personas = Persona::pluck('nombre', 'idPersona');

        return view('empleados.create', compact('pisinas', 'horahorarios', 'personas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //return $request->all();
        request()->validate(
            Empleado::$rules,
            Empleado::$messages
        );
        $empleado = Empleado::create($request->all());
        if ($request->cargo === 'administrativo') {
            request()->validate(
                [
                    'administrativocargo' => 'required',
                    'descripcionCargo' => 'required',
                ],
                [
                    'administrativocargo.required' => 'El campo cargo es obligatorio',
                    'descripcionCargo.required' => 'El campo descripcion de cargo es obligatorio'
                ]

            );
            $administrativo = Administrativo::create([
                'cargo' => $request->administrativocargo,
                'descripcionCargo' => $request->descripcionCargo,
                'idEmpleado' => $empleado->idEmpleado,
            ]);
        }
        if ($request->cargo === 'profesor') {
            request()->validate(
                [
                    'idPisina' => 'required',
                    'horahorarios' => 'required',
                ],
                [
                    'idPisina.required' => 'El campo pisina es obligatorio',
                    'horahorarios.required' => 'El campo horario es obligatorio'
                ]

            );
            $profesor = Profesor::create([
                'idPisina' => $request->idPisina,
                'idHoraDisponible__Horario' => $request->horahorarios,
                'idEmpleado' => $empleado->idEmpleado,
            ]);
           
        }
        return redirect()->route('empleados.index')
            ->with('success', 'Empleado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        // return view('empleados.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $pisinas = Pisina::all();
        $horahorarios = Hora_Disponible__Horarios::all();
        return view('empleados.edit', compact('empleado', 'pisinas', 'horahorarios'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleado $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado, Administrativo $administrativo, Profesor $profesor)
    {
        request()->validate(
            Empleado::$rules,
            Empleado::$messages
        );
        $empleado->update($request->all());
        if ($request->cargo === 'administrador') {
            request()->validate(
                [
                    'administrativocargo' => 'required',
                    'descripcionCargo' => 'required',
                ],
                [
                    'administrativocargo.required' => 'El campo cargo es obligatorio',
                    'descripcionCargo.required' => 'El campo descripcion de cargo es obligatorio'
                ]

            );
            $administrativo->update([
                'cargo' => $request->administrativocargo,
                'descripcionCargo' => $request->descripcionCargo,
                'idEmpleado' => $empleado->idEmpleado,
            ]);
        }
        if ($request->cargo === 'profesor') {
            request()->validate(
                [
                    'horahorarios' => 'required',
                    'idPisina' => 'required',
                ],
                [
                    'horahorarios.required' => 'El campo horario es obligatorio',
                    'idPisina.required' => 'El campo pisina es obligatorio'
                ]

            );
            $profesor->update([
                'idHoraDisponible__Horario' => $request->horahorarios,
                'idPisina' => $request->idPisina,
                'idEmpleado' => $empleado->idEmpleado,
            ]);
        }
        return redirect()->route('empleados.index')
            ->with('success', 'Empleado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')
            ->with('success', 'Empleado deleted successfully');
    }
}
