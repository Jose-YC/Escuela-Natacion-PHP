@extends('layouts.layouts')
@section('title', 'Editar Dias')
@section('content')


<h1>Crear Nueva Pisinas</h1>
<div class="card">
    <div class="card-body">
        {!! Form::model($horariosdefinido,['route'=> ['horariosdefinidos.update',$horariosdefinido],'method'=>'PUT']) !!}
        @include('horariosdefinidos.form')

        <div class="mb-3">
            {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

</div>


@endsection
