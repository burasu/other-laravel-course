<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
</head>
<body>
    <div style="background: #eee; width: 300px">
        @yield('sidebar')
    </div>

    <div style="background: #eee; width: 500px">
        @yield('content')
    </div>
</body>
</html>