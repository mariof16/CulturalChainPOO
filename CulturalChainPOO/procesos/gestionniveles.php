<?php
//Controlador de niveles
require "niveles.php";
class GestionNiveles {
    private $niveles;
    public $error;
    function __construct(){
        $this->niveles= new Niveles;
    }
    function modificarnivel(){
        if(isset($_POST["modificar"])){
            $this->error=$this->niveles->modificar();
            if(!$this->error){
                header("Location: listarniveles.php");
            }
        }
    }
    function crearnivel(){
        if(isset($_POST["crear"])){
            $this->error=$this->niveles->crear();
            if(!$this->error){
                header("Location: listarniveles.php");
            }
        }
    }
    function listar(){
        return $this->niveles->listar();
    }
    function borrar(){
        if(isset($_POST["si"])){
            $this->niveles->borrar($_POST["id"]);
            header("Location: listarniveles.php");
        }
        if(isset($_POST["no"])){
            header("Location: listarniveles.php");
        }
    }
}