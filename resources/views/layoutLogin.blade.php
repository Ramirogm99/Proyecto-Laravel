<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="{{ asset('css/indexstyle.css')}}" href="" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dashboard.css')}}" href="" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class="cabecera">
            <h1>HEADER</h1>
        </div>
    </header>
    <main>
    @yield('contenido')@section('contenido')
    </main>
</body>
</html>