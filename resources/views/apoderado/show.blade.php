@extends('layouts.app')

@section('template_title')
    {{ $apoderado->name ?? 'Show Apoderado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Apoderado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('apoderados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idapoderado:</strong>
                            {{ $apoderado->idApoderado }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $apoderado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $apoderado->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Dniapoderado:</strong>
                            {{ $apoderado->dniApoderado }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $apoderado->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Especifique:</strong>
                            {{ $apoderado->especifique }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $apoderado->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
