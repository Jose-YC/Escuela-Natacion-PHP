@section('css1')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
<div class="box box-info padding-1">
    <div class="box-body">
        {{ Form::label('idPersona', 'Empleado') }}
        {!! Form::select('idPersona', $personas, null, ['class' => 'form-control', 'id' => 'idPersona']) !!}
        @error('idPersona')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        {{-- checkbox opciones grupal ,particular ,empresa --}}
        <div class="form-group">
            {!! Form::label('tipo', 'Tipo de Alumnos', ['class' => 'form-lable']) !!}
            <div class="form-check">

                {!! Form::radio('tipo', 'grupal', false, ['class' => 'form-check-input', 'id' => 'grupal']) !!}
                {!! Form::label('grupal', 'Grupal', ['class' => 'form-check-label']) !!}
                @error('tipo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-check">
                {!! Form::radio('tipo', 'particular', false, ['class' => 'form-check-input', 'id' => 'particular']) !!}
                {!! Form::label('particular', 'Particular', ['class' => 'form-check-label']) !!}
                @error('tipo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-check">
                {!! Form::radio('tipo', 'empresa', false, ['class' => 'form-check-input', 'id' => 'empresa']) !!}
                {!! Form::label('empresa', 'Empresa', ['class' => 'form-check-label']) !!}
                @error('tipo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
        </div>

        <div id="empresas" hidden>
            <div class="form-group">
                <div class="mb-3 ">
                    {!! Form::label('RUC', 'RUC', ['class' => 'form-label']) !!} <br>
                    <div class="mb-3  row ml-1">
                        {!! Form::text('RUC', null, ['class' => 'form-control col-sm-5 p-2', 'id' => 'RUC']) !!}
                        <input type="button" id="buscarRUC" value="Buscar por RUC" class="btn btn-primary  ml-2">
                        @error('RUC')
                            <span class="text-danger col-sm-12">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('area', 'Area') }}
                {{ Form::text('area', null, ['class' => 'form-control', 'placeholder' => 'Area']) }}

                @error('area')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                {{ Form::label('nombreEmpresa', 'Nombre de la Empresa') }}
                {{ Form::text('nombreEmpresa', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Empresa' , 'id' => 'nombreEmpresa']) }}

                @error('nombreEmpresa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                {{ Form::label('Razon Zocial', 'razonSocial') }}
                {{ Form::text('razonSocial', null, ['class' => 'form-control', 'placeholder' => 'Razon Zocial' ,'id'=>'razonsocial']) }}

                @error('razonSocial')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div id="edad" hidden>
            <div class="form-check form-switch">
                <input class="form-check-input" name='edad' type="checkbox" role="switch" id="edades">
                <label class="form-check-label" for="edades">Es Menor de edad?</label>
            </div>
        </div>
        <div id="apoderado" hidden>
            <div class="form-group">
                {!! Form::label('dniApoderado', 'DNI del Apoderado', ['class' => 'form-label']) !!} <br>
                <div class="mb-3  row ml-1">
                    {!! Form::text('dniApoderado', null, ['class' => 'form-control col-sm-5 p-2','placeholder' => 'DNI del Apoderado', 'id' => 'DNI']) !!}
                    <input type="button" id="buscarDNI" value="Buscar" class="btn btn-primary  ml-2">
                    @error('dniApoderado')
                        <span class="text-danger col-sm-12">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <div class="form-group">
                {{ Form::label('nombre', 'Nombre') }}
                {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id'=>'nombre']) }}

                @error('nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                {{ Form::label('apellido', 'Apellido') }}
                {{ Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido', 'id'=>'apellido']) }}

                @error('apellido')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                {{ Form::label('telefono', 'Telefono') }}
                {{ Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Telefono']) }}
                @error('telefono')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                {{ Form::label('Tipo de Apoderado', 'tipo') }}
                {{ Form::select('tipoApoderado',['padre'=>'Padre','madre'=>'Madre','otro'=>'Otro'] ,null, ['class' => 'form-control', 'placeholder' => 'Selecione un Tipo de apoderado']) }}
                @error('tipo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


        </div>
    </div>
    <div class="box-footer mt20">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}

    </div>
</div>
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#idPersona').select2();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            let grupal = document.getElementById('grupal');
            let particular = document.getElementById('particular');
            let empresa = document.getElementById('empresa');
            let empresas = document.getElementById('empresas');
            let apoderado = document.getElementById('apoderado');
            let edad = document.getElementById('edad');
            let edades = document.getElementById('edades');


            $(empresa).click(function() {
                empresas.removeAttribute('hidden');
                apoderado.setAttribute('hidden', true);
                edad.setAttribute('hidden', true);
            });
            $(grupal).click(function() {
                empresas.setAttribute('hidden', true);
                edad.setAttribute('hidden', true);
                // apoderado.removeAttribute('hidden');
            });
            $(particular).click(function() {
                empresas.setAttribute('hidden', true);
                edad.removeAttribute('hidden');
            });
            $(edades).click(function() {
                apoderado.removeAttribute('hidden');
            });
            //mostrar un aler cuando no este checkeado el checkbox
            $('.form-check-input').click(function() {
                if (!this.checked) {
                    apoderado.setAttribute('hidden', true);
                }
            });



        });
    </script>
    {{-- RUC --}}
    <script>
      var ruc = document.getElementById('RUC');
        var nombreEmpresa = document.getElementById('nombreEmpresa');
        var razonsocial1 = document.getElementById('razonsocial');

        document.getElementById('buscarRUC').addEventListener('click', function(e) {
            e.preventDefault();
            preguntarRUC(ruc.value);
        });


        function preguntarRUC(dni) {
            $.ajax({
                type: "get",
                url: "https://dniruc.apisperu.com/api/v1/ruc/" +
                    dni +
                    "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImNlbnR1cmlvbmphaW1lQGdtYWlsLmNvbSJ9.yTPvPJzrjUkoUi23-atHS6zUfYa-O55n8UoXHan2uv0",

                dataType: "json",

                success: function(response) {

                    if (response.message != "No se encontraron resultadoss.") {
                        nombreEmpresa.value = response.razonSocial;
                        razonsocial1.value = response.razonSocial;
                        // nombre.setAttribute("disabled", true);
                        // apellido.setAttribute("disabled", true);
                        // dni1.setAttribute("disabled", true);
                    } else {
                        alert("RUC no encontrado");
                    }
                },
                error: function(response) {
                    console.log(response);

                },
            });
        }

    </script>
    {{-- DNIAPODERADO --}}
    <script type="text/javascript">
        var dni1 = document.getElementById('DNI');
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
 
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

    </script>
@endsection
