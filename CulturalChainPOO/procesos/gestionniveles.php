<?php
require "niveles.php";
class GestionNiveles {
    private $niveles;
    function __construct(){
        $this->niveles= new Niveles;
    }
    function modificarnivel(){
        if(isset($_POST["modificar"])){
            $error=$this->niveles->modificar();
            if(!$error){
                header("Location: listarniveles.php");
            }
        }
    }
    function crearnivel(){
        if(isset($_POST["crear"])){
            $error=$this->niveles->crear();
            if(!$error){
                header("Location: listarniveles.php");
            }
        }
    }
    function listar(){
        return $this->niveles->listar();
    }
}