<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idProfesor') }}
            {{ Form::text('idProfesor', $profesor->idProfesor, ['class' => 'form-control' . ($errors->has('idProfesor') ? ' is-invalid' : ''), 'placeholder' => 'Idprofesor']) }}
            {!! $errors->first('idProfesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEmpleado') }}
            {{ Form::text('idEmpleado', $profesor->idEmpleado, ['class' => 'form-control' . ($errors->has('idEmpleado') ? ' is-invalid' : ''), 'placeholder' => 'Idempleado']) }}
            {!! $errors->first('idEmpleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>