@extends('layouts.layouts')


@section('title', 'Lista Inscripcion')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Inscripcion') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('inscripciones.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Alumno</th>
                                <th>Descuento</th>
                                <th>Pisina</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inscripcions as $inscripcion)
                            <tr>


                                <td>{{ $inscripcion->idInscripcion }}</td>
                                <td>{{ $inscripcion->fecha }}</td>
                                <td>{{ $inscripcion->total }}</td>
                                <td>{{ $inscripcion->alumno->persona->nombre }} {{ $inscripcion->alumno->persona->apellido }}</td>
                                <td>{{ $inscripcion->descuento->porcentaje }}%</td>
                                <td>N° {{ $inscripcion->pisina->idPisina }} - {{ $inscripcion->pisina->lugar }}</td>


                                <td>
                                    <a class="btn btn-sm btn-success" href="{{ route('inscripciones.edit', $inscripcion) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                </td>
                                <td>
                                <a class="btn btn-sm btn-success" href="{{ route('inscripciones.pdf', $inscripcion) }}"><i class="fa fa-fw fa-print"></i> imprimir</a>
                                </td>
                                <td>
                                    <form action="{{ route('inscripciones.destroy', $inscripcion) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection
