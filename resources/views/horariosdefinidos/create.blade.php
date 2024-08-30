@extends('layouts.layouts')
@section('title', 'Crear Dias')
@section('content')


<h1>Crear Nueva Día</h1>
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=> ['horariosdefinidos.store']]) !!}
@include('horariosdefinidos.form')

        <div class="mb-3">
            {!! Form::submit('Crear', ['class'=>'btn btn-primary']) !!}

        </div>
        {!! Form::close() !!}
    </div>

</div>


@endsection

@section('script')

    <script  type="text/javascript">
        $(document).ready(function(){
            $('#extra').hide();
            $('#extra').hide();
            $('#lugar').change(function(){
                if($(this).val() == 'Alquilado'){
                    $('#extra').remove(hidden);

                }
            });
        });
    </script>
@endsection
