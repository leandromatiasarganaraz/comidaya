<?php
require_once('controladores/funciones.php');
$user = new CrudDB();//llama a la clase CrudBD
$cod = $_GET["activate"];
$type = $_GET["type"];
if(isset($cod)&&isset($type)){
    $u=$user->actualizar("usuarios","condicion='1'","cod_activacion='$cod'");
    $u=$user->actualizar("usuarios","tipo='$type'","cod_activacion='$cod'");
}  ?>
<!DOCTYPE html>
<html>

<head>

    <!-- Configuración -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Verificar Correo</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- styles CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login_register_contact.css">
      <link rel="stylesheet" href="css/landing_style.css">

    <!-- icons -->
    <link rel="stylesheet" href="assets/icons/icons.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="iso-comidaya.ico" />

</head>

<body class="bg-grey">

  <section class="container" style="height:80px">
    <div class="row d-flex justify-content-center">
      <div class="col-3 d-flex justify-content-center mt-3">
        <a href="landing.php">
          <img class="logo-navbar-green" src="assets/img/logo-comidaya-green.png" alt="">
        </a>
      </div>
    </div>
  </section>

  <!-- _____________________ Activando Cuenta _____________________ -->

  <section class="container">
    <div class="row d-flex justify-content-center">

      <div class="col-12 col-md-8 col-lg-5">
        <div class="card card-shadow d-flex align-items-center">

          <div class="row">
            <div class="col-12">

              <div class="icon-piggy-bank mt-3"></div>

              <p class="title-login mt-4">Estamos Activando tu cuenta, <br> En un instante seras redireccionado para iniciar sesion!</p>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

  <script>
  setTimeout("location.href = 'login.php';",5000);
  </script>

  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

</body>

</html>