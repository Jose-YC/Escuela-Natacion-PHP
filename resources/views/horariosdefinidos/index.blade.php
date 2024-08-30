@extends('layouts.layouts')
@section('title', 'Listar Días')
@section('content')

 <div class="card">
    <div class="card-header">
        <h1 >Listar Días</h1>
        <a href="{{ route('horariosdefinidos.create') }}" class="btn btn-primary float-right">  <i class="fas fa-plus"></i> Crear Nueva Pisina</a>
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
                    <th>Día</th>
                    <th>Turno</th>
                    <th>Hora</th>

                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
            @if (count($horas_disponibles) > 0)
                @foreach ($horas_disponibles as $items)
                <tr>

                   <td>{{$items->idHoraDisponible__Horario}}</td>
                    <td>{{$items->horarios()->first()->dia}}</td>
                    <td>{{$items->horas_disponibles()->first()->turno}}</td>
                    <td>{{$items->Horas_disponibles()->first()->horasDisponible}}</td>


                    <td width="10px">
                        <a href="{{ route('horariosdefinidos.edit', $items) }}" class="btn btn-primary">Editar</a>
                    </td>
                    <td width="10px">
                        {!! Form::open(['route'=> ['horariosdefinidos.destroy', $items], 'method'=>'DELETE']) !!}
                        {!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>

                @endforeach

            @else
                <tr>
                    <td colspan="6" class="text-center">No hay horarios registradas</td>
                </tr>

            @endif

            </tbody>
           </table>
    </div>
 </div>


@endsection
