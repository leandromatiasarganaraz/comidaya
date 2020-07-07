<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/location.css">
    <title>Ubicacion</title>
  </head>
​
​
  <body>
​
      <!-- Navbar -->
      <header class="fixed-top navbar-principal">
​
        <nav class="first-navbar">
          <div class="container">
            <div class="row">
​
              <!-- logo -->
​
              <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                <a href="landingpage.html"><img class="logo-navbar" src="assets/img/logo-comidaya-white.png" alt=""></a>
              </div>
​
              <!-- menu user -->
​
              <nav class="navbar col-1 col-sm-1 col-md-1 col-lg-4 navbar-expand-lg navbar-dark pl-0">
​
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <div class="navbar-nav">
                    <div class="nav-item dropdown">
                      <a class="nav-link btn-account" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="button-account">
                          <p class="my-account">Mi cuenta</p>
                          <p class="user-account">Nombre de usuario</p>
                        </div>
                        <span class="icon-arrow-down white"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
​
                        <li>
                          <a class="dropdown-item" href="#">Configuración</a>
                        </li>
​
                        <li>
                          <a class="dropdown-item" href="#">Contacto</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">Salir</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </nav>
      <header/>
​
      <!-- Contenedor formulario -->
​
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- Header -->
​
            <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Por favor ingresa tu direccion <br> para encontrar los productos de <br>
             los comercios mas cercanos </h5>
            </div>
​
            <!-- Direccion -->
​
            <div class="form-group">
             <input type="text" class="form-control " id="direccion" placeholder="Ingresa tu direccion">
            </div>
​
             <!-- Localizacion automatica-->
​
              <div class="modal-footer" id="cierre">
                <button type="button" class="btn btn-success btn-md btn-block" id="botonR">Usar localizacion automatica</button>
              </div>
​
              <!-- Envio de formulario -->
​
            <div class="modal-footer " id="cierre">
              <button type="button" class="btn btn-outline-success btn-sm" id="botonF">Ingresar</button>
            </div>
​
          </div>
      </div>
​
​
      <footer class="bg-footer d-flex align-items-center">
            <div class="container">
              <div class="row">
                <div class="col-4 d-flex flex-row align-items-center">
                  <span class="icon-comidaya-iso-circle green iso-footer"></span>
                  <p class="slogan-footer ml-4">Todos los precios de <br> supermercados en un sólo lugar.</p>
                </div>
                <div class="col-4 border-left px-5">
                  <a class="link-footer" href="#"><p>Contactanos</p></a>
                  <a class="link-footer" href="#"><p class="mb-0">Preguntas frecuentes</p></a>
                </div>
                <div class="col-4 border-left px-5 d-flex justify-content-around align-items-center">
                  <a class="icon-social-footer" href="https://www.facebook.com/comidaya-109530587096091/"><span class="icon-facebook-circle green icon-social-footer"></span></a>
                  <a class="icon-social-footer" href="https://www.instagram.com/comidaya/"><span class="icon-instagram-circle green icon-social-footer"></span></a>
                  <a class="icon-social-footer" href="https://twitter.com/super_buscado"><span class="icon-twitter-circle green icon-social-footer"></span></a>
                </div>
              </div>
            </div>
      </footer>
​
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
