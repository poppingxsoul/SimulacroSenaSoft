<?php
require_once 'conexion.php';
class usuario
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }

    public function insertar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("INSERT INTO tabla ()values(:dato,:dato,:dato,:dato) ");
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($id)
    {
        $stmt = $this->conexion->conectar()->prepare("DELETE FROM tabla where id=:id ");
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("UPDATE tabla SET dato=:dato,dato=:dato,dato=:dato,dato=:dato WHERE id=:id ");
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function validacion($datos)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM usuarios where numero=:iden");
        $stmt->bindParam(':dato', $datos, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
    public function listar_usuarios($dato)
    {
        $stmt = $this->conexion->conectar()->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}
