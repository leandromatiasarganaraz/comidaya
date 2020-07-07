<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>

    <!-- Configuración -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Comida Ya</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- styles CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/landing_style.css">
    
    <!-- icons -->
    <link rel="stylesheet" href="assets/icons/icons.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="iso-comidaya.ico" />

</head>

<body>
     <div class="loader_bg">
       <div class="loader">
    <!--<h1 style="text-align: center; color: #43A047;">COMIDA YA</h1>-->
       </div>
      </div>
  <!-- _____________________ Nav _____________________  -->

  <nav class="linear-gradient fixed-top">
    <div class="container">
      <div class="row">

        <!-- Logo -->

        <div class="col-3">
          <a href="#">
            <img class="logo-navbar-green" src="assets/img/log1.png" alt="">
          </a>
        </div>

        <!-- Botones login -->

        <div class="col-9 navbar">
          <a class="btn-login mr-4" href="login.php">Iniciar sesión</a>
          <a class="btn-register py-1 px-3" href="register.php">Registrate</a>
        </div>

      </div>
    </div>
  </nav>

  <!-- _____________________ Header _____________________  -->

  <header class="bg-img-food">

    <div class="container">
      <div class="row">

        <div class="col-12 titles-description">
          <div class="row">


            <div class="col-12 title">
              <h2>COMPARÁ, COMPRÁ, AHORRÁ.</h2>
            </div>

            <div class="col-12 col-md-5 col-lg-5">
              <h6 class="subtitle">TODOS LOS PRECIOS EN UN SÓLO LUGAR.</h6>
            </div>

            <div class="col-12 mt-3 btn-comprar">
              <a class="btn-comprar-ahora py-2 px-4 mt-2" href="register.php">Comprar ahora</a>
            </div>


          </div>
        </div>

        <!-- _____________________ Cards _____________________  -->

        <section class="col-12 card-box">
          <div class="row d-flex justify-content-center">

            <div class="col-10 col-md-4">
              <div class="card card-landing card-compara">
                <span class="icon-balance icon-landing green"></span>
                <h5 class="card-landing-title d-flex justify-content-center mt-4">Compará</h5>
                <p class="card-landing-text mt-3">El primer paso para ahorrar: comparar antes de comprar. Precios, ofertas en tiempo real.</p>
              </div>
            </div>

            <div class="col-10 col-md-4">
              <div class="card card-landing card-compra">
                <span class="icon-shopping-basket icon-landing green"></span>
                <h5 class="card-landing-title d-flex justify-content-center mt-4">Comprá</h5>
                <p class="card-landing-text mt-3">Armá tu lista de compras de forma rápida y sencilla. Podrás crear listas personalizadas y consultarla cuando quieras. </p>
              </div>
            </div>

            <div class="col-10 col-md-4">
              <div class="card card-landing">
                <span class="icon-save-money icon-landing green"></span>
                <h5 class="card-landing-title d-flex justify-content-center mt-4">Ahorrá</h5>
                <p class="card-landing-text mt-3">Enterate de todas las promociones bancarias de los comercios mas cercanos. Seleccioná tu banco preferido y te enviaremos un recordatorio.</p>
              </div>
            </div>

          </div>
        </section>



      </div>
    </div>

  </header>

  <!-- _____________________ Marcas Supermercados _____________________  -->

  <section class="bg-logos-sup d-flex align-items-center">
    <div class="container">
      <div class="row">

        <div class="col-2">
          <img class="logo-sp" src="assets/img/logo_mc.png" alt="">
        </div>

        <div class="col-2">
          <img class="logo-sp" src="assets/img/pepper.png" alt="">
        </div>

        <div class="col-2">
          <img class="logo-sp" src="assets/img/logo_kentucky.png" alt="">
        </div>

        <div class="col-2">
          <img class="logo-sp" src="assets/img/logo_benjamin.png" alt="">
        </div>

        <div class="col-2">
          <img class="logo-sp" src="assets/img/logo_mostaza.png" alt="">
        </div>

        <div class="col-2">
          <img class="logo-sp" src="assets/img/logo_lafarola.png" alt="">
        </div>

      </div>
      
    </div>
  </section>

  <!-- _____________________ Device _____________________  -->

  <section class="bg-device">
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-6 margin-device">
          <h3 class="title-2">¿Cómo funciona?</h3>
          <div class="row mt-4">
            <div class="col-12">
              <p class="subtitle">Registrate, luego valida tu correo y empeza a comprar que nosotros nos escargamos de llevartelo </p>
            </div>
          </div>
         <!-- <p class="subtitle-postal">Empieza a comprar</p>-->

        </div>

        <div class="col-12 col-md-6 display-device">
          <img class="img-device mt-5" src="assets/img/#" alt="">
        </div>

      </div>
    </div>
  </section>

  <!-- _____________________ Footer _____________________  -->

  <footer class="bg-footer">
    <div class="container">
      <div class="row display-footer">

        <!--<div class="col-12 col-md-1 display-footer">
          <span class="icon-comidaya-iso-circle green iso-footer"></span>
        </div>-->

        <div class="col-12 col-md-5 col-lg-4 display-footer">
          <p class="slogan-footer">Todos los precios en <br> un solo lugar</p>
        </div>

        <div class="col-10 col-md-3 col-lg-4 border-footer">
          <a class="link-footer" href="contact.php"><p>Contactanos</p></a>
          <a class="link-footer" href="faq.php"><p class="mb-0">Preguntas frecuentes</p></a>
        </div>

        <div class="col-8 col-md-3 d-flex justify-content-around align-items-center">
          <a class="icon-social-footer" href=""><span class="icon-facebook-circle green icon-social-footer"></span></a>
          <a class="icon-social-footer" href=""><span class="icon-instagram-circle green icon-social-footer"></span></a>
          <a class="icon-social-footer" href=""><span class="icon-twitter-circle green icon-social-footer"></span></a>
        </div>

      </div>
    </div>
  </footer>



  <!-- jQuery CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 3500);
    </script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <!-- Bootstrap CDN -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
