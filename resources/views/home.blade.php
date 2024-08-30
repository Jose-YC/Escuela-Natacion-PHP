@extends('layouts.layouts')
@section('title', 'Home')
@section('content')

<h1 class="text-uppercase">
Bienvenidos {{ Auth::user()->persona->nombre }}
</h1>







@endsection
