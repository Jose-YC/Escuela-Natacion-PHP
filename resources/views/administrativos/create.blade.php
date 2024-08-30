@extends('layouts.app')

@section('template_title')
    Create Administrativo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Administrativo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('administrativos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('administrativo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
