<?php
require "niveles.php";

$niveles= new Niveles;
if(isset($_POST["crear"])){
    $niveles->crear();
    header("Location: listarniveles.php");
}
if(isset($_POST["modificar"])){
    $niveles->modificar();
    header("Location: listarniveles.php");
}
if(isset($_POST["si"]))
{
    $niveles->borrar($_POST["id"]);
    header("Location: listarniveles.php");
}
if(isset($_POST["no"]))
{
    header("Location: listarniveles.php");
}