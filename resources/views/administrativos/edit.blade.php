@extends('layouts.app')

@section('template_title')
    Update Administrativo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Administrativo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('administrativos.update', $administrativo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('administrativo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
