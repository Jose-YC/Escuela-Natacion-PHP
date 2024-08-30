<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{-- {{ Form::label('idInscripcion') }} --}}

            {{ Form::hidden('idInscripcion', null, ['class' => 'form-control' . ($errors->has('idInscripcion') ? ' is-invalid' : ''), 'placeholder' => 'Idinscripcion']) }}

            {!! $errors->first('idInscripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">

            {{-- {{ Form::label('idBanco') }} --}}
            {{ Form::hidden('idBanco', null, ['class' => 'form-control' . ($errors->has('idBanco') ? ' is-invalid' : ''), 'placeholder' => 'Idbanco']) }}
            {!! $errors->first('idBanco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('estado') !!}
            <div class="form-check">
              <input class="form-check-input" type="radio" name="estado" id="pendiente" value="pendiente">
              <label class="form-check-label" for="pendiente">
               Pendiente
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="estado" id="pagado" value="pagado">
              <label class="form-check-label" for="pagado">
                Pagado
              </label>
            </div>
        </div>
        <div class="form-group">
            <embed src="{{Storage::url($recibo->archivo->url)}}" type="application/pdf" height="630px" width="480px" />
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
