<?php
session_start();
require_once('../controladores/funciones.php');
$user = new CrudDB();//llama a la clase CrudBD 
$iduser=$_SESSION['usuario']['id_usuario'];
$resultado=$user->selec_consultaesp("SELECT id_local FROM locales WHERE id_usuario='$iduser'");
$resultado=mysqli_fetch_array($resultado);
$resultado=$resultado['id_local'];
if($_POST){
  $idproducto = $_POST['tipus'];
  $nombreprod = $_POST['nombreprod'];
  $precioprod = $_POST['precioprod'];
  $stockprod = $_POST['stockprod'];
  $descriprod = $_POST['descriprod'];
  $Bd="producto";
  $u=$user->insertar("$Bd","'$idproducto','$nombreprod','$precioprod','$stockprod','$descriprod','$resultado'");
  if($u){
    $errors = 'Se ingreso correctamente';
  }
 else{
    $errors2 = 'No se pudo ingresar';
 }
}
if((isset($_SESSION['usuario']))&&($_SESSION['usuario']['tipo']==1)){

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
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/sidebar_style.css">
      <link rel="stylesheet" href="../css/landing_style.css">
    
      <!-- icons -->
      <link rel="stylesheet" href="../assets/icons/icons.css">
    
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    
      <!-- favicon -->
      <link rel="shortcut icon" href="" />
    
    </head>
    
    <body class="bg-grey">
    
      <!-- _____________________ Sidebar _____________________  -->
    
      <nav id="sidebar">
    
        <div id="dismiss">
          <span class="icon-arrow-left"></span>
        </div>
    
        <div class="sidebar-header">
          <p class="title-sidebar">PRODUCTOS</p>
        </div>
    
        <ul class="list-unstyled">
           <!-- Alimentos -->

      <li>
        <a href="#Pedidos" data-toggle="collapse" aria-expanded="false">Pedidos</a>
        <ul class="collapse list-unstyled" id="Pedidos">
          <li>
            <a href="#">Ordenes por entregar</a>
          </li>
          <li>
            <a href="#">Ordenes entregadas</a>
          </li>
          <li>
            <a href="#">Reclamos</a>
          </li>
        </ul>
      </li>
    
          <!-- Alimentos -->
    
          <li>
            <a href="#Alimentos" data-toggle="collapse" aria-expanded="false">Alimentos</a>
            <ul class="collapse list-unstyled" id="Alimentos">
              <li>
                <a href="#">Ver Todos</a>
              </li>
              <li>
                <a href="#">Cargar nuevos</a>
              </li>
              <li>
                <a href="#">Modificar/Eliminar</a>
              </li>
            </ul>
          </li>
    
          <!-- Bebidas -->
    
          <li>
            <a href="#bebidas" data-toggle="collapse" aria-expanded="false">Bebidas</a>
            <ul class="collapse list-unstyled" id="bebidas">
            <li>
                <a href="#">Ver Todos</a>
              </li>
              <li>
                <a href="#">Cargar nuevos</a>
              </li>
              <li>
                <a href="#">Modificar/Eliminar</a>
              </li>
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
                <a href="landing.php"><img class="logo-navbar" src="assets/img/#" alt=""></a>
              </div>
    
              <!-- search -->
              <div class="display-flex col-7 col-sm-7 col-md-8 col-lg-6">
               
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
                          <a class="dropdown-item" href="mis_listas.php">Mis listas</a>
                        </li>
    
                        <li>
                          <a class="dropdown-item" href="#">Compras</a>
                        </li>
    
                        <li>
                          <a class="dropdown-item" href="profile.php">Mis datos</a>
                        </li>
    
                        <li>
                          <a class="dropdown-item" href="../logout.php">Salir</a>
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
                    <p class="category-lists">Mis Productos</p>
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
    
      <!-- _____________________Cargar Producto _____________________ -->
    
      
<section class="container container-index">
<form class="" action="cargar.php" method="post">
  <fieldset>

<!-- Formulario -->
<legend>Carga de nuevo producto</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="text_nom1">Seleccione Categoria:</label>  
  <div class="col-md-4">
  <select class="form-control" type="text" name="tipus" style="color:#39A00F;background-color:#fff;"  value="<?= $_POST['tipus']?>">
                  <option value="1">ALIMENTO</option>
                  <option value="0">BEBIDA</option>
                  </select>
                  </div>

  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="text_nom1">Nombre de Producto:</label>  
  <div class="col-md-4">
  <input id="nombreprod" name="nombreprod" placeholder="Ingrese el nombre del Producto" value="<?= $_POST['nombreprod']?>" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="text_nom2">Precio de Producto:</label>  
  <div class="col-md-2">
  <input id="precioprod" name="precioprod" placeholder="Ingrese el precio" value="<?= $_POST['precioprod']?>" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="text_ape1">Ingrese Stock</label>  
  <div class="col-md-2">
  <input id="stockprod" name="stockprod" placeholder="ingrese Stock" value="<?= $_POST['stockprod']?>" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="text_ape2">Descripcion:</label>  
  <div class="col-md-4">
  <input id="descriprod" name="descriprod" placeholder="Descripcion del producto" value="<?= $_POST['descriprod']?>" class="form-control input-md" type="text">

  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn_enviar"></label>
  <div class="col-md-4">
  <button class="btn btn-default" style="color:#fff;background-color:#39A00F;"  type="submit" name="button">CARGAR</button>
  </div>
</div>
<div class="col-12 mb-2" style="color:#4cd137; background-color: color: #4cd137;">
  <?=$errors?>
  </div>
  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
  <?=$errors2?>
  </div>
</fieldset>
</form>
        </section>
    
     
 
    
   
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
    <?php	
    }else {
    echo "no es un vendedor";
    }
    
	

