<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rol_control extends CI_Controller {

    private $rol = null;

    public function __construct() {
        parent::__construct();
        $this->load->model('Rol');
        $this->utilidades->EstaLogeado();
    }

    public function getRol() {
        if ($this->rol == NULL) {
            $this->rol = new Rol();
        }
        return $this->rol;
    }

    public function nuevaInstancia() {
        $this->rol = null;
    }

    public function fijarInstancia($rol) {
        $this->rol = $rol;
    }
   
}
