@extends('layouts.layouts')
@section('title', 'Listar Horas')
@section('content')

 <div class="card">
    <div class="card-header">
        <h1 >Listar Usuario</h1>
        <a href="{{ route('personas.create') }}" class="btn btn-primary float-right">  <i class="fas fa-plus"></i> Crear Nuevo Usuario</a>
    </div>
    <div class="card-body">
    @if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle-fill"></i>
    <strong> {{session('success')}}</strong>
        <i class="bi bi-x-circle  float-right " data-bs-dismiss="alert" aria-label="Close"></i>
  </div>

</div>
@endif
    <div class="card ">
        <table class="table ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>DNI</th>
                    <th>NOMBRE y APELLIDO</th>
                    <th>TELEFONO</th>
                    <th>DIRECCION</th>
                    <th>FECHA de NACIMIENTO</th>
                    <th>SEXO</th>
                    <th colspan="2">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
            @if (count($personas) > 0)
                @foreach ($personas as $items)
                <tr>
                    <td>{{ $items->idPersona }}</td>
                    <td>{{ $items->DNI}}</td>
                    <td>{{ $items->nombre }} {{ $items->apellido }}</td>
                    <td>{{ $items->telefono }}</td>
                    <td>{{ $items->direccion}}</td>
                    <td>{{ $items->fechaNacimiento }}</td>
                    <td>{{$items->sexo}}</td>
                    <td width="10px">
                        <a href="{{ route('personas.edit', $items) }}" class="btn btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        {!! Form::open(['route'=> ['personas.destroy', $items], 'method'=>'DELETE']) !!}
                        {!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>

                @endforeach

            @else
                <tr>
                    <td colspan="6" class="text-center">No hay horas registradas</td>
                </tr>

            @endif

            </tbody>
           </table>
    </div>
 </div>


@endsection
