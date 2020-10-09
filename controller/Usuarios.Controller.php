<?php
require_once 'modelo/usuario.php';
class UsuariosController
{

    public $model;
    public $session;
    public $datos;
    public $route;

    public function __construct()
    {
        $this->model = new usuario;
        $this->session = session_start();
        $this->datos=array();
    }
    public function index()
    {
        require_once 'view/index.php';
    }
    public function registro()
    {
        require_once 'view/register.php';
    }

    public function registrar(){
        $this->datos['nombres']=$_POST['nombres'];
        $this->datos['email']=$_POST['email'];
        $this->datos['identificacion']=$_POST['identificacion'];
        $this->datos['pass']=$_POST['pass'];
        
        $this->model->insertar($this->datos);
        
    }
}
