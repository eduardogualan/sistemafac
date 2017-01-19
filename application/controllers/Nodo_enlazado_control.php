<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Nodo_enlazado_control extends CI_Controller {

    private $nodo_enlazado = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Nodo_enlazado");
        $this->utilidades->EstaLogeado();
    }

    public function getNodoEnlazado() {
        if ($this->nodo_enlazado == null) {
            $this->nodo_enlazado = new Nodo_enlazado();
        }
        return $this->nodo_enlazado;
    }

    public function nuevaInstancia() {
        $this->nodo_enlazado = null;
    }

    public function fijarInstancia($nodo_enlazado) {
        $this->nodo_enlazado = $nodo_enlazado;
    }

    public function listar_NodoEnlazado() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Nodos - Listar";
        $data["nodo"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista"] = Nodo_enlazado::orderBy("nombre_nodoEnlazado")->get();
        $this->ci_smarty->vista('backend/nodo_enlazado/listar', $data);
    }

    public function nuevo() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Nodos - Registrar";
        $data["nodo"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/nodo_enlazado/registrar', $data);
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
        $nombre_Nodo = "";
        $lista = Nodo_enlazado::where("nombre_nodoEnlazado", $nombre)->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $nombre_Nodo = $registro->nombre_nodoEnlazado;
            }
            return $nombre_Nodo;
        }
    }

    public function RegistrarNodoEnlazado() {
        if ($this->validar() == TRUE) {
            $nombre = $_POST["nombre"];
            if ($this->ConsultarNombreDisponible($nombre) == NULL) {
                $this->cargarObjeto();
                if ($this->getNodoEnlazado()->save() == true) {
                    $this->nuevaInstancia();
                    $this->session->set_flashdata('message', 'Su registro ha sido guardado');
                    redirect('nodo/listar');
                } else {
                    $this->session->set_flashdata('message', 'Error al guardar');
                    redirect('nodo/registrar');
                }
            } else {
                $this->session->set_flashdata('message', 'Ya existe un registro con este nombre');
                redirect('nodo/registrar');
            }
        } else {
            redirect('nodo/registrar');
        }
    }

    private function cargarObjeto() {
        $this->getNodoEnlazado()->nombre_nodoEnlazado = $this->security->xss_clean($_POST["nombre"]);
    }

    private function validar() {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

    public function verEditar($id) {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $this->fijarInstancia($this->getNodoEnlazado()->find($id));
        $data["titulo"] = "Nodos - Modificar";
        $data["nodo"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["obj"] = $this->getNodoEnlazado();
        $this->ci_smarty->vista('backend/nodo_enlazado/modificar', $data);
    }

    public function modificar($id) {
        if ($this->validar() == TRUE) {
            $this->fijarInstancia($this->getNodoEnlazado()->find($id));
            $this->cargarObjeto();
            if ($this->getNodoEnlazado()->save() == true) {
                $this->nuevaInstancia();
                $this->session->set_flashdata('message', 'Se ha modificado correctamente');
                redirect('nodo/listar');
            } else {
                $this->session->set_flashdata('message', 'Error al modificar');
                redirect('nodo/modificar/' . $id);
            }
        } else {
            redirect('nodo/modificar/' . $id);
        }
    }

}
