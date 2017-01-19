<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Antena_control extends CI_Controller {

    private $antena = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Antena");
        $this->utilidades->EstaLogeado();
    }

    public function getAntena() {
        if ($this->antena == null) {
            $this->antena = new Antena();
        }
        return $this->antena;
    }

    public function nuevaInstancia() {
        $this->antena = null;
    }

    public function fijarInstancia($antena) {
        $this->antena = $antena;
    }

    public function listar_Antena() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Antena - Listar";
        $data["antena"] = 'active';
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista"] = Antena::orderBy("nombre_antena")->get();
        $this->ci_smarty->vista('backend/antena/listar', $data);
    }

    public function nuevo() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Antena - Registrar";
        $data["antena"] = 'active';
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/antena/registrar', $data);
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
        $nombre_antena = "";
        $lista = Antena::where("nombre_antena", $nombre)->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $nombre_antena = $registro->nombre_antena;
            }
            return $nombre_antena;
        }
    }

    public function RegistrarAntena() {
        if ($this->validar() == TRUE) {
            $nombre = $_POST["nombre"];
            if ($this->ConsultarNombreDisponible($nombre) == NULL) {
                $this->cargarObjeto();
                if ($this->getAntena()->save() == true) {
                    $this->nuevaInstancia();
                    $this->session->set_flashdata('message', 'Su registro ha sido guardado');
                    redirect('antena/listar');
                } else {
                    $this->session->set_flashdata('message', 'Error al guardar');
                    redirect('antena/registrar');
                }
            } else {
                $this->session->set_flashdata('message', 'Ya existe un registro con este nombre');
                redirect('antena/registrar');
            }
        } else {
            redirect('antena/registrar');
        }
    }

    private function cargarObjeto() {
        $this->getAntena()->nombre_antena = $this->security->xss_clean($_POST["nombre"]);
    }

    private function validar() {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

    public function verEditar($id) {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $this->fijarInstancia($this->getAntena()->find($id));
        $data["titulo"] = "Antena - Modificar";
        $data["antena"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["obj"] = $this->getAntena();
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/antena/modificar', $data);
    }

    public function modificar($id) {
        if ($this->validar() == TRUE) {
            $this->fijarInstancia($this->getAntena()->find($id));
            $this->cargarObjeto();
            if ($this->getAntena()->save() == true) {
                $this->nuevaInstancia();
                $this->session->set_flashdata('message', 'Se ha modificado correctamente');
                redirect('antena/listar');
            } else {
                $this->session->set_flashdata('message', 'Error al modificar');
                redirect('antena/modificar/' . $id);
            }
        } else {
            redirect('antena/modificar/' . $id);
        }
    }

}
