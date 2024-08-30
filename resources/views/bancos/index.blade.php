@extends('layouts.layouts')

@section('template_title')
Banco
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Banco') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('bancos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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


                                <th>Nombrebanco</th>
                                <th>Nrocuenta</th>
                                <th>Nrooperacion</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bancos as $banco)
                            <tr>


                                <td>{{ $banco->idBanco }}</td>
                                <td>{{ $banco->nombrebanco }}</td>
                                <td>{{ $banco->NroCuenta }}</td>
                                <td>{{ $banco->NroOperacion }}</td>

                                <td>
                                    <form action="{{ route('bancos.destroy',$banco) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('bancos.show',$banco) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('bancos.edit',$banco) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
        {!! $bancos->links() !!}
    </div>
</div>
</div>
@endsection
