@extends('layouts.layouts')

@section('title', 'Listar Empleados')

@section('css1')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Empleado
                            </span>

                            <div class="float-right">
                                <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    Crear Nuevo Empleado
                                </a>
                            </div>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill"></i>
                            <strong> {{ session('success') }}</strong>
                            <i class="bi bi-x-circle  float-right " data-bs-dismiss="alert" aria-label="Close"></i>
                        </div>

                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover display nowrap" id="table">
                            <thead class="thead">
                                <tr>
                                    <th>#</th>
                                    <th>Empleado</th>
                                    <th>DNI</th>
                                    <th>Cargo</th>
                                    <th>Sueldo</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empleados as $empleado)
                                    <tr>
                                        <td>{{ $empleado->idEmpleado }}</td>
                                        <td>{{ $empleado->persona()->first()->nombre }}
                                            {{ $empleado->persona()->first()->apellido }}</td>
                                        <td>{{ $empleado->persona()->first()->DNI }}</td>
                                        <td>{{ $empleado->cargo }}</td>
                                        <td>{{ $empleado->sueldo }}</td>

                                        <td width="10px">
                                            <a href="{{ route('empleados.edit', $empleado) }}"
                                                class="btn btn-primary">Editar</a>

                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['empleados.destroy', $empleados], 'method' => 'DELETE']) !!}
                                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-muted">

                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
@section('js')
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

 <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>


 <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script>
   $(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        , 'aoColumns': [
                null,
                null,
                null,
                null,
                null,
                null,
                {
                    'bSortable': false
                }
            ]
    } );
} );
</script>

@endsection
