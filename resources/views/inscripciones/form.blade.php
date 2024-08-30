<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('idAlumno') }}
            {{ Form::text('idAlumno', null, ['class' => 'form-control' . ($errors->has('idAlumno') ? ' is-invalid' : ''), 'placeholder' => 'Idalumno']) }}
            {!! $errors->first('idAlumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idDescuento') }}
            {{ Form::text('idDescuento', null,['class' => 'form-control' . ($errors->has('idDescuento') ? ' is-invalid' : ''), 'placeholder' => 'Iddescuento']) }}
            {!! $errors->first('idDescuento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPisina') }}
            {{ Form::text('idPisina', null, ['class' => 'form-control' . ($errors->has('idPisina') ? ' is-invalid' : ''), 'placeholder' => 'Idpisina']) }}
            {!! $errors->first('idPisina', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', null, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
