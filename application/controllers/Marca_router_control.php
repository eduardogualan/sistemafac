<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Marca_router_control extends CI_Controller {

    private $marca_router = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Marca_router");
        $this->utilidades->EstaLogeado();
    }

    public function getMarca_router() {
        if ($this->marca_router == null) {
            $this->marca_router = new Marca_router();
        }
        return $this->marca_router;
    }

    public function nuevaInstancia() {
        $this->marca_router = null;
    }

    public function fijarInstancia($marca_router) {
        $this->marca_router = $marca_router;
    }

    public function listar_MarcaRouter() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Marcas de Router - Listar";
        $data["router"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista"] = Marca_router::orderBy('nombre_marcaRouter')->get();
        $this->ci_smarty->vista('backend/marca_router/listar', $data);
    }

    public function nuevo() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Marcas de Router - Registrar";
        $data["router"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/marca_router/registrar', $data);
    }

    // mostrar mensaje de nombre disponible 
    public function MostrarNombreDisponible() {
        $texto = $this->input->post("texto");
        if (isset($texto)) {
            $registro = $this->ConsultarNombreDisponible($texto);
            if ($texto == $registro) {
                echo '1';
            } else {
                echo '2';
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    //obtener registro de la base de datos
    private function ConsultarNombreDisponible($nombre) {
        $nombre_MarcaRouter = "";
        $lista = Marca_router::where("nombre_marcaRouter", $nombre)->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $nombre_MarcaRouter = $registro->nombre_marcaRouter;
            }
            return $nombre_MarcaRouter;
        }
    }

    public function RegistrarMarcasRouter() {
        if ($this->validar() == TRUE) {
            $nombre = $_POST["nombre"];
            if ($this->ConsultarNombreDisponible($nombre) == NULL) {
                $this->cargarObjeto();
                if ($this->getMarca_router()->save() == true) {
                    $this->nuevaInstancia();
                    $this->session->set_flashdata('message', 'Su registro ha sido guardado');
                    redirect('marcas-de-router/listar');
                } else {
                    $this->session->set_flashdata('message', 'Error al guardar');
                    redirect('marcas-de-router/registrar');
                }
            } else {
                $this->session->set_flashdata('message', 'Ya existe un registro con este nombre');
                redirect('marcas-de-router/registrar');
            }
        } else {
            redirect('marcas-de-router/registrar');
        }
    }

    private function cargarObjeto() {
        $this->getMarca_router()->nombre_marcaRouter = $this->security->xss_clean($_POST["nombre"]);
    }

    private function validar() {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

    public function verEditar($id) {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $this->fijarInstancia($this->getMarca_router()->find($id));
        $data["titulo"] = "Marcas de Router - Modificar";
        $data["router"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["obj"] = $this->getMarca_router();
        $this->ci_smarty->vista('backend/marca_router/modificar', $data);
    }

    public function modificar($id) {
        if ($this->validar() == TRUE) {
            $this->fijarInstancia($this->getMarca_router()->find($id));
            $this->cargarObjeto();
            if ($this->getMarca_router()->save() == true) {
                $this->nuevaInstancia();
                $this->session->set_flashdata('message', 'Se ha modificado correctamente');
                redirect('marcas-de-router/listar');
            } else {
                $this->session->set_flashdata('message', 'Error al modificar');
                redirect('marcas-de-router/modificar/' . $id);
            }
        } else {
            redirect('marcas-de-router/modificar/' . $id);
        }
    }

}
