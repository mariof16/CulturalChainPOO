<?php
//Lo que seria el modelo
require_once "../conexion/conexion.php";
class ModeloNiveles {
    private $conexion;
    function __construct(){
        $claseconexion = new Conexion();
        $this->conexion= $claseconexion->conexion;
    }
    public function crear($nombrepais,$imagen){
        $imagen=$this->conexion->real_escape_string($imagen);
        
        $query = "INSERT INTO Nivel (nombrepais, imagen) VALUES ('$nombrepais','$imagen')";

        $this->conexion->query($query);
    }
    public function modificar($nombrepais,$imagen,$id){
        
        $query="UPDATE Nivel SET nombrepais = '$nombrepais'";

        if($imagen != null){
            $imagen=$this->conexion->real_escape_string($imagen);
            $query.=",imagen = '$imagen'";
        }
        $query.="WHERE id = $id";

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