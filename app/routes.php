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

Route::get('dashboard', function()
{
    return View::make('dashboard');
});


Route::get('home', function()
{
    return View::make('home')->with(array('titulo' => 'Blade en Laravel 4', 'sidebar' => 'sidebar', 'content' => 'content'));
});

Route::post('login', function()
{
    $loginData = array(
        'email'    => e(Input::get('email')),
        'password' => e(Input::get('password'))
    );


    if (Auth::attempt($loginData))
    {
        return Redirect::to('dashboard');
    }
    else
    {
        return Redirect::to('home')->with(array('error' => 'Email o password incorrectos'));
    }

});

Route::get('fetchData', function()
{
    if (Request::ajax())
    {
        return Response::json(array(
                "data" => "datos enviados con laravel y la clase Response"
            )
        );
    }
    else
    {
        App::abort(404);
    }
});

Route::get("usuarios", function()
{
    $users = DB::table('users')->get();

    var_dump(DB::table('users')->toSQL());

    // Ejemplo de recuperación de datos de una tabla.
    foreach($users as $user)
    {
        echo "<br />", $user->email;
    }
});

Route::get("posts/{id}", function ($id)
{
    // Ejemplo de recuperación de valores por parámetros
    $posts = DB::table('posts')->where("id", $id)->get();

    var_dump($posts);
});

Route::get("paginacion/{offset}/{limit}", function($offset, $limit)
{
    $posts = DB::table("posts")->skip($offset)->take($limit)->get();
    echo "<pre>";
    var_dump($posts);
});

Route::get("pluck/{id}", function($id)
{
    $posts = DB::table("posts")->where("user_id", $id)->pluck("title");
    var_dump($posts);
});