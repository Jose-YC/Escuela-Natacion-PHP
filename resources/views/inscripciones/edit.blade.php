@extends('layouts.layouts')


    @section('title', 'Editar Inscripcion')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Inscripcion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inscripciones.update', $inscripcion) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('inscripciones.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
