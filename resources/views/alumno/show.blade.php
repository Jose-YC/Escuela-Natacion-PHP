@extends('layouts.layouts')

<!-- @section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection -->

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idalumno:</strong>
                            {{ $alumno->idAlumno }}
                        </div>
                        <div class="form-group">
                            <strong>Idpersona:</strong>
                            {{ $alumno->idPersona }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
