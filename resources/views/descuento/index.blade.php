@extends('layouts.layouts')
@section('title', 'Listar Pisinas')
@section('content')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Descuento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('descuentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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


										<th>Descripciondescuento</th>
										<th>Porcentaje</th>

                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($descuentos as $descuento)
                                        <tr>


											<td>{{ $descuento->idDescuento }}</td>
											<td>{{ $descuento->descripciondescuento }}</td>
											<td>{{ $descuento->porcentaje }}</td>

                                            <td width = '10px'>
                                                <a class="btn  btn-primary " href="{{ route('descuentos.show',$descuento) }}"> Mostrar</a>
                                            </td>
                                            <td width = '10px'>
                                                <a class="btn btn-success" href="{{ route('descuentos.edit',$descuento) }}"> Editar</a>
                                            </td>
                                            <td  width = '10px'>
                                                <form action="{{ route('descuentos.destroy',$descuento) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger ">Eliminar</button>
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
