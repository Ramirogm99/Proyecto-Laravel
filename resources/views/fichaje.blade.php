<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link href="{{ asset('css/indexstyle.css')}}" href="" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dashboard.css')}}" href="" rel="stylesheet" type="text/css">
</head>
<body>
<div class="login_box">
<div id="box_content" style='background-color:#DAE6F2;'>
    <div class="contenedor-fichaje">
        <div class="container">
            <div class="row">
                    <div class="dropdown">
                        <h1>Selecciona centro:</h1>
                        <form action="{{ route('fichar') }}" method="post">
                            @csrf
                            @method('PUT')
                            <select name="centro_id" id="centro_id">
                                <option value="1">MEDAC</option>
                                <option value="2">MERCADONA</option>
                                <option value="3">EL CORTE INGLÉS</option>
                            </select>
                            <button class="btn-dark" style="background-color:#0453A3;" type="submit">Fichar</button>
                        </form>
                    </div>
            </div>
        </div>
        <div class="posicion-btn" style="margin:auto; margin-bottom:3px; margin-top:25px">
            <a class="btn-dark" href="{{ route('dashboard') }}" style="text-decoration:none" role="button">Volver</a>
        </div>
    </div>
</div>
</div>
</body>
</html>
