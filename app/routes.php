<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/saludo', function()
{
    echo "Hola desde la ruta saludo";
});

Route::get('nombre/{nombre?}', function($nombre = null)
{
    echo "Hola $nombre";
});

Route::get('admin/edit', function()
{
    return View::make('admin/edit')->with(array(
        'title' => 'Tutorial 3 de Laravel 4',
        'name' => 'Blas',
    ));
});

Route::get('home/index', 'HomeController@index');

Route::get('home', function()
{
    return View::make('home')->with(array('titulo' => 'Blade en Laravel 4', 'sidebar' => 'sidebar', 'content' => 'content'));
});

Route::post('registro', function()
{
    // Almacenamos los objetos que se guardarán en la BD
    $registerData = array(
        'email'    => e(Input::get('email')),
        'password' => Hash::make(e(Input::get('password')))
    );

    // Definimos la regla de validación.
    $reglas = array(
        'email'    => 'required|email|unique:users',
        'password' => 'required|confirmed|min:6|max:100'
    );

    // Mensajes de error
    $mensajes = array(
        'required'  => 'El campo :attribute es obligatorio',
        'min'       => 'El campo :attribute no puede tener menos de :min carácteres',
        'max'       => 'El campo :attribute no puede tener más de :max carácteres',
        'email'     => 'El camop :attribute debe ser un email válido',
        'unique'    => 'El email ya está ingresado en la base de datos',
        'confirmed' => 'Los passwords no coinciden'
    );


    // Definimos las validaciones pasandole las reglas y los mensajes
    $validation = Validator::make(Input::all(), $reglas, $mensajes);

    if ($validation->fails())
    {
        // withErrors nos devuelve los campos que fallaron.
        // withInputs nos devuelve los campos antiguos para no tener que reescribir.
        return Redirect::to('home')->withErrors($validation)->withInput();
    }
    else
    {
        $user = new User($registerData);
        $user->save();

        if ($user)
        {
            return Redirect::to('home')->with(array('registrado' => 'Te has registrado correctamente'));
        }
    }
});