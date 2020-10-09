<?php
require_once 'conexion.php';
class categorias
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function insertar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        
        ("INSERT INTO categorias (nombre, descripcion, condicion)
        values(:nombre,:descripcion,:condicion) ");

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(':condicion', 1 , PDO::PARAM_INT);
        ("INSERT INTO categorias 
        (idcategoria,nombre,descripcion,condicion)
        values(:idcategoria,:nombre,:descripcion,:condicion) ");

        $stmt->bindParam(':idcategoria', $datos, PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos, PDO::PARAM_STR);
        $stmt->bindParam(':condicion', $datos, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($id)
    {
        $stmt = $this->conexion->conectar()->prepare("DELETE FROM categorias where idcategoria=:idcategoria ");
        $stmt->bindParam(':idcategoria', $id, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("UPDATE categorias SET nombre=:nombre,descripcion=:descripcion WHERE idcategoria=:idcategoria ");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function validacion($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM categorias where idcategoria=:idcategoria");
        $stmt->bindParam(':idcategoria', $datos['idcategoria'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function listar_categorias()
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM categorias WHERE condicion=1");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
