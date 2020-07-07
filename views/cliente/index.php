<?php
session_start();
require_once('controladores/funciones.php');
$user = new CrudDB();//llama a la clase CrudBD 
$resultado=$user->selec_consultaesp("SELECT * FROM producto");
$resultado2=$user->selec_consultaesp("SELECT * FROM producto");
if((isset($_SESSION['usuario']))&&($_SESSION['usuario']['tipo']==0)){
?>
<!DOCTYPE html>
<html>

<head>

  <!-- Configuración -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ComidaYa</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- styles CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/sidebar_style.css">
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

  <!-- _____________________ Sidebar _____________________  -->

  <nav id="sidebar">

    <div id="dismiss">
      <span class="icon-arrow-left"></span>
    </div>

    <div class="sidebar-header">
      <p class="title-sidebar">Categorías</p>
    </div>

    <ul class="list-unstyled">

      <!-- Destacados -->

      <li>
        <a href="#" aria-expanded="false">Destacados</a>
      </li>

      <!-- Alimentos -->

      <li>
        <a href="#Alimentos" data-toggle="collapse" aria-expanded="false">Alimentos</a>
        <ul class="collapse list-unstyled" id="Alimentos">
  
        </ul>
      </li>

      <!-- Bebidas -->

      <li>
        <a href="#bebidas" data-toggle="collapse" aria-expanded="false">Bebidas</a>
        <ul class="collapse list-unstyled" id="bebidas">
   
        </ul>
      </li>
    </ul>
  </nav>

  <div class="overlay"></div>

  <!-- _____________________ Navbar _____________________ -->

  <header class="fixed-top navbar-principal">

    <nav class="first-navbar">
      <div class="container">
        <div class="row">

          <!-- logo -->
          <div class="col-4 col-sm-4 col-md-3 col-lg-2">
            <a href="landing.php"><img class="logo-navbar" src="assets/img/logo-comidaya-white.png" alt=""></a>
          </div>

          <!-- search -->
          <div class="display-flex col-7 col-sm-7 col-md-8 col-lg-6">
            <form class="form-search" action="index.html" method="post">

              <input class="input-search" type="search" name="buscar" placeholder="Nombre de producto o marca">
              <button class="icon-search" type="button" name="button"></button>

            </form>
          </div>

          <!-- menu user -->

          <nav class="navbar col-1 col-sm-1 col-md-1 col-lg-4 navbar-expand-lg navbar-dark pl-0">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <div class="navbar-nav">
                <div class="nav-item dropdown">
                  <a class="nav-link btn-account" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="button-account">
                      <p class="my-account">Mi cuenta</p>
                      <p class="user-account"><?=$_SESSION['usuario']['nombre']?></p>
                    </div>
                    <span class="icon-arrow-down white"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                    <li>
                      <a class="dropdown-item" href="#">Mis listas</a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="#">Compras</a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="profile.php">Mis datos</a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="logout.php">Salir</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </nav>

        </div>
      </div>
    </nav>

    <!-- _____________________ Nav sections _____________________ -->

    <nav class="second-navbar py-2">
      <nav class="container">
        <div class="row">

          <nav class="display-flex col-6 col-md-3 col-lg-2">
            <a class="btn-category" id="sidebarCollapse" href="#">
              <span class="icon-star green"></span>
              <div class="btn-sections">
                <p class="category-lists">Categoría</p>
                <p class="products-lists">Destacados</p>
              </div>
              <span class="icon-arrow-down green"></span>
            </a>
          </nav>

          <!-- Ubicación -->

          <nav class="display-flex col-6 col-md-9 col-lg-10 border-left">
            <a class="btn-location" href="#">
              <span class="icon-location green"></span>
              <p class="location">Merlo 1723</p>
            </a>
          </nav>


        </div>
      </nav>
    </nav>

  </header>

  <!-- _____________________ Product catalog _____________________ -->

  <!-- Titulo categoría -->

  <section class="container container-index">
    <div class="row">
      <div class="col-12">
        <h5 class="mt-3 titulo-categoria"><b>Alimentos</b></h5>
      </div>
    </div>
  </section>

  <!-- Productos -->
  <section class="container">
    <div class="row d-flex justify-content-center">

 <?php
  while($fila =mysqli_fetch_array($resultado)){
    if($fila['id_producto']=="1"){
    ?>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card card-hover my-3 p-3">
          <a class="mb-3" href="producto_descripcion.php">
            <img class="img-fluid" src="files/log1.png" alt="Image placeholder">
            <p class="descripcion-producto"><?php echo $fila['nombreprod']?></p>
            <hr class="linea-separacion">
            <p class="costo">$<?php echo $fila['precio']?></p>
            <p class="descripcion"><?php echo $fila['descripcionpro']?></p>
          </a>
          <a href="#" class="btn-agregar">
            Agregar a la lista
          </a>
        </div>
      </div>
    
  <?php
  }
  }
 ?>
    </div>
  </section>
   <!-- Titulo categoría -->

   <section class="container container-index">
    <div class="row">
      <div class="col-12">
        <h5 class="mt-3 titulo-categoria"><b>Bebidas</b></h5>
      </div>
    </div>
  </section>

  <!-- BEBIBAS -->
  <section class="container">
    <div class="row d-flex justify-content-center">

 <?php
  while($fila =mysqli_fetch_array($resultado2)){
    if($fila['id_producto']=="0"){
    ?>

      <div class="col-6 col-md-4 col-lg-3">
        <div class="card card-hover my-3 p-3">
          <a class="mb-3" href="producto_descripcion.php">
            <img class="img-fluid" src="files/log1.png" alt="Image placeholder">
            <p class="descripcion-producto"><?php echo $fila['nombreprod']?></p>
            <hr class="linea-separacion">
            <p class="costo">$<?php echo $fila['precio']?></p>
            <p class="descripcion"><?php echo $fila['descripcionpro']?></p>
          </a>
          <a href="#" class="btn-agregar">
            Agregar
          </a>
        </div>
      </div>
    
  <?php
  }
  }
 ?>
    </div>
  </section>

  <!-- _____________________ Botón carrito _____________________ -->

  <div class="col-12">
    <div>
      <a class="btn-carrito" href="#"><span class="icon-shopping-cart"></span></a>
    </div>
  </div>

  <!-- _____________________ Footer _____________________  -->

  <footer class="footer-index">
    <div class="container">
      <div class="row display-footer">

        <div class="col-12 col-md-1 display-footer">
          <span class=""></span>
        </div>

        <div class="col-12 col-md-5 col-lg-4 display-footer">
          <p class="slogan-footer">Todos los precios de <br> supermercados en un sólo lugar.</p>
        </div>

        <div class="col-10 col-md-3 col-lg-4 border-footer">
          <a class="link-footer" href="contact_index.php"><p>Contactanos</p></a>
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



  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- Sidebar JS -->
  <script type="text/javascript">
      $(document).ready(function () {
          $("#sidebar").mCustomScrollbar({
              theme: "minimal"
          });

          $('#dismiss, .overlay').on('click', function () {
              $('#sidebar').removeClass('active');
              $('.overlay').removeClass('active');
          });

          $('#sidebarCollapse').on('click', function () {
              $('#sidebar').addClass('active');
              $('.overlay').addClass('active');
              $('.collapse.in').toggleClass('in');
              $('a[aria-expanded=true]').attr('aria-expanded', 'false');
          });
      });
  </script>

</body>

</html> 
?><?php	
}else {
echo "no es un cliente";
}
