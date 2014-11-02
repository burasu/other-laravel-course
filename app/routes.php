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