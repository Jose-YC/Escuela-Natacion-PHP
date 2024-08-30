@extends('layouts.app')

<!-- @section('template_title')
    {{ $inscripcion->name ?? 'Show Inscripcion' }}
@endsection -->

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inscripcion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inscripcions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idinscripcion:</strong>
                            {{ $inscripcion->idInscripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $inscripcion->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $inscripcion->total }}
                        </div>
                        <div class="form-group">
                            <strong>Idalumno:</strong>
                            {{ $inscripcion->idAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Iddescuento:</strong>
                            {{ $inscripcion->idDescuento }}
                        </div>
                        <div class="form-group">
                            <strong>Idpisina:</strong>
                            {{ $inscripcion->idPisina }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
