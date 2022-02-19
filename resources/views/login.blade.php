@extends('layout')

@section('contenido')
        <!-- Contenido -->
        <div class="login_box">
            <div id="box_content">
                <h2 class="active"> Log In </h2>
                <form action = "/inicio">
                <input type="email" id="login" class="fadeIn second" name="login" placeholder="email" required>
                <input type="password" id="password" class="fadeIn third" name="login" placeholder="password" required>
                <input type="submit" value="Log In">
                </form>
            </div>
        </div>
@endsection