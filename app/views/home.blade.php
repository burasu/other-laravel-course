@extends('base.layout')

@section('titulo')
    {{ $titulo }}
@stop

@section('content')

    <h1 class="text-center">Formuarios y html en Laravel 4</h1><hr/>

    @if($errors->has())
        <div class="alert alert-danger">
            @foreach($errors->all('<p>:message</p>') as $message)
                {{ $message }}
            @endforeach
        </div>
    @endif

    {{ Form::open(array('url' => 'registro')) }}

        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirma el password') }}
            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Registro', array('class' => 'btn btn-success pull-right')) }}

    {{ Form::close() }}

@stop