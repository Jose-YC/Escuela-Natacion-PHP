@extends('layouts.layouts')

@section('title', 'Editar Empleado')


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Empleado</span>
                    </div>
                    <div class="card-body">

                        {!! Form::model($empleado, ['method' => 'PATCH', 'route' => ['empleados.update', $empleado]]) !!}
                            @include('empleados.form')
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
