<?php
require_once 'conexion.php';
class persona
{
    public $conexion;

    public function __construct()
    {
        $this->conexion = new conexion();
    }
    public function insertar($datos,$tipo)
    {
        $stmt = $this->conexion->conectar()->prepare
        
        ("INSERT INTO persona 
        (nombre,tipo_documento,no_documento,direccion,telefono,email,tipo)
        values(:nombre,:tipo_documento,:no_documenton,:direccion,:telefono,:email,:tipo) ");

        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':tipo_documento', $datos['tipo_documento'], PDO::PARAM_STR);
        $stmt->bindParam(':no_documento', $datos['no_documento'], PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $datos['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $datos['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function eliminar($id)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("DELETE FROM persona where idpersona=:idpersona");
        $stmt->bindParam(':idpersona', $id, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function actualizar($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("UPDATE persona SET direccion=:direccion,telefono=:telefono,email=:email WHERE idpersona=:idpersona ");
        $stmt->bindParam(':direccion', $datos['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $datos['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
        
        $stmt->execute();
        $stmt->closeCursor();
    }
    public function validacion($datos)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM persona where idpersona=:idpersona");
        $stmt->bindParam(':idpersona', $datos, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }

    // debe venir por parametro si consulta "Proveedores" o "Talleres".  $tipo
    public function listar_personas($tipo)
    {
        $stmt = $this->conexion->conectar()->prepare
        ("SELECT * FROM persona WHERE tipo=$tipo");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->closeCursor();
    }
}