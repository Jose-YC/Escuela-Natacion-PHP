@extends('layouts.layouts')
@section('title', 'Listar Pisinas')
@section('content')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Recibo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recibos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idrecibo:</strong>
                            {{ $recibo->idRecibo }}
                        </div>
                        <div class="form-group">
                            <strong>Idinscripcion:</strong>
                            {{ $recibo->idInscripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $recibo->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Idbanco:</strong>
                            {{ $recibo->idBanco }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
