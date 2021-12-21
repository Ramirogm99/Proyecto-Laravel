<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="fondoramiro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio</title>
    <link href="{{ asset('css/indexstyle.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="cabecera">
            <h1>INICIO</h1>
        </div>
        </header>
  
    
    
        <div class="container">
        
        <main>
            <div class="row">
                <div class="col-6" style="margin-top: 5%; margin-bottom: 5%;">
                    <a class="btn btn-dark" href="/Proyecto-Laravel/public/historial" role="button" style="background-color: grey;">Registro</a>
                    <a class="btn btn-dark" href="/Proyecto-Laravel/public/" role="button" style="background-color: grey;">Cerrar sesion</a>
                </div>
                <div class="col-6" style="text-align: center; margin-top:4%;">
                    <div class="col-12">
                        <h1>Usuario x bienvenido</h1>
                    </div>
                </div>

            </div>
        </div>
        <div class="table">
            <div class="responsive-table" style="margin-left: 5%; margin-right: 5%;">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th colspan="6" style="text-align: center; font-size:larger;"><u>Registro</u></th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        <tr>
                            <td style="width: 20%">Nombre</td>
                            <td style="width: 20%">apellido</td>
                            <td style="width: 20%">Hora entrada</td>
                            <td style="width: 20%">Hora salida</td>
                            <td style="width: 10%">Centro</td>
                            <td style="width: 10%">Fecha</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Nombre</td>
                            <td style="width: 20%">apellido</td>
                            <td style="width: 20%">Hora entrada</td>
                            <td style="width: 20%">Hora salida</td>
                            <td style="width: 10%">Centro</td>
                            <td style="width: 10%">Fecha</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Nombre</td>
                            <td style="width: 20%">apellido</td>
                            <td style="width: 20%">Hora entrada</td>
                            <td style="width: 20%">Hora salida</td>
                            <td style="width: 10%">Centro</td>
                            <td style="width: 10%">Fecha</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Nombre</td>
                            <td style="width: 20%">apellido</td>
                            <td style="width: 20%">Hora entrada</td>
                            <td style="width: 20%">Hora salida</td>
                            <td style="width: 10%">Centro</td>
                            <td style="width: 10%">Fecha</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Nombre</td>
                            <td style="width: 20%">apellido</td>
                            <td style="width: 20%">Hora entrada</td>
                            <td style="width: 20%">Hora salida</td>
                            <td style="width: 10%">Centro</td>
                            <td style="width: 10%">Fecha</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Nombre</td>
                            <td style="width: 20%">apellido</td>
                            <td style="width: 20%">Hora entrada</td>
                            <td style="width: 20%">Hora salida</td>
                            <td style="width: 10%">Centro</td>
                            <td style="width: 10%">Fecha</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Nombre</td>
                            <td style="width: 20%">apellido</td>
                            <td style="width: 20%">Hora entrada</td>
                            <td style="width: 20%">Hora salida</td>
                            <td style="width: 10%">Centro</td>
                            <td style="width: 10%">Fecha</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </main>
        <footer>
        <div class="piedepagina">
            <h1>footer</h1>
        </div>
    </footer>
    
   
</body>



</html>