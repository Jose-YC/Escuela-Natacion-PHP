<div class="mb-3">
    {!! Form::label('horasDisponible', 'Horario a crear') !!}

    {!! Form::text('horasDisponible', null, ['class'=>'form-control']) !!}
    @error('horasDisponible')
    <span class="text-danger">
        <strong>{{ $message }}</strong>
    </span>

    @enderror
</div>
<div class="mb-3">
    {!! Form::label('turno', 'Turno') !!}
    <div class="form-check">
        {!! Form::radio('turno', 'mañana',true, ['class'=>'form-check-input']) !!}
        {!! Form::label('', 'Mañana') !!}
      </div>
      <div class="form-check">
        {!! Form::radio('turno', 'tarde',false, ['class'=>'form-check-input']) !!}
        {!! Form::label('', 'Tarde') !!}
        
      </div>
   
  
   
    @error('turno')
    <span class="text-danger">
        <strong>{{ $message }}</strong>
    </span>

    @enderror
</div>