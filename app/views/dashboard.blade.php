@extends('base.layout')

@section('titulo')
    Dashboard
@stop

@section('content')

    <h1 class="text-center">Dashboard</h1><hr/>

    <p class="alert alert-success">Bienvenido {{ Auth::user()->email }}</p>

@stop