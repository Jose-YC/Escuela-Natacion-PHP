@extends('layouts.layouts')

@section('template_title')
Administrativo
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            Administrativo
                        </span>

                        <div class="float-right">
                            <a href="{{ route('administrativos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                Crear Administrativo
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


                                <th>Descripcioncargo</th>
                                <th>Cargo</th>
                                <th>Idempleado</th>

                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($administrativos) > 0)
                            @foreach ($administrativos as $items)
                            <tr>
                                <td>{{ $items->idAdministrativo }}</td>
                                <td>{{ $items->descripcionCargo }}</td>
                                <td>{{ $items->cargo }}</td>

                                <td>{{ $items->empleado->persona()->first()->nombre }}</td>
                                <td width=10px>
                                    <a href="{{ route('administrativos.edit', $items) }}" class="btn btn-primary">Editar</a>
                                </td>
                                <td width=10px>
                                    {!! Form::open(['route' => ['administrativos.destroy', $items], 'method' => 'DELETE']) !!}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                                    {!! form::close() !!}
                                </td>

                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="text-center">
                                    {{ __('No hay registros') }}
                                </td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection
