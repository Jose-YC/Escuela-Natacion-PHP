@extends('layouts.layouts')


@section('title', 'Listar Profesor')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Profesor') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('profesores.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle-fill"></i>
    <strong> {{session('success')}}</strong>
        <i class="bi bi-x-circle  float-right " data-bs-dismiss="alert" aria-label="Close"></i>
  </div>

</div>
@endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>#</th>
                                    <th>Empleado</th>
                                    <th>Horario Asignado</th>
                                    <th>Pisina Asignada</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                             @if (count($profesors)>0)
                             @foreach ($profesors as $profesor)
                             <tr>
                                 <td>{{ $profesor->idProfesor }}</td>
                                 <td>{{ $profesor->empleado->persona()->first()->nombre }}</td>
                                 <td>
                                     {{ $profesor->hora_disponible__horario->horarios()->first()->turno}}-
                                     {{ $profesor->hora_disponible__horario->horas_disponibles()->first()->horasDisponible}}-
                                     {{ $profesor->hora_disponible__horario->horarios()->first()->dia}}
                                 </td>
                                 <td>{{ $profesor->pisina()->first()->idPisina}}-{{ $profesor->pisina()->first()->lugar}}</td>
                                 <td>
                                     {!! Form::open(['route'=> ['profesores.destroy', $profesor], 'method'=>'DELETE']) !!}
                                     {!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
                                     {!! Form::close() !!}
                                 </td>
                             </tr>
                             @endforeach
                             @else
                                <tr>
                                    <td colspan="5" class="text-center">No hay registros</td>

                             @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $profesors->links() !!}
        </div>
    </div>
</div>
@endsection
