<div class="mb-3">
    {!! Form::label('lugar', 'Lugar') !!}
    {!! Form::select('lugar', ['Propio' => 'Lugar Propio', 'Alquilado' => 'Lugar Alquilado'],null, ['placeholder' => 'Seleccione Un Lugar','class'=>'form-control']); !!}
    @error('lugar')
    <span class="text-danger">
        <strong>{{ $message }}</strong>
    </span>

    @enderror
</div>
<div class="mb-3 ">
    <div class="" id="especificacions" hidden>

        {!! Form::label('especificacion', 'especificación') !!}
        {!! Form::text('especificacion', null, ['placeholder' => 'Especifique la ubicación','class'=>'form-control ']); !!}
    </div>
    @error('especificacion')
    <span class="text-danger">
        <strong>{{ $message }}</strong>
    </span>

    @enderror
</div>
<div class="mb-3">
    {!! Form::label('profundidad', 'Profundidad') !!}
    {!! Form::text('profundidad', null, ['class'=>'form-control']) !!}
    @error('profundidad')
    <span class="text-danger">
        <strong>{{ $message }}</strong>
    </span>

    @enderror
</div>
<div class="mb-3">
    {!! Form::label('ancho', 'Ancho') !!}
    {!! Form::text('ancho', null, ['class'=>'form-control']) !!}
    @error('ancho')
    <span class="text-danger">
        <strong>{{ $message }}</strong>
    </span>

    @enderror
</div>
<div class="mb-3">
    {!! Form::label('alto', 'Alto') !!}
    {!! Form::text('alto', null, ['class'=>'form-control']) !!}
    @error('alto')
    <span class="text-danger">
        <strong>{{ $message }}</strong>
    </span>

    @enderror
</div>




@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        
        $('#lugar').change(function() {
            if ($(this).val() == 'Alquilado' ) {
                $('#especificacions').prop('hidden', false);
            } else {
                $('#especificacions').prop('hidden', true);
            }
        });
        if ( $("#lugar").val() != 'Alquilado') {
            $('#especificacions').prop('hidden', true);
        
        }else{
            $('#especificacions').prop('hidden', false);
        }
       
    });
</script>
@endsection