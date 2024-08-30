@extends('layouts.layouts')

@section('title', 'Crear Empleados')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Empleado</span>
                    </div>
                    <div class="card-body">

                        {!! Form::open(['method' => 'POST', 'route' => ['empleados.store']]) !!}
                        @include('empleados.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

