<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idAdministrativo') }}
            {{ Form::text('idAdministrativo', $administrativo->idAdministrativo, ['class' => 'form-control' . ($errors->has('idAdministrativo') ? ' is-invalid' : ''), 'placeholder' => 'Idadministrativo']) }}
            {!! $errors->first('idAdministrativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcionCargo') }}
            {{ Form::text('descripcionCargo', $administrativo->descripcionCargo, ['class' => 'form-control' . ($errors->has('descripcionCargo') ? ' is-invalid' : ''), 'placeholder' => 'Descripcioncargo']) }}
            {!! $errors->first('descripcionCargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $administrativo->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEmpleado') }}
            {{ Form::text('idEmpleado', $administrativo->idEmpleado, ['class' => 'form-control' . ($errors->has('idEmpleado') ? ' is-invalid' : ''), 'placeholder' => 'Idempleado']) }}
            {!! $errors->first('idEmpleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>