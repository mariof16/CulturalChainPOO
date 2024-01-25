<?php
require "niveles.php";

$niveles= new Niveles;
if(isset($_POST["crear"])){
    $error=$niveles->crear();
    if($error){
        header("Location: crearnivel.php?error=$error");
    }else{
        header("Location: listarniveles.php");
    }
}
if(isset($_POST["modificar"])){
    $niveles->modificar();
    if($error){
        header("Location: modificarnivel.php?error=$error");
    }else{
        header("Location: listarniveles.php");
    }
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