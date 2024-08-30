<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('descripciondescuento','Descripcion del Descuento') }}
            {{ Form::text('descripciondescuento',null, ['class' => 'form-control' . ($errors->has('descripciondescuento') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion del Descuento']) }}

            @error('descripciondescuento')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>

            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('porcentaje','Procentaje del descuento') }}
            {{ Form::text('porcentaje', null, ['class' => 'form-control' . ($errors->has('porcentaje') ? ' is-invalid' : ''), 'placeholder' => 'Porcentaje']) }}
            @error('porcentaje')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>

            @enderror
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
