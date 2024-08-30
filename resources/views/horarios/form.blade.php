<div class="mb-3">
            {!! Form::label('dia', 'Día') !!}
            {!! Form::select('dia', 
            [
                'Lunes' => 'Lunes',
                'Martes' => 'Martes',
                'Miercoles' => 'Miercoles',
                'Jueves' => 'Jueves',
                'Viernes' => 'Viernes',
                'Sabado' => 'Sabado',
                'Domingo' => 'Domingo',
        
            ],null, ['placeholder' => 'Seleccione Un Día','class'=>'form-control']); !!}
            @error('dia')
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
 