@extends('layouts.app')

@section('template_title')
    {{ $administrativo->name ?? 'Show Administrativo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Administrativo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administrativos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idadministrativo:</strong>
                            {{ $administrativo->idAdministrativo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcioncargo:</strong>
                            {{ $administrativo->descripcionCargo }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $administrativo->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Idempleado:</strong>
                            {{ $administrativo->idEmpleado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
