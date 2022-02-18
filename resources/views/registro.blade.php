@extends('layout')

@section('contenido')
    <!-- Contenido -->
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center">
            <div class="dropdown">
                <button class="drop-btn">Centros</button>
                    <div class="dropdown-content">
                        <a href="#">Centro 1</a>
                        <a href="#">Centro 2</a>
                        <a href="#">Centro 3</a>
                    </div>
            </div>
                </br>
                </br>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center">
                <a href="#">
                    <button class="btn-dark" type="submit">Fichar</button>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="responsive-table">
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
        </div>
    </div>
@endsection