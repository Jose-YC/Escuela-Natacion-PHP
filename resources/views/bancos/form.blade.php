<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">

        </div>
        <div class="form-group">
            {{ Form::label('nombrebanco') }}
            {{ Form::text('nombrebanco', null, ['class' => 'form-control' . ($errors->has('nombrebanco') ? ' is-invalid' : ''), 'placeholder' => 'Nombrebanco']) }}
            {!! $errors->first('nombrebanco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NroCuenta') }}
            {{ Form::text('NroCuenta',null,[ 'class' => 'form-control' . ($errors->has('NroCuenta') ? ' is-invalid' : ''), 'placeholder' => 'Nrocuenta']) }}
            {!! $errors->first('NroCuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NroOperacion') }}
            {{ Form::text('NroOperacion', null, ['class' => 'form-control' . ($errors->has('NroOperacion') ? ' is-invalid' : ''), 'placeholder' => 'Nrooperacion']) }}
            {!! $errors->first('NroOperacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
