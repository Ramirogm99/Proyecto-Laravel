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
                        @foreach ($historial as $item)
                                <tr>
                                    <td>@php($item[id])</td>
                                    <td>@php($item[entry_date])</td>
                                    <td>@php($item[departure_date])</td>
                                    <td>@php($item[user_id])</td>
                                    <td>@php($item[workplace_id])</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection