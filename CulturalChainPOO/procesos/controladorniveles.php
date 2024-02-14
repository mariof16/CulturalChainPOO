<?php
//Controlador de niveles
require_once "modeloniveles.php";
class ControladorNiveles {
    public $modelo;
    private $error;
    public $vista;
    function __construct(){
        $this->modelo= new ModeloNiveles();
    }
    function modificarnivel(){
        $this->vista='vistamodificarnivel';
        if(isset($_POST["modificar"])){
           
            $nombrepais=$_POST["nombre"];
            $id=$_POST["id"];
            
            if($_FILES["imagen"]['error'] == UPLOAD_ERR_OK){
                $imagen=file_get_contents($_FILES["imagen"]["tmp_name"]);
            }else{
                $imagen=null;
            }
            try{
                $this->modelo->modificar($nombrepais,$imagen,$id);
            }
            catch(Exception $e){
                if($e->getCode()==1406){
                    $this->error = "Nombre demasiado largo";
                }else{
                    $this->error = "Error al añadir";
                }
            }

            if(!$this->error){
                header("Location: index.php?accion=listar&controlador=controladorniveles");
            }
        }
    }
    function crearnivel(){
        $this->vista='vistacrearnivel';
        if(isset($_POST["crear"])){
           
            $nombrepais=$_POST["nombre"];
            if($_FILES["imagen"]['error'] == UPLOAD_ERR_OK){
                try{
                    $imagen=file_get_contents($_FILES["imagen"]["tmp_name"]);
                    $this->modelo->crear($nombrepais,$imagen);
                }
                catch(Exception $e){
                    if($e->getCode()==1406){
                        $this->error = "Nombre demasiado largo";
                    }else{
                        $this->error = "Error al añadir";
                    }
                }
            }else{
                $this->error = "Imagen Vacía";
            }

            if(!$this->error){
                header("Location: index.php?accion=listar&controlador=controladorniveles");
            }
        }
    }
    function listar(){
        $this->vista='vistalistarniveles';
        return $this->modelo->listar();
    }
    function menu(){
        $this->vista='vistaniveles';
    }
    function borrar(){
        $this->vista='vistaborrarnivel';
        if(isset($_POST["si"])){
            $this->modelo->borrar($_POST["id"]);
            header("Location: index.php?accion=listar&controlador=controladorniveles");
        }
        if(isset($_POST["no"])){
            header("Location: index.php?accion=listar&controlador=controladorniveles");
        }
    }
}