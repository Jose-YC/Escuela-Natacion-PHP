@extends('layouts.app')

@section('template_title')
    Detalle Empresa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Empresa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle-empresas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Iddetalleempresa</th>
										<th>Ruc</th>
										<th>Nombreempresa</th>
										<th>Razonsocial</th>
										<th>Area</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleEmpresas as $detalleEmpresa)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $detalleEmpresa->idDetalleEmpresa }}</td>
											<td>{{ $detalleEmpresa->RUC }}</td>
											<td>{{ $detalleEmpresa->nombreEmpresa }}</td>
											<td>{{ $detalleEmpresa->razonSocial }}</td>
											<td>{{ $detalleEmpresa->area }}</td>

                                            <td>
                                                <form action="{{ route('detalle-empresas.destroy',$detalleEmpresa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalle-empresas.show',$detalleEmpresa->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-empresas.edit',$detalleEmpresa->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $detalleEmpresas->links() !!}
            </div>
        </div>
    </div>
@endsection
