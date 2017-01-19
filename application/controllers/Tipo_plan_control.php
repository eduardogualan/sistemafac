<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo_plan_control extends CI_Controller {

    private $tipoPlan = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Tipo_plan");
        $this->utilidades->EstaLogeado();
    }

    public function getTipoPlan() {
        if ($this->tipoPlan == null) {
            $this->tipoPlan = new Tipo_plan();
        }
        return $this->tipoPlan;
    }

    public function nuevaInstancia() {
        $this->tipoPlan = null;
    }

    public function fijarInstancia($tipoPlan) {
        $this->tipoPlan = $tipoPlan;
    }

    public function listar_tipoPlan() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Tipo de Planes - Listar";
        $data["tPlan"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista"] = Tipo_plan::orderBy('nombre')->get();
        $this->ci_smarty->vista('backend/tipos_planes/listar', $data);
    }

    public function nuevo() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Tipo de Planes - Registrar";
        $data["tPlan"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/tipos_planes/registrar', $data);
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

//ontener registro de la base de datos
    private function ConsultarNombreDisponible($nombre) {
        $nombre_tipoP = "";
        $lista = Tipo_plan::where("nombre", $nombre)->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $nombre_tipoP = $registro->nombre;
            }
            return $nombre_tipoP;
        }
    }

    public function RegistrarTipoPlanes() {
        if ($this->validar() == TRUE) {
            $nombre = $_POST["nombre"];
            if ($this->ConsultarNombreDisponible($nombre) == NULL) {
                $this->cargarObjeto();
                if ($this->getTipoPlan()->save() == true) {
                    $this->nuevaInstancia();
                    $this->session->set_flashdata('message', 'Su registro ha sido guardado');
                    redirect('tipos-de-planes/listar');
                } else {

                    redirect('tipos-de-planes/registrar');
                }
            } else {
                $this->session->set_flashdata('message', 'Ya existe un registro con este nombre');
                redirect('tipos-de-planes/registrar');
            }
        } else {
            redirect('tipos-de-planes/registrar');
        }
    }

    private function cargarObjeto() {
        $this->getTipoPlan()->nombre = $this->security->xss_clean($_POST["nombre"]);
    }

    private function validar() {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

    public function verEditar($id) {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $this->fijarInstancia($this->getTipoPlan()->find($id));
        $data["titulo"] = "Tipo de Planes - Modificar";
        $data["tPlan"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["obj"] = $this->getTipoPlan();
        $this->ci_smarty->vista('backend/tipos_planes/modificar', $data);
    }

    public function modificar($id) {
        if ($this->validar() == TRUE) {
            $this->fijarInstancia($this->getTipoPlan()->find($id));
            $this->cargarObjeto();
            if ($this->getTipoPlan()->save() == true) {
                $this->nuevaInstancia();
                $this->session->set_flashdata('message', 'Se ha modificado correctamente');
                redirect('tipos-de-planes/listar');
            } else {
                redirect('tipos-de-planes/modificar/' . $id);
            }
        } else {
            redirect('tipos-de-planes/modificar/' . $id);
        }
    }

    public function CargarTipoplan() {
        $tipoPlan = $this->getTipoPlan()->get();
        echo "<option value = ''";
        echo ">Seleccione--------></option>";
        foreach ($tipoPlan as $item) {
            $id = $item->id_tipoPlan;
            $nombre = $item->nombre;
            echo "<option value = '$id'";
            echo ">$nombre</option>";
        }
    }

}
