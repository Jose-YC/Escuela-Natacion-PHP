


@extends('layouts.layouts')
@section('title', 'Editar Persona')
@section('content')


<div class="card">
	<div class="card-header">
		Datos de la Persona
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<div class="row ">
				<div class="col-md-6 text-center border">
					<img alt="Bootstrap Image Preview" src="
					@if($persona->sexo == 'M')
					{{ url('/img/M.png') }}
					@else
					{{ url('/img/F.png') }}
					@endif " class="rounded-circle" />
					<h3 class="text-center">
						{{$persona->nombre}}
					</h3>
				</div>
				<div class="col-md-6 border m-auto	">
					
					<p>
						DNI : {{$persona->DNI}}
					</p>
					Nombre Completo : {{$persona->nombre }} {{$persona->apellido}}
					<p>
					</p>
					<p>
						Telefono : {{$persona->telefono}}
					<p>
						Fecha de Nacimiento : {{$persona->fechaNacimiento}}
					</p>
					<p>
						Sexo : {{$persona->sexo}}
					</p>
					<p>
						Direccion :{{$persona->direccion}}
					</p>
					<p>
						Correo :{{$persona->user->email}}
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer text-muted">
		<a href="{{ route('home') }}" class="float-right">
		regresar
		</a>
	</div>
</div>





@endsection