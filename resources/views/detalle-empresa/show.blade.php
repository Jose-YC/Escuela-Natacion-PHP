@extends('layouts.app')

@section('template_title')
    {{ $detalleEmpresa->name ?? 'Show Detalle Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalle Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-empresas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iddetalleempresa:</strong>
                            {{ $detalleEmpresa->idDetalleEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $detalleEmpresa->RUC }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreempresa:</strong>
                            {{ $detalleEmpresa->nombreEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong>Razonsocial:</strong>
                            {{ $detalleEmpresa->razonSocial }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $detalleEmpresa->area }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
