@extends('layout')

@section('contenido')
    <!-- Contenido -->
    <div class="container">
        <div class="row">
            <div class="posicion-btn" style="margin-top: 2%; margin-bottom: 2%;">
                <a class="btn-dark" href="{{ route('dashboard') }}" role="button" >Volver</a>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="table">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th colspan="6"><u>Historial</u></th>
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
                                    <td>{{$item->user}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->entry_date}}</td>
                                    <td>{{$item->departure_date}}</td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection