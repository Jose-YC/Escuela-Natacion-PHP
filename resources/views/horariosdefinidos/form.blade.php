<div class="mb-3">
    {!! Form::label('turno', 'Turno') !!}
    <br>
    <div class="form-check form-check-inline">
        {!! Form::radio('turno', 'mañana',true, ['class'=>'form-check-input']) !!}
        {!! Form::label('', 'Mañana',['class'=> 'form-check-label']) !!}
      </div>
      <div class="form-check form-check-inline">
        {!! Form::radio('turno', 'tarde',false, ['class'=>'form-check-input']) !!}
        {!! Form::label('', 'Tarde',['class'=> 'form-check-label']) !!}

      </div>
    @error('turno')
    <span class="text-danger">
        <strong>{{ $message }}</strong>
    </span>

    @enderror
</div>
<div class="mb-3">
            {!! Form::label('idHorario', 'Horario') !!}
            {!! Form::select('idHorario', $horario,null, ['placeholder' => 'Seleccione El Horario','class'=>'form-control']); !!}
            @error('idHorario')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>

            @enderror
        </div>
<div class="mb-3">
            {!! Form::label('idHoraDisponible', 'Día') !!}
            {!! Form::select('idHoraDisponible', $horariosDisponiblesa,null, ['placeholder' => 'Seleccione El Dia Horario','class'=>'form-control']); !!}
            @error('idHoraDisponible')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>

            @enderror
        </div>

