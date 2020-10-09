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
    }
    public function index()
    {
        require_once 'view/index.php';
    }
    public function registro()
    {
        require_once 'view/register.php';
    }
    public function routes()
    {
        if (isset($_GET['ruta'])) {
            $this->route = $_GET['ruta'];

            switch ($this->route) {
                case 'registrar':
                    require_once 'view/register.php';
                    break;
                case 'ingresar':
                    require_once 'view/index.php';
                    break;
                default:
                    # code...
                    break;
            }
        }
    }
    
}
