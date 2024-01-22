<?php
require_once "../conexion/conexion.php";
class Niveles{
    private $conexion;
    public $mensajeerror;
    function __construct(){
        $claseconexion = new Conexion();
        $this->conexion= $claseconexion->conexion;
    }
    public function crear(){
        $nombrepais=$_POST["nombre"];

        $imagen=file_get_contents($_FILES["imagen"]["tmp_name"]);
        $imagen=$this->conexion->real_escape_string($imagen);//Recordar poner real escape string (evita caracteres especiales)

        $query = "INSERT INTO Nivel (nombrepais, imagen) VALUES ('$nombrepais','$imagen')";

        $this->conexion->query($query);
    }
    public function modificar(){
        $nombrepais=$_POST["nombre"];
        $id=$_POST["id"];

        if($_FILES['imagen']['tmp_name'] == null){
            $query = "UPDATE Nivel SET nombrepais = '$nombrepais' WHERE id = '$id'";
        }else
        {
            $imagen=file_get_contents($_FILES["imagen"]["tmp_name"]);
            $imagen = $this->conexion->real_escape_string($imagen);
            $query = "UPDATE Nivel SET nombrepais = '$nombrepais',imagen = '$imagen' WHERE id = '$id'";
        }

        $this->conexion->query($query);
    }
    public function listar(){
        $query = 'SELECT * FROM Nivel';
        $resultado = $this->conexion->query($query);
        return $resultado;
    }
    public function borrar($id){
        $query = "DELETE FROM Nivel WHERE id=$id";
        $this->conexion->query($query);
    }
}