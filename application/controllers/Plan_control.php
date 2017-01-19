<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Plan_control extends CI_Controller {

    private $plan = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Plan");
        $this->load->model("Tipo_plan");
        $this->utilidades->EstaLogeado();
    }

    public function getPlan() {
        if ($this->plan == null) {
            $this->plan = new Plan();
        }
        return $this->plan;
    }

    public function nuevaInstancia() {
        $this->plan = null;
    }

    public function fijarInstancia($plan) {
        $this->plan = $plan;
    }

    public function listar_Plan() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Planes - Listar";
        $data["plan"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista"] = Plan::with('tipo_plan')->get();
        $this->ci_smarty->vista('backend/planes/listar', $data);
    }

    public function nuevo() {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Planes - Registrar";
        $data["plan"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista_tipoPlan"] = Tipo_plan::all();
        $this->ci_smarty->vista('backend/planes/registrar', $data);
    }

    private function cargarObjeto() {
        $this->getPlan()->valor_mensual = $this->security->xss_clean($_POST["valor_mensual"]);
        $this->getPlan()->velocidad = $this->security->xss_clean($_POST["velocidad"]);
        $this->getPlan()->descripcion = $this->security->xss_clean($_POST["desc"]);
        //$this->getPlan()->id_tipoPlan = $this->security->xss_clean($_POST["tipoPlan"]);
    }

    public function RegistrarPlanes() {
        if ($this->validar() == TRUE) {
            $this->cargarObjeto();
            $this->cargarForeign();
            if ($this->getPlan()->save() == true) {
                $this->nuevaInstancia();
                $this->session->set_flashdata('message', 'Su registro ha sido guardado');
                redirect('planes/listar');
            } else {
                $this->session->set_flashdata('message', 'Error al guardar');
                redirect('planes/registrar');
            }
        } else {
            redirect('planes/registrar');
        }
    }

    private function cargarForeign() {
        $tPlan = Tipo_plan::find($_POST['tipoPlan']);
        $this->getPlan()->tipo_plan()->associate($tPlan);
    }

    private function validar() {
        $this->form_validation->set_rules('tipoPlan', 'tipoPlan', 'required|trim');
        $this->form_validation->set_rules('velocidad', 'velocidad', 'required|trim');
        $this->form_validation->set_rules('desc', 'Descripcion', 'required|trim');
        $this->form_validation->set_rules('valor_mensual', 'Valor', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

    public function verEditar($id) {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        //$this->fijarInstancia($this->getPlan()->find($id));
        $data["titulo"] = "Planes - Modificar";
        $data["plan"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista_tipoPlan"] = Tipo_plan::orderBy('nombre')->get();
        $data["lista"] = $this->ListarPlanXid($id);
        $this->ci_smarty->vista('backend/planes/modificar', $data);
    }

    public function modificar($id) {
        if ($this->validar() == TRUE) {
            $this->fijarInstancia($this->getPlan()->find($id));
            $this->cargarObjeto();
            $this->cargarForeign();
            if ($this->getPlan()->save() == true) {
                $this->nuevaInstancia();
                $this->session->set_flashdata('message', 'Se ha modificado correctamente');
                redirect('planes/listar');
            } else {
                $this->session->set_flashdata('message', 'Error al modificar');
                redirect('planes/modificar/' . $id);
            }
        } else {
            redirect('planes/modificar/' . $id);
        }
    }

    public function cargarPlan() {
        $id_TipoPlan = $this->input->post("texto");
        if (isset($id_TipoPlan)) {
            $Plan = Plan::where('id_tipoPlan', '=', $id_TipoPlan)->get();
            echo "<option value = ''";
            echo ">Seleccione--------></option>";
            foreach ($Plan as $item) {
                $id = $item->id_plan;
                $velocidad = $item->velocidad . " " . $item->descripcion;
                echo "<option value = '$id'";
                echo ">$velocidad</option>";
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    public function cargarCostoPlan() {
        $id_plan = $this->input->post("texto");
        if (isset($id_plan)) {
            $Plan = Plan::where('id_plan', '=', $id_plan)->get();
            //echo "<option value = ''";
            //echo ">Seleccione--------></option>";
            foreach ($Plan as $item) {
                $id = $item->id_plan;
                $valorMensual = $item->valor_mensual;
//                echo "<option value = '$id'";
//                // echo "value = '$id'";
//                echo ">$valorMensual</option>";
                echo $valorMensual;
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }
    
    public function ListarPlanXid($id) {
        $plan = Plan::join("tipo_plan", "plan.id_tipoPlan", "=", "tipo_plan.id_tipoPlan")
                ->where('plan.id_plan', '=', $id)
                //->orderBy('detalle_mensualidad.id_detalleMensualidad', 'desc')
                ->get();
        return $plan;
        
    }

}
