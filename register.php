<?php

require_once('controladores/funciones.php');

setcookie("user_logged", "user_logged", time() + (60*60*24*10));

if($_POST){
  // Validar datos de usuario que no esten vacios
  $errors = validar_campos_vacios_registro($_POST);
  // Validar password en cuanto al formato
  $error_clave = validar_password($_POST);
  // Validar que el correo ingresado no corresponda a un usuario registrado
  $error_usuario= verificar_Correo($_POST);
  // El if valida que no haya algun error en las tres anteriores funciones
  if (!$errors && !$error_clave && !$error_usuario) {
    //Se genera un codigo random para la activacion de la cuenta
    $rand = rand(10000,100000);
    $cod_act= md5($rand);
    // Almacenar datos de usuario
    save_user($_POST,$cod_act);
    // Llama a la funcion validar correo para enviar correo de validacion
    enviarcorreo_validation($_POST,$cod_act);
    // Redireccionar
    header('location: validate.php');
  }
}
?>

<!DOCTYPE html>
<html>

<head>

    <!-- Configuración -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- styles CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login_register_contact.css">

    <!-- icons -->
    <link rel="stylesheet" href="assets/icons/icons.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


</head>

<body class="bg-grey">

  <!-- _____________________ Register _____________________ -->

  <section class="container pt-5">
    <div class="row d-flex justify-content-center">

      <div class="col-12 col-md-8 col-lg-5">
        <div class="card card-shadow d-flex align-items-center">

          <div class="row">
            <div class="col-12">

              <div class="icon-piggy-bank mt-3"></div>

              <p class="title-login">¡Este es tu primer paso <br> para comenzar a ahorrar Gracias a COMIDAYA!</p>

              <form class="" action="register.php" method="post">


                <div class="row">
                <div class="col-12 mb-0">
                  <select class="form-control" type="text" name="tipus" style="color:#39A00F;background-color:#fff;"  value="<?= $_POST['tipus']?>">
                  <option value="0">NUEVO CLIENTE</option>
                  <option value="1">NUEVO VENDEDOR</option>
                  <option value="2">NUEVO REPARTIDOR</option>
                  </select>
                  </div>
                  <div class="col-12 mb-2">
                   
                  </div>
                  <div class="col-12 mb-0">
                    <input class="form-control" type="text" name="name" style="color:#39A00F;" value="<?= $_POST['name']?>" placeholder="Nombre">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    <?=$errors['name'] ?>
                  </div>

                  <div class="col-12 mb-0">
                    <input class="form-control" type="text" name="lastname" style="color:#39A00F;" value="<?= $_POST['lastname']?>" placeholder="Apellido">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    <?=$errors['lastname']?>
                  </div>
                  
                  <div class="col-12 mb-0">
                  <select class="form-control" type="text" name="typedoc" style="color:#39A00F;background-color:#fff;"  value="<?= $_POST['typedoc']?>">
                  <option>DNI</option>
                  <option>CI</option>
                  <option>LE</option>
                  <option>LC</option>
                  </select>
                  </div>
                  <div class="col-12 mb-2">
                   
                  </div>
                  <div class="col-12 mb-0">
                    <input class="form-control" type="num" name="num" style="color:#39A00F;" value="<?= $_POST['num']?>" placeholder="Ingrese numero">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    <?=$errors['num']?>
                  </div>
                  <div class="col-12 mb-0">
                    <input class="form-control" type="email" name="email" style="color:#39A00F;" value="<?= $_POST['email'] ?>" placeholder="Email">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    <?=$error_usuario['email']?>
                  </div>

                  <div class="col-12 mb-0">
                    <input class="form-control" type="password" name="password" style="color:#39A00F;" value="<?= $_POST['password']?>" placeholder="Contraseña">
                  </div>
                  <div class="col-12 mb-2" style="color: #e03232; background-color: color: #f8d7da;">
                    <?=$error_clave['password']?>
                  </div>
                  <div class="col-12 d-flex justify-content-center">
                    <button class="btn-ingresar btn-lg" type="submit" name="button">Registrate</button>
                  </div>

                </div>


              </form>

              <p class="terminos-y-condiciones">Al hacer clic en "Registrate", acepta nuestros <a class="redirect-link" href="#">términos de servicio y política de privacidad.</a>  Ocasionalmente le enviaremos correos electrónicos relacionados con la cuenta.</p>

              <p class="redirect">¿Ya tenes una cuenta? <a class="redirect-link" href="login.php">Iniciar sesión</a></p>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section>



  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

</body>

</html>
