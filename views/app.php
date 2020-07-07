<?php
class View{

function __construct(){
    //echo "<p>Vista principal</p>";
}

function render(){
    require 'views/cliente/index.php';
    require 'views/repartidor/indexrep.php';
    require 'views/vendedor/indexven.php';
}
}