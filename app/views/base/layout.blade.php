<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/functions.js') }}
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>