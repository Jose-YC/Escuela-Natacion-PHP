@extends('layouts.layouts')

@section('template_title')
Alumno
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            Alumnos
                        </span>

                        <div class="float-right">
                            <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                Crear Nuevo Alumno
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
                                    <th>ALUMNO</th>

                                    <th colspan="2">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $alumno)
                                <tr>
                                    <td>{{ $alumno->idAlumno }}</td>
                                    <td>{{ $alumno->persona()->first()->nombre }}{{ $alumno->persona()->first()->apellido }}</td>

                                    <td width="10px">

                                        {!! Form::open(['method' => 'DELETE', 'route' => ['alumnos.destroy', $alumno]]) !!}
                                        {!!form::submit('ELIMINAR', ['class' => 'btn btn-danger'])!!}
                                        {!!form::close()!!}
                                    </td>
                                    <td width="10px">
                                        {{-- <a class="btn btn-sm btn-primary " href="{{ route('alumnos.show',$alumno) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                        <a class="btn  btn-success" href="{{ route('alumnos.edit',$alumno) }}"> EDITAR</a>
                                        {{-- <i class="fa fa-fw fa-edit"></i> --}}
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
