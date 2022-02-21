@extends('layout')

@section('contenido')
    <!-- Contenido -->
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center align-items-center">
            <div class="dropdown">
                
                        <form action="{{ route('fichar') }}" method="post">
                        @csrf
                        @method('PUT')
                            <select name="centro_id" id="centro_id">
                                <option value="1">MEDAC</option>
                                <option value="2">MERCADONA</option>
                                <option value="3">EL CORTE INGLÉS</option>
                            </select>
                            <button class="btn-dark" type="submit">Fichar</button>
                        </form>
            </div>
            </div>
        </div>
        <br>
    </div>
@endsection