@extends('layout')

@section('contenido')
        <!-- Contenido -->
        <div class="container">
        
            <div class="row">
                <div class="posicion-btn" style="margin-top: 5%; margin-bottom: 5%;">
                    <a class="btn-dark" href="/historial" role="button" >Registro</a>
                    <a class="btn-dark" href="/" role="button">Cerrar sesion</a>
                </div>
                <div class="titulo-bienvenida">
                    <h1>Usuario x bienvenido</h1>
                </div>
            </div>
        </div>
        <div class="table">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th colspan="6"><u>Registro</u></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 20%">Nombre</td>
                            <td style="width: 20%">apellido</td>
                            <td style="width: 20%">Hora entrada</td>
                            <td style="width: 20%">Hora salida</td>
                            <td style="width: 10%">Centro</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection