<?php
require "../config/config.php";

if(isset($_GET["controlador"])){
    $nombrecontrolador=($_GET["controlador"]);
}else{
    $nombrecontrolador=CONTROLADOR;
}
if(isset($_GET["accion"])){
    $accion=($_GET["accion"]);
}else{
    $accion=ACCION;
}

require_once "controladorniveles.php";
$controlador= new ControladorNiveles;
$resultado=$controlador->$accion();

require_once $controlador->vista.'.php';