@extends('layouts.layouts')
@section('title', 'Listar Pisinas')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recibo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recibos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>#</th>
										<th>Alumno Inscrito</th>
										<th>Estado de la Inscripcion</th>
                                        <th>Descargar el archivo </th>
										<th>Banco</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recibos as $recibo)
                                        <tr>


											<td>{{ $recibo->idRecibo }}</td>
											<td>{{ $recibo->inscripcion->alumno->persona()->first()->nombre }}</td>
											<td >
                                            @if ($recibo->estado=='pendiente')

                                            <span class="text text-danger">{{ $recibo->estado }}</span>
                                            @else
                                            <span class="text text-success">{{ $recibo->estado }}</span>
                                            @endif
                                            </td>
                                            <td>

                                               <a href="{{Storage::url($recibo->archivo->url)}}" download="descargar.pdf"><i class="fas fa-cloud-download-alt"></i></a>
                                                </td>
											<td>{{ $recibo->banco->nombrebanco }}</td>

                                            <td>
                                                <form action="{{ route('recibos.destroy',$recibo) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recibos.show',$recibo) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recibos.edit',$recibo) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $recibos->links() !!}
            </div>
        </div>
    </div>
@endsection
