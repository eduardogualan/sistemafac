<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Router_control extends CI_Controller {

    private $objrouter = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Router");
        $this->load->model("Contrato");
        $this->load->model("Datos_tecnicos");
        $this->utilidades->EstaLogeado();
    }

    public function getRouter() {
        if ($this->objrouter == NULL) {
            $this->objrouter = new Router();
        }
        return $this->objrouter;
    }

    public function fijarInstancia($router) {
        $this->objrouter = $router;
    }

    public function NuevaInstancia() {
        $this->objrouter = null;
    }

    public function ListarRouterXCliente() {
        $this->utilidades->EstaPermitidoTresRoles('Administrador', 'Cliente', 'Empleado', $this->utilidades->rol());
        $data["titulo"] = "Router - Listar";
        $data["lista"] = $this->ObtenerRouterXcedula($this->utilidades->Usuario('usuario'));
        $data["routerOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/router/listar', $data);
    }

    public function VerEditar($id) {
        $this->utilidades->EstaPermitidoTresRoles('Administrador', 'Cliente', 'Empleado', $this->utilidades->rol());
        $this->fijarInstancia($this->getRouter()->find($id));
        $data["titulo"] = "Router - Modificar";
        $data["obj"] = $this->getRouter();
        $data["routerOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/router/modificar', $data);
    }

    public function modificar($id) {
        if ($this->validar() == TRUE) {
            $this->fijarInstancia($this->getRouter()->find($id));
            $this->cargarObjeto();
            if ($this->getRouter()->save() == true) {
                $this->NuevaInstancia();
                $this->session->set_flashdata('message', 'Se ha modificado correctamente');
                redirect('router/listar');
            } else {
                $this->session->set_flashdata('message', 'Error al modificar');
                redirect('router/modificar/' . $id);
            }
        } else {
            redirect('router/modificar/' . $id);
        }
    }

    private function ObtenerRouterXcedula($cedula_ruc) {
        $router = Contrato::join("datos_tecnicos", "contrato.id_datosTecnicos", "=", "datos_tecnicos.id_datosTecnicos")
                ->leftJoin('persona', function($join) {
                    $join->on('contrato.id_cliente', '=', 'persona.id_persona');
                })
                ->leftJoin('router', function($join) {
                    $join->on('datos_tecnicos.id_router', '=', 'router.id_router');
                })
                ->leftJoin('marca_router', function($join) {
                    $join->on('router.id_marcaRouter', '=', 'marca_router.id_marcaRouter');
                })
                 ->leftJoin('direccion', function($join) {
                    $join->on('contrato.id_direccion', '=', 'direccion.id_direccion');
                })
                ->leftJoin('parroquias', function($join) {
                    $join->on('direccion.id_parroquia', '=', 'parroquias.id_parroquia');
                })
                ->leftJoin('canton', function($join) {
                    $join->on('parroquias.id_canton', '=', 'canton.id_canton');
                })
                ->where('persona.cedula_ruc', '=', $cedula_ruc)
                ->get();
        return $router;
    }

    private function cargarObjeto() {
        $this->getRouter()->nombre_wifi = $this->security->xss_clean($_POST["nombrewifi"]);
        $this->getRouter()->clave_wifi = $this->security->xss_clean($_POST["contraseniawifi"]);
        $this->getRouter()->usuario_router = $this->security->xss_clean($_POST["usuariorouter"]);
        $this->getRouter()->clave_router = $this->security->xss_clean($_POST["contraseniarouter"]);
    }

    private function validar() {
        $this->form_validation->set_rules('contraseniawifi', 'contraseniawifi', 'required|trim');
        $this->form_validation->set_rules('contraseniarouter', 'contraseniarouter', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

}
