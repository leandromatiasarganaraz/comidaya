<?php
class  CrudDB{    
  private $host   ="localhost";
  private $usuario="root";
  private $clave  ="rootaws";
  private $db     ="comidaya";
  public $conexion;
  public function __construct(){
      $this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db)
      or die(mysql_error());
      $this->conexion->set_charset("utf8");
  }
  //INSERTAR
  public function insertar($tabla, $datos){
      $resultado =    $this->conexion->query("INSERT INTO $tabla VALUES (null,$datos)") or die($this->conexion->error);
      if($resultado)
          return true;
      return false;
  } 
  //BORRAR
  public function borrar($tabla, $condicion){    
      $resultado  =   $this->conexion->query("DELETE FROM $tabla WHERE $condicion") or die($this->conexion->error);
      if($resultado)
          return true;
      return false;
  }
  //ACTUALIZAR
  public function actualizar($tabla, $campos, $condicion){    
      $resultado  =   $this->conexion->query("UPDATE $tabla SET $campos WHERE $condicion") or die($this->conexion->error);
      if($resultado)
          return true;
      return false;        
  } 
  //BUSCAR
  public function buscar($tabla, $condicion){
      $resultado = $this->conexion->query("SELECT * FROM $tabla WHERE $condicion") or die($this->conexion->error);
      if($resultado)
          return $resultado->fetch_all(MYSQLI_ASSOC);
      return false;
  } 
  //BUSCAR COLUMNA ESPECIFICA
  public function buscar_columna($tabla, $columna){
    $resultado = $this->conexion->query("SELECT $columna FROM $tabla") or die($this->conexion->error);
          return $resultado;
    
} 
  //SELECCIONAR TODOS LOS DATOS DE UNA TABLA
  public function selec_tabla($tabla){
    $resultado = $this->conexion->query("SELECT * FROM $tabla") or die($this->conexion->error);
          return $resultado;
    
} 
public function selec_consultaesp($consulta){
  $resultado = $this->conexion->query("$consulta") or die($this->conexion->error);
        return $resultado;
  
} 
}

function enviarcorreo_validation($datos,$cod_act){
  //librerias
  require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();
$full_name  = $datos['name']; // name 
$tipo = $datos['tipus'];
$text_message    = "Gracias Por confiar en nosotros!<br />Saludos Equipo de ComidaYa";  
   
   $message  = "<html><body>";
   
   $message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
   
   $message .= "<tr><td>";
   
   $message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:800px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
    
   $message .= "<thead>
      <tr height='80'>
       <th colspan='4' style='background-color:#4cd137; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#f5f6fa; font-size:34px;' >COMIDAYA</th>
      </tr>
      </thead>";
    
   $message .= "<tbody>
      <tr>
       <td colspan='4' style='padding:15px;'>
        <p style='font-size:20px;'>Hola:".$full_name.",</p>
        <hr />
        <p style='font-size:25px;'>Para activar tu cuenta, por favor hacé click en Activar Cuenta</p>
        <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#e84118; text-align:center;'><a href='http://www.comidaya.vamdev.com.ar/verify.php?activate=$cod_act&type=$tipo' style='color:#f5f6fa; text-decoration:none; font-family:Verdana, Geneva, sans-serif; font-size:25px;'>ACTIVAR CUENTA</a></td>
       
      </tr>
        <img src='https://i.ibb.co/hLtbGxn/comidaya.jpg' alt='COMIDAYA' title='COMIDAYA' style='height:auto; width:100%; max-width:100%;' />
        <p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>".$text_message.".</p>
       </td>
      </tr>
      
      </tbody>";
    
   $message .= "</table>";
   
   $message .= "</td></tr>";
   $message .= "</table>";
   
   $message .= "</body></html>";

// si no les llega el mail, ingrese a este link y permitanle al google Acceso de aplicaciones poco seguras, activarlo
// https://myaccount.google.com/u/0/lesssecureapps?pli=1

//Configuracion servidor mail
//$mail->From ='comidaya.validacion@gmail.com'; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='comidaya.validacion@gmail.com'; //nombre usuario
$mail->Password = '2020Monje13'; //contraseña
//Agregar Remitente
$mail->SetFrom("no-reply@comidaya.com.ar",'ComidaYA');
//Agregar destinatario
$mail->AddAddress($_POST['email']);
$mail->Subject = "Validacion de Correo";
$mail->Body    = $message;
$mail->AltBody    = $message;

//retornar a la funcion 1 si se envio 0 si no pudo ser enviado
if ($mail->Send()) {
    return 1;
} else {
   return 0;
}

}
// ------------- Validar campos vacios (Registro) -------------

function validar_campos_vacios_registro ($datos) {

  $errors = [];

  if(empty($datos['name']))
  {
    $errors['name'] = 'Ingresar nombre';
  }
  if(empty($datos['lastname']))
  {
    $errors['lastname'] = 'Ingresar apellido';
  }
  if(empty($datos['email']))
  {
    $errors['email'] = 'El email no tiene formato correcto';
  }
  if(empty($datos['num']))
  {
    $errors['num'] = 'Ingrese el numero porfavor';
  }

  return $errors;

}

// ------------- Validar campos vacios (Login) -------------

function validar_campos_vacios_login ($datos) {

  $error = [];

  if(empty($datos['email']))
  {
    $error['email'] = 'El campo de email está vacío';
  }
  if(empty($datos['password']))
  {
    $error['password'] = 'El campo de contraseña está vacío';
  }

  return $error;

}


// ------------- Validar password -------------

function validar_password($datos) {

  $error_clave = [];

  if(empty($datos['password']))
  {
    $error_clave['password'] = 'Ingresar contraseña';
  }
  else if(strlen($datos['password']) < 6)
  {
    $error_clave['password'] = "La clave debe tener al menos 6 caracteres";
  }
  else if(strlen($datos['password']) > 16)
  {
    $error_clave['password'] = "La clave no puede tener más de 16 caracteres";
  }
  else if (!preg_match('`[a-z]`',$datos['password']))
  {
    $error_clave['password'] = "La clave debe tener al menos una letra minúscula";
  }
  else if (!preg_match('`[A-Z]`',$datos['password']))
  {
    $error_clave['password'] = "La clave debe tener al menos una letra mayúscula";
  }
  else if (!preg_match('`[0-9]`',$datos['password']))
  {
    $error_clave['password'] = "La clave debe tener al menos un caracter numérico";
  }

  return $error_clave;

}
//---------------Guardar usuario en BD -------------------

function save_user($post,$cod_act){
$user = new CrudDB();//llama a la clase CrudBD 
$consul=$user->selec_consultaesp("SELECT id_domicilio FROM usuarios ORDER BY id_domicilio DESC LIMIT 1");
foreach($consul as $home) {
$home1 = $home['id_domicilio'];
}
$home1 ++;
$rand = rand(10000,100000);
$cod_ac= md5($rand);
$name = $post['name'];
$lastname = $post['lastname'];
$typedoc = $post['typedoc'];
$num = $post['num'];
$tip= $post['tipus'];
$email = $post['email'];
$password = password_hash ($post['password'] , PASSWORD_DEFAULT);
$condition = "0";
$Bd="usuarios";//La base de datos que quiero realizar el insertado
$u=$user->insertar("$Bd","'$name','$lastname','$typedoc','$num','$home1','$condition','$email','$password','$condition','$cod_act','$tip'");
if($post['tipus']==1){
  $resultado=$user->buscar("usuarios","$num");
  foreach($resultado as $value) {
    $value = $value['id_usuario'];
  }
  $Bd="locales";
  $u=$user->insertar("$Bd","'$condition','$value','$condition','$condition','$condition'");
}
if($post['tipus']==2){
  $resultado=$user->buscar("usuarios","$num");
  foreach($resultado as $value) {
    $value = $value['id_usuario'];
  }
  $Bd="repartidor";
  $u=$user->insertar("$Bd","'$condition','$condition','$condition','$condition','$condition','$value','$condition'");
}
}

function verificar_Correo($verificar) {

  if($verificar) {
    
    $user = new CrudDB();//llama a la clase CrudBD 
    $resultado=$user->buscar_columna("usuarios","email");
  
    foreach($resultado as $usuariobd) {
      if(($verificar['email'] === $usuariobd['email'])) {
        $usuario['email']="El correo ya existe";
        return $usuario;
      }
    }

  }

  return false;
}

// ------------- Verificar si el usuario ya existe (login) -------------

function verificarUsuario($verificar) {

  if($verificar) {

    $user = new CrudDB();//llama a la clase CrudBD 
    $usuariobd=$user->selec_tabla("usuarios");
  
    //no funciona la comparacion
    foreach($usuariobd as $usuario) {
      if(($verificar['email'] === $usuario['email']) && password_verify($verificar['password'], $usuario['clave'])) {
        return $usuario;
      }
    }

  }

  return false;
}