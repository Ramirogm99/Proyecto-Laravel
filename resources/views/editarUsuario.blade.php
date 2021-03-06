@extends('layoutLogin')

@section('contenido')
        <!-- Contenido -->
        <div class="login_box">
            
            <div id="box_content">
                <h2 class="active"> Hola, {{ $user_name }} </h2>
                <div>
            <form action="{{ route('usuario.update') }}" method="post">
            @csrf
            @method('PUT')
                <div>
                    <label for="name">Introduce un nombre nuevo:</label>
                    <input type="text" name="name" value="{{ $user_name }}" autofocus>
                </div>
                <div>
                    <input type="submit" value="Actualizar nombre">
                </div>
        </form>
    </div>
            </div>
        </div>
@endsection