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
                    <h1>{{$user_name}} , bienvenido</h1>
                </div>
            </div>
        </div>
        <div class="table">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th colspan="6"><u>Registro</u></th>
                        </tr>
                        <tr>
                            <th>Usuario</th>
                            <th>Centro</th>
                            <th>Hora entrada</th>
                            <th>Hora salida</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fichajes as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->workplace_name}}</td>
                                    <td>{{$item->entry_date}}</td>
                                    <td>{{$item->departure_date}}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection