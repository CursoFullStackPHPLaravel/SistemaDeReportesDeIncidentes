<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redel</title>
    <link rel="stylesheet" href="./index.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Barra de Navegación -->
    <header>
        <section id="barra-navegacion">
         <h1 id="logo">RE<span style="color: red;">DEL</span> </h1>
            <h3>Reparacion de Electrodomesticos</h3>
            <ul>
              <li>
                <a href="{{ route('login') }}" class="btnSlider">Login</a>
              </li>
            </ul>
        </section>
    </header>

        <!--SLIDER-->
      <div>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script defer src="functions.js"></script>
        <section id="container-slider">
            <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
            <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
            <ul class="listslider">
              <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
              <li><a itlist="itList_1" href="#"></a></li>
              <li><a itlist="itList_2" href="#"></a></li>
              <li><a itlist="itList_3" href="#"></a></li>
            </ul>
            <ul id="slider">
              <li style="background-image: url('https://www.servibarna.com/wp-content/uploads/reparacion_lavadora.jpg'); z-index:0; opacity: 1;">
              </li>
              <li style="background-image: url('https://lasbuenascompras.com.mx/wp-content/uploads/2021/05/reparacion-de-refrigerador-1024x683.jpg'); ">
              </li>
              <li style="background-image: url('https://appliancerepairdubai.com/wp-content/uploads/2019/12/professional-washing-machine-repair-service-in-dubai.jpg'); ">
              </li>
              <li style="background-image: url('https://electricianoaklandca.co/wp-content/uploads/2021/06/electrician-oakland-ca-residential-customer-service-always-on-time-1024x683.jpg'); ">
                <div class="content_slider" >
                  <div>
                    <P>¡TU PRESUPUESTO AL INSTANTE!</p>
                    <nav>
                        <a href="#contacto" class="btnSlider">Contáctanos</a>
                    </nav>
              </div>
                </div>
              </li>
           </ul>
         </section>
      </div>
  <!-- Que es REDEL-->
  <div class="pregunta">
    <h1 id="logo">¿Qué es RE<span style="color: red;">DEL</span>? </h1>
    <p id="logo">Somos una empresa Argentina dedicada a la reparación de electrodomésticos y ventas de insumos en general, que desde hace mas de veinte años, contamos con equipamiento de última tecnología y procedimientos para lograr alta calidad y eficacia en la prestación de servicios.
      Como así también con un equipo de técnicos altamente capacitados y especializados en los distintos rubros, solo así, trabajando con profesionalidad y un fuerte sentido de calidad en la prestación de servicio, podemos brindar a usted, una solución favorable a sus problemas. <br> Brindamos nuestros servicios en varios puntos de nuestro pais:</p>
      <div>
        <img src="./Img/argentina.jpg" alt="" width="200px">
      </div>
  </div>
  <!-- Quienes Somos -->
    <div>
      <div class="pregunta">
        <h1>¿Quienes Somos?</h1>

      </div>
      <section id="tarjetas">
        <div class="tarjeta">
          <img src="./Img/Perfil Miguel.jpg" alt="">
          <h2>Miguel Quispe</h2>
          <p class="profesion">Back-End</p>
        </div>
        <div class="tarjeta">
          <img src="./Img/Perfil Tomas.jpeg" alt="">
          <h2>Tomas Lodola</h2>
          <p class="profesion">Back-End</p>
        </div>
        <div class="tarjeta">
          <img src="https://scontent.fcrd5-1.fna.fbcdn.net/v/t1.6435-9/54381463_2873082792702639_4144542392944427008_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeG2IlhO0WnlcfTp48rX71CODWiuZh16ZykNaK5mHXpnKcO4uZZg5Aun4jbhEuhWok7TgUeWrJCrdzvJCfGNIhWD&_nc_ohc=kj8mxbWWdmkAX_Flz5W&_nc_ht=scontent.fcrd5-1.fna&oh=00_AT8DpG-AfkMVwC4O-ipwFZuRHve7opxQoU7rEqW4OiHeIw&oe=61F19679" alt="">
          <h2>Lucas Obando</h2>
          <p class="profesion">Front-End</p>
        </div>
      </section>


    </div>
  <!--Contactos-->
    <div class="content" id="contacto">

      <h1 class="logo">Contáctanos <span></span></h1>

      <div class="contact-wrapper animated bounceInUp">
          <div class="contact-form">
              <h3>Contacto</h3>
              <form action="">
                  <p>
                      <label>Nombre Completo</label>
                      <input type="text" name="fullname">
                  </p>
                  <p>
                      <label>Email</label>
                      <input type="email" name="email">
                  </p>
                  <p>
                      <label>Telefono</label>
                      <input type="tel" name="phone">
                  </p>
                  </p>
                  <p class="block">
                     <label>Mensaje</label>
                      <textarea name="message" rows="3"></textarea>
                  </p>
                  <p class="block">
                      <button>
                        Enviar
                      </button>
                  </p>
              </form>
          </div>
          <div class="contact-info">
              <h4>Dudas generales</h4>
              <p>Si necesitás contactarnos para realizar alguna consulta, sentite libre de enviar tu comentario, visitar nuestro local,
                  llamarnos o enviarnos un correo.
              </p>

              <ul>
                  <li><i class="fas fa-map-marker-alt"></i> Calle Zenteno 621 </li>
                  <li><i class="fas fa-phone"></i> (2945) 557738</li>
                  <li><i class="fas fa-envelope"></i> redel-info@gmail.com</li>
              </ul>

              <p>Respondemos en horario laboral, durante la mañana entre las 8hs y 13hs. Y por la tarde entre las 14hs y 18hs.</p>
          </div>
      </div>

    </div>
</head>
<body>
