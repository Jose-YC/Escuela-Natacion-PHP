@extends('layouts.layouts')
@section('title', 'Listar Pisinas')
@section('content')


<h1>Crear Nueva Pisinas</h1>
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=> ['piscinas.store']]) !!}
@include('piscinas.form')
       
        <div class="mb-3">
            {!! Form::submit('Crear', ['class'=>'btn btn-primary']) !!}
        
        </div>
        {!! Form::close() !!}
    </div>

</div>


@endsection

