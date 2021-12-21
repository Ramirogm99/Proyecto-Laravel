<html>
<link href="{{ asset('css/indexstyle.css')}}" rel="stylesheet" type="text/css">
<body>
<div class="contenedor">

    <header>
        <div class="cabecera">
            <h1>Inicio de sesión</h1>
        </div>
    </header>

    
    <main>
        <div class="login_box">
            <div id="box_content">
                <h2 class="active"> Log In </h2>
                <form action = "/Proyecto-Laravel/public/inicio">
                <input type="email" id="login" class="fadeIn second" name="login" placeholder="email" required>
                <input type="password" id="password" class="fadeIn third" name="login" placeholder="password" required>
                <input type="submit" value="Log In">
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="piedepagina">
            <h1>footer</h1>
        </div>
    </footer>
</div>
</body>
</html>