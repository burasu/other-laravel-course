@extends('base.layout')

@section('titulo')
    {{ $titulo }}
@stop

@section('content')

    <h1 class="text-center">Formuarios y html en Laravel 4</h1><hr/>

    {{ Form::open(array('url' => 'login')) }}

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', '', array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Login', array('class' => 'btn btn-success pull-right')) }}

    {{ Form::close() }}

@stop