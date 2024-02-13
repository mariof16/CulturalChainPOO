<?php
$nombrecontrolador=$_GET["controlador"];
$accion=$_GET["accion"];

require_once "controladorniveles.php";
$controlador= new ControladorNiveles;
$resultado=$controlador->$accion();

require_once $controlador->vista.'.php';