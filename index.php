<?php
error_reporting(0);
session_start();
if((isset($_SESSION['usuario']))&&($_SESSION['usuario']['tipo']==0)){
	require 'views/cliente/index.php';
}
if((isset($_SESSION['usuario']))&&($_SESSION['usuario']['tipo']==1)){
	require 'views/vendedor/indexven.php';
}
if((isset($_SESSION['usuario']))&&($_SESSION['usuario']['tipo']==2)){
	require 'views/repartidor/ndexrep.php';
}else{
	header('Location: landing.php');
}
?>