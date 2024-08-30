@extends('layouts.layouts')
@section('title', 'Listar Pisinas')
@section('content')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Recibo</span>
                    </div>
                    <div class="card-body">
                        <!-- laravelColecti con envio de archivos -->
                        {!! Form::open(['route' => 'recibos.store','files' =>true]) !!}

                      <div class="form-group">
                        {!! Form::label('IdInscripcion', 'Inscripcion') !!}

                        <select name="idInscripcion" id="" class="form-control">
                            <option value=""> Selecione uno</option>
                            @foreach ($inscripcion as $inscripcion)
                                <option value="{{ $inscripcion->idInscripcion }}">{{ $inscripcion->alumno->persona->nombre }} - {{ $inscripcion->total }}</option>
                            @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        {!! Form::label('IdBanco', 'Nº de Cuenta del banco') !!}
                        {{-- {!! Form::select('IdBanco', $banco, null, ['class' => 'form-control']) !!} --}}
                        <select name="idBanco" id="" class="form-control">
                            <option value=""> Selecione uno</option>
                            @foreach ($banco as $banco)
                                <option value="{{ $banco->idBanco }}">
                                    {{ $banco->nombrebanco }}-{{ $banco->NroCuenta }}</option>
                            @endforeach


                        </select>
                      </div>
                      <div class="form-group">
                        {!! Form::label('IdRecibo', 'Recibo') !!}
                        {!! Form::file('idfile') !!}

                      </div>
                      {!! Form::submit('Enviar',['class' =>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
