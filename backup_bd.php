<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$database = 'comidaya';
$user = 'root';
$pass = 'rootaws';
$host = 'localhost';
$fecha = date("Ymd-His"); //Obtenemos la fecha y hora para identificar el respaldo
$salida_sql = $database.'_'.$fecha.'.sql'; 

exec("mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$salida_sql} 2>&1", $output);


$zip = new ZipArchive(); //Objeto de Libreria ZipArchive

//Construimos el nombre del archivo ZIP Ejemplo: mibase_20160101-081120.zip
$salida_zip = $database.'_'.$fecha.'.zip';

if($zip->open($salida_zip,ZIPARCHIVE::CREATE)===true) { //Creamos y abrimos el archivo ZIP
	$zip->addFile($salida_sql); //Agregamos el archivo SQL a ZIP
	$zip->close(); //Cerramos el ZIP
	unlink($salida_sql); //Eliminamos el archivo temporal SQL
	header ("Location: $salida_zip"); // Redireccionamos para descargar el Arcivo ZIP
	} else {
	echo 'Error'; //Enviamos el mensaje de error
}
?>