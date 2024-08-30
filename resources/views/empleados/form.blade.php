@section('css1')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">

            {{ Form::label('idPersona', 'Empleado') }}
            {!! Form::select('idPersona', $personas, null, ['class' => 'form-control', 'id' => 'idPersona']) !!}
            @error('idPersona')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('cargo', 'Cargo') }} <br>
            <div class="form-check form-check-inline">
                {!! Form::radio('cargo', 'profesor', false, ['class' => 'form-check-input', 'id' => 'cargoprofesor']) !!}
                {!! Form::label('cargoprofesor', 'Profesor', ['class' => 'form-check-label']) !!}
            </div>
            <div class="form-check form-check-inline">
                {!! Form::radio('cargo', 'administrativo', false, [
                    'class' => 'form-check-input',
                    'id' => 'cargoadministrativo',
                ]) !!}
                {!! Form::label('cargoadministrativo', 'Administrativo', ['class' => 'form-check-label']) !!}

            </div>
            @error('cargo')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            {{ Form::label('sueldo') }}
            {{ Form::text('sueldo', null, ['class' => 'form-control', 'placeholder' => 'Sueldo']) }}
            @error('sueldo')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div id="profesor" hidden>
            <div class="form-group">
                {{ Form::label('pisinas', 'Piscina') }}
                <select name="idPisina" id="" class="form-control">
                    <option value="">Seleccione una pisina</option>
                    @foreach ($pisinas as $pisina)
                        <option value="{{ $pisina->idPisina }}">Pisina N°{{ $pisina->idPisina }}|{{ $pisina->lugar }}
                        </option>
                    @endforeach

                </select>
                @error('idPisina')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                {{ Form::label('horahorarios', 'Horario') }}
                <select name="horahorarios" id="" class="form-control">
                    <option value="">Seleccione un horario</option>
                    @foreach ($horahorarios as $horario)
                        <option value="{{ $horario->idHoraDisponible__Horario }}">
                            {{ $horario->horas_disponibles()->first()->horasDisponible }}-{{ $horario->horarios()->first()->dia }}-{{ $horario->horarios()->first()->turno }}
                        </option>
                    @endforeach
                </select>
                @error('horahorarios')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div id="administrativo" hidden>
            <div class="form-group">
                {{ Form::label('administrativocargo', 'Expecificar cargo') }}
                {{ Form::text('administrativocargo', null, ['class' => 'form-control', 'placeholder' => 'Cargo Administrativo']) }}
                @error('administrativocargo')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                {{ Form::label('descripcionCargo', 'Descripcion del cargo') }}
                {{ Form::text('descripcionCargo', null, ['class' => 'form-control', 'placeholder' => 'Descripcion del Cargo']) }}
                @error('descripcionCargo')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
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
            let profesor = document.querySelector("#profesor");
            let administrativo = document.querySelector("#administrativo");
            $('#cargoprofesor').click(function() {
                profesor.removeAttribute('hidden');
                administrativo.setAttribute('hidden', true);
            });
            $('#cargoadministrativo').click(function() {
                administrativo.removeAttribute('hidden');
                profesor.setAttribute('hidden', true);
            });
        });

        if ($("#cargoprofesor").is(":checked")) {
            profesor.removeAttribute('hidden');
            administrativo.setAttribute('hidden', true);

        }
        if ($("#cargoadministrativo").is(":checked")) {
            administrativo.removeAttribute('hidden');
            profesor.setAttribute('hidden', true);
        }
    </script>
@endsection
