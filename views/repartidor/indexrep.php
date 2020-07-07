<?php
session_start();
if((isset($_SESSION['usuario']))&&($_SESSION['usuario']['tipo']==2)){

echo "repartidor";
	
}
