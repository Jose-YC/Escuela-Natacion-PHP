@extends('layouts.layouts')
@section('title', 'Listar Horas')
@section('content')

 <div class="card">
    <div class="card-header">
        <h1 >Listar Pisinas</h1>
        <a href="{{ route('horas.create') }}" class="btn btn-primary float-right">  <i class="fas fa-plus"></i> Crear Nueva Pisina</a>
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
                    <th>Lugar</th>
                    <th>Profundidad</th>
                    <th>Ancho</th>
                    <th>Alto</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
            @if (count($horas) > 0)
                @foreach ($horas as $items)
                <tr>
                    <td>{{ $items->idPisina }}</td>
                    <td>{{ $items->lugar }}</td>
                    <td>{{ $items->profundidad }}</td>
                    <td>{{ $items->ancho }}</td>
                    <td>{{ $items->alto }}</td>
                    <td width="10px">
                        <a href="{{ route('horas.edit', $items) }}" class="btn btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        {!! Form::open(['route'=> ['horas.destroy', $items], 'method'=>'DELETE']) !!}
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