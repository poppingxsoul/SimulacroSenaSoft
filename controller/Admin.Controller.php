<?php
require_once 'modelo/usuario.php';
class AdminController
{
    public $model;
    public $session;
    public $datos;

    public function __construct()
    {
        $this->model = new usuario;
        $this->session = session_start();
        $this->datos = array();
    }





?>