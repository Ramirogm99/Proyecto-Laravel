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
                        
                        <form action="{{ route('fichar') }}" method="post">
                            @csrf
                            @if($state === 1)
                            <h1>Selecciona centro:</h1>
                            <select name="centro_id" id="centro_id">
                                @foreach ($centros as $item)
                                    <option value={{$item->id}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                            @endif
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
