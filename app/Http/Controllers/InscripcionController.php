<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Empresa;
use App\Models\Particular;
use App\Models\Descuento;
use App\Models\Detalle_Matricula;
use App\Models\DetalleEmpresa;
use App\Models\Profesor;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Arr;
//use Barryvdh\DomPDF\Facade\Pdf;
use PDF;

/**
 * Class InscripcionController
 * @package App\Http\Controllers
 */
class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripcions = Inscripcion::all();

        return view('inscripciones.index', compact('inscripcions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = Alumno::all();
        $profesores = Profesor::all();
        $descuentos = Descuento::all();


        return view('inscripciones.create', compact('alumnos', 'profesores', 'descuentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //equest()->validate(Inscripcion::$rules);


        $list_profesor = $request->list_profesor;
        $list_horariosDisponibles = $request->list_horariosDisponibles;
        $alumno = $request->idAlumno;

        $inscripcion = Inscripcion::create([
            'idAlumno' => $alumno,
            'idPisina' => 1,
            'idDescuento' => $request->descuento,
            'total' => $request->total,
            'fecha' => date('Y-m-d')
        ]);

        for ($i = 0; $i < sizeof($list_profesor); $i++) {
            Detalle_Matricula::create([
                'idInscripcion' => $inscripcion->idInscripcion,
                'idProfesor' => $list_profesor[$i],
                'idHoraDisponible__Horario' => $list_horariosDisponibles[$i]
            ]);
            # code...
        }


        return redirect()->route('inscripciones.index')
            ->with('success', 'Inscripcion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inscripcion $inscripcion)
    {
        return view('inscripciones.show', compact('inscripcion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscripcion $inscripcion)
    {
        return view('inscripciones.edit', compact('inscripcion'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inscripcion $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        request()->validate(Inscripcion::$rules);

        $inscripcion->update($request->all());

        return redirect()->route('inscripciones.index')
            ->with('success', 'Inscripcion updated successfully');
    }
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Inscripcion $inscripcion)
    {
        $inscripcion->delete();
        return redirect()->route('inscripciones.index')
            ->with('success', 'Inscripcion deleted successfully');
    }
    public function generate(Inscripcion $inscripcion)
    {
        // $pedidos = Inscripcion::where('idInscripcion', $inscripcion->idInscripcion)->get();
        // return $pedidos;
        //     $pdf = PDF::loadView('inscripciones.pdf', compact('inscripcion', 'pedido'));
        //     return $pdf->download('inscripcion.pdf');
        // }

       // return view('inscripciones.print', compact('inscripcion', 'pedidos'));

        $pdf = PDF::loadView('inscripciones.print', compact('inscripcion'));
        $pdf->setPaper('A5', 'landscape');
        //return $pdf->download('inscripcion.pdf');
        return $pdf->stream();
    }
}
