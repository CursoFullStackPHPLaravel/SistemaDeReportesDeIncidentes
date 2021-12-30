<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate en REDEL</title>
    <link rel="stylesheet" href="./registro.css">
</head>
<body>
    <!-- Barra de Navegación -->
<header>
    <section id="barra-navegacion">
     <h1 id="logo">RE<span style="color: red;">DEL</span> </h1>
        <h3>Reparacion de Electrodomesticos</h3>
        <ul>
          <li>
            <a href="{{ route('home') }}" class="btnSlider">Volver al inicio</a>
          </li>
        </ul>
    </section>
</header>
    <!-- Registro -->
    <div class="login-box">
        <h1 id="logo" class="avatar">RE<span style="color: red;">DEL</span> </h1>
    </div>

    <section class="form-register">
        <h4>Formulario Registro</h4>
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
        <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
        <input class="controls" type="text" name="Nombre de Usuario" id="Usuario" placeholder="Ingrese su Nombre de Usuario">
        <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
        <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
        <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
        <a href="{{ route('login') }}" class="btninicio">Registrate</a>
        <p><a href="{{ route('login') }}">¿Ya tengo Cuenta?</a></p>
      </section>
</body>
</html>
