<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idDetalleEmpresa') }}
            {{ Form::text('idDetalleEmpresa', $detalleEmpresa->idDetalleEmpresa, ['class' => 'form-control' . ($errors->has('idDetalleEmpresa') ? ' is-invalid' : ''), 'placeholder' => 'Iddetalleempresa']) }}
            {!! $errors->first('idDetalleEmpresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RUC') }}
            {{ Form::text('RUC', $detalleEmpresa->RUC, ['class' => 'form-control' . ($errors->has('RUC') ? ' is-invalid' : ''), 'placeholder' => 'Ruc']) }}
            {!! $errors->first('RUC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreEmpresa') }}
            {{ Form::text('nombreEmpresa', $detalleEmpresa->nombreEmpresa, ['class' => 'form-control' . ($errors->has('nombreEmpresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombreempresa']) }}
            {!! $errors->first('nombreEmpresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('razonSocial') }}
            {{ Form::text('razonSocial', $detalleEmpresa->razonSocial, ['class' => 'form-control' . ($errors->has('razonSocial') ? ' is-invalid' : ''), 'placeholder' => 'Razonsocial']) }}
            {!! $errors->first('razonSocial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::text('area', $detalleEmpresa->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>