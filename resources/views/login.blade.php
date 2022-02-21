@extends('layoutLogin')

@section('contenido')
        <!-- Contenido -->
        <div class="login_box">
            
            <div id="box_content">
                <h2 class="active"> Log In </h2>
                <form action = "{{ route('login.comprobarUsuario') }}" method="post">
                    @csrf
                    <input type="email" id="email" class="fadeIn second" name="email" placeholder="email" required>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
                    <input type="submit" value="Log In">
                </form>
            </div>
        </div>
@endsection