@extends('layouts.layouts')
@section('title', 'Editar Hora')
@section('content')


<h1>Editar Hora</h1>
<div class="card">
    <div class="card-body">
        {!! Form::model($hora ,['route'=> ['horas.update',$hora],'method'=>'PUT']) !!}
        @include('horas.form')

        <div class="mb-3">
            {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

</div>


@endsection