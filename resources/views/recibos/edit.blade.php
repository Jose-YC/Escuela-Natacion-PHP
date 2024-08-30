@extends('layouts.layouts')
@section('title', 'Listar Pisinas')
@section('content')

    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Recibo</span>
                    </div>
                    <div class="card-body">
                     {!! Form::model($recibo,['route' => ['recibos.update',$recibo],'method' => 'PUT','files' => true]) !!}
@include('recibos.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
