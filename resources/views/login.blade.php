<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion REDEL</title>
    <link rel="stylesheet" href="./login.css">
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

<!-- Login -->
  <div class="login-box">
      <h1 id="logo" class="avatar">RE<span style="color: red;">DEL</span> </h1>
    <form>
      <!-- USERNAME INPUT -->
      <label for="username">Usuario</label>
      <input type="text" placeholder="Ingrese Nombre de Usuario">
      <!-- PASSWORD INPUT -->
      <label for="password">Contraseña</label>
      <input type="password" placeholder="Ingrese Su Contraseña">
      <ul>
        <li>
          <a href="{{ route('sesion') }}" class="btninicio">Iniciar Sesión</a>
        </li>
      </ul>
      <a href="{{ route('register') }}">¿No tienes una cuenta REDEL?</a>
    </form>

  </div>



</body>
</html>
