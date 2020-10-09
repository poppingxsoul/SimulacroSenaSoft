<?php
require_once 'modelo/persona.php';
class AdminController
{
    public $model;
    public $session;
    public $datos;
    public $tipo;

    public function __construct()
    {
        $this->model = new persona;
        $this->session = session_start();
        $this->datos = array();
    }
    public function index()
    {
        require_once 'view/admin/usuarios.php';
    }
    public function talleres(){
        require_once'view/admin/talleres.php';
    }
    public function crear_proveedor_vista(){
        require_once'view/admin/crear-proveedor.php';
    }
    public function proveedores(){
        require_once'view/admin/proveedores.php';
    }
    public function guardar()
    {
        if (isset($_POST) & !empty($_POST)) {
            $this->datos['nombre'] = $_POST['nombre'];
            $this->datos['tipo_documento'] = $_POST['tipo_documento'];
            $this->datos['no_documento'] = $_POST['no_documento'];
            $this->datos['direccion'] = $_POST['direccion'];
            $this->datos['telefono'] = $_POST['telefono'];
            $this->datos['email'] = $_POST['email'];
            $this->datos['tipo'] = $_POST['tipo'];
            
            $this->model->insertar($this->datos);
            
            if ($this->tipo = 'proveedores') {
                require_once 'view/admin/proveedores.php';
            } elseif ($this->tipo = 'talleres') {
                require_once 'view/admin/talleres.php';
            }
        }
    }
    public function eliminar()
    {
        $id = $_POST['id'];
        $this->model->eliminar($id);
        if ($this->tipo = 'proveedores') {
            require_once 'view/admin/proveedores.php';
        } elseif ($this->tipo = 'talleres') {
            require_once 'view/admin/talleres.php';
        }
    }
    public function actualizar()
    {
        $this->datos['id'] = $_POST['id'];
        $this->datos['direccion'] = $_POST['direccion'];
        $this->datos['telefono'] = $_POST['telefono'];
        $this->datos['email'] = $_POST['email'];
        $this->datos['tipo'] = $_POST['tipo'];
        $this->tipo = $_POST['tipo'];

        $this->model->actualizar($this->datos);
        if ($this->tipo = 'proveedores') {
            require_once 'view/admin/proveedores.php';
        } elseif ($this->tipo = 'talleres') {
            require_once 'view/admin/talleres.php';
        }
    }
}
