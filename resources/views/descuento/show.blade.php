@extends('layouts.app')

@section('template_title')
    {{ $descuento->name ?? 'Show Descuento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Descuento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('descuentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iddescuento:</strong>
                            {{ $descuento->idDescuento }}
                        </div>
                        <div class="form-group">
                            <strong>Descripciondescuento:</strong>
                            {{ $descuento->descripciondescuento }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $descuento->porcentaje }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
