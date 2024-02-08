<?php
//Controlador que hace la validación y llama al modelo
require_once "consultasniveles.php";
class Niveles{
    private $consultas;
    function __construct(){
       $this->consultas= new ConsultasNiveles();
    }
    public function crear(){
        $nombrepais=$_POST["nombre"];
        if($_FILES["imagen"]['error'] == UPLOAD_ERR_OK){
            try{
                $imagen=file_get_contents($_FILES["imagen"]["tmp_name"]);
                $this->consultas->crear($nombrepais,$imagen);
            }
            catch(Exception $e){
                if($e->getCode()==1406){
                    return "Nombre demasiado largo";
                }else{
                    return "Error al añadir";
                }
            }
        }else{
            return "Imagen Vacía";
        }
    }
    public function modificar(){
        $nombrepais=$_POST["nombre"];

        $id=$_POST["id"];
        
        if($_FILES["imagen"]['error'] == UPLOAD_ERR_OK){
            $imagen=file_get_contents($_FILES["imagen"]["tmp_name"]);
        }else{
            $imagen=null;
        }
        try{
            $this->consultas->modificar($nombrepais,$imagen,$id);
        }
        catch(Exception $e){
            if($e->getCode()==1406){
                return "Nombre demasiado largo";
            }else{
                return "Error al añadir";
            }
        }
    }
    public function listar(){
        return $this->consultas->listar();
    }
    public function borrar($id){
       $this->consultas->borrar($id);
    }
}