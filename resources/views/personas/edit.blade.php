@extends('layouts.layouts')
@section('title', 'Editar Persona')
@section('content')


    <h1>Editar Datos Personales</h1>
    <div class="card">
        <div class="card-body">
            {!! Form::model($persona, ['route' => ['personas.update', $persona], 'method' => 'PUT']) !!}

            <div class="mb-3 ">
                {!! Form::label('DNI', 'DNI', ['class' => 'form-label']) !!} <br>
                <div class="mb-3  row ml-1">
                    {!! Form::text('DNI', null, ['class' => 'form-control col-sm-5 p-2', 'id' => 'DNI']) !!}
                    <input type="button" id="buscarDNI" value="Buscar" class="btn btn-primary  ml-2">
                    @error('DNI')
                        <span class="text-danger col-sm-12">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) !!}
                @error('nombre')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                {!! Form::label('apellido', 'Apellido') !!}
                {!! Form::text('apellido', null, ['class' => 'form-control', 'id' => 'apellido']) !!}
                @error('apellido')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                {!! Form::label('telefono', 'Telefono') !!}
                {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                @error('telefono')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                {!! Form::label('direccion', 'Direccion') !!}
                {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
                @error('direccion')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                {!! Form::label('sexo', 'Sexo') !!}
                <div class="form-check">
                    {!! Form::radio('sexo', 'M', true, ['class' => 'form-check-input']) !!}
                    {!! Form::label('', 'Masculino') !!}
                </div>
                <div class="form-check">
                    {!! Form::radio('sexo', 'F', false, ['class' => 'form-check-input']) !!}
                    {!! Form::label('', 'Femenino') !!}
                </div>
                @error('sexo')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                {!! Form::label('fechaNacimiento', 'Fecha de Nacimiento') !!}
                {!! Form::date('fechaNacimiento', null, ['class' => 'form-control']) !!}
                @error('fechaNacimiento')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="mb-3">
                {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>


@endsection


@section('script')


    <script type="text/javascript">
        var dni1 = document.getElementById('DNI');
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        // $(document).ready(function() {
        //     validar(dni1);
        //     validar(nombre);
        //     validar(apellido);
        // });
        document.getElementById('buscarDNI').addEventListener('click', function(e) {
            e.preventDefault();
            preguntardni(dni1.value);
        });

        function preguntardni(dni) {
            $.ajax({
                type: "get",
                url: "https://dniruc.apisperu.com/api/v1/dni/" +
                    dni +
                    "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImNlbnR1cmlvbmphaW1lQGdtYWlsLmNvbSJ9.yTPvPJzrjUkoUi23-atHS6zUfYa-O55n8UoXHan2uv0",

                dataType: "json",

                success: function(response) {

                    if (response.message != "No se encontraron resultadoss.") {
                        nombre.value = response.nombres;
                        apellido.value = response.apellidoPaterno + " " + response.apellidoMaterno;
                        // nombre.setAttribute("disabled", true);
                        // apellido.setAttribute("disabled", true);
                        // dni1.setAttribute("disabled", true);
                    } else {
                        alert("DNI no encontrado");

                    }
                },
                error: function(response) {
                    console.log(response);

                },
            });
        }
        // function validar(valor){
        //     if(valor.value != null){
        //         valor.setAttribute("disabled", true);
        //     }
        // }
    </script>


@endsection
