@extends('layouts.app')

@section('template_title')
    Apoderado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Apoderado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('apoderados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>

										<th>Idapoderado</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Dniapoderado</th>
										<th>Tipo</th>
										<th>Especifique</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($apoderados as $apoderado)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $apoderado->idApoderado }}</td>
											<td>{{ $apoderado->nombre }}</td>
											<td>{{ $apoderado->apellido }}</td>
											<td>{{ $apoderado->dniApoderado }}</td>
											<td>{{ $apoderado->tipo }}</td>
											<td>{{ $apoderado->especifique }}</td>
											<td>{{ $apoderado->telefono }}</td>

                                            <td>
                                                <form action="{{ route('apoderados.destroy',$apoderado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('apoderados.show',$apoderado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('apoderados.edit',$apoderado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $apoderados->links() !!}
            </div>
        </div>
    </div>
@endsection
