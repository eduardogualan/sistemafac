<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_control extends CI_Controller {

    private $persona = null;
    private $cuenta = null;

    public function __construct() {
        parent::__construct();
        $this->load->model('Persona');
        $this->load->model('Rol');
        $this->load->model('Cuenta');
    }

    public function getPersona() {
        if ($this->persona == NULL) {
            $this->persona = new Persona();
        }
        return $this->persona;
    }

    public function getCuenta() {
        if ($this->cuenta == NULL) {
            $this->cuenta = new Cuenta();
        }
        return $this->cuenta;
    }

    public function nuevaInstancia() {
        $this->persona = null;
    }

    public function nuevaInstanciaCuenta() {
        $this->cuenta = null;
    }

    public function fijarInstancia($persona) {
        $this->persona = $persona;
    }

    public function listar_Clientes() {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Clientes - Listar";
        $data["cliente"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista"] = Cuenta::with('persona')->get();
        $this->ci_smarty->vista('backend/cliente/listar', $data);
    }

    public function nuevo() {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitidoDosRoles('Empleado', 'Administrador', $this->utilidades->rol());
        $data["titulo"] = "Clientes - Registrar";
        $data["cliente"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/cliente/registrar', $data);
    }

    public function MostrarCedulaRucDisponible() {
        $cedula_ruc = $this->input->post("texto");
        if (isset($cedula_ruc)) {
            $registro = $this->ConsultarCedulaRucDisponible($cedula_ruc);
            //echo $registro;
            if ($cedula_ruc == $registro) {
                echo '1';
            } else {
                echo '2';
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    //obtener registro de la base de datos
    private function ConsultarCedulaRucDisponible($cedula) {
        $cedula_ruc = "";
        $lista = Persona::where("cedula_ruc", $cedula)->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $cedula_ruc = $registro->cedula_ruc;
            }
            return $cedula_ruc;
        }
    }

    //obtener id de persona para poder relacinar con cuenta
    private function ObtenerIdPersona($cedula) {
        $id_persona = "";
        $lista = Persona::where("cedula_ruc", $cedula)->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $id_persona = $registro->id_persona;
            }
            return $id_persona;
        }
    }

    private function cargarObjeto() {
        $this->getPersona()->cedula_ruc = $this->security->xss_clean($_POST["cedula_ruc"]);
        $this->getPersona()->apellidos = $this->security->xss_clean($_POST["apellidos"]);
        $this->getPersona()->nombres = $this->security->xss_clean($_POST["nombres"]);
        $this->getPersona()->telefono = $this->security->xss_clean($_POST["telefono"]);
        $this->getPersona()->celular = $this->security->xss_clean($_POST["celular"]);
        $this->getPersona()->email = $this->security->xss_clean($_POST["email"]);
    }

    private function cargarObjetoCuenta() {
        $this->getCuenta()->usuario = $this->security->xss_clean($_POST["cedula_ruc"]);
        $this->getCuenta()->contrasenia = $this->security->xss_clean($this->bcrypt->hash_password($_POST["cedula_ruc"]));
    }

    private function cargarForeign() {
        $id_rol = "";
        $lista = Rol::where("nombre", "Cliente")->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $id_rol = $registro->id_rol;
            }
        }
        $rol = Rol::find($id_rol);
        $this->getPersona()->rol()->associate($rol);
    }

    private function validar() {
        $this->form_validation->set_rules('cedula_ruc', 'cedula_ruc', 'required|trim');
        $this->form_validation->set_rules('nombres', 'nombres', 'required|trim');
        $this->form_validation->set_rules('apellidos', 'apellidos', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

    public function RegistrarClienteCuenta() {
        $this->utilidades->EstaLogeado();
        if ($this->validar() == TRUE) {
            $cedula_ruc = $_POST["cedula_ruc"];
            if ($this->ConsultarCedulaRucDisponible($cedula_ruc) == NULL) {
                $this->cargarObjeto();
                $this->cargarForeign();
                if ($this->getPersona()->save() == true) {
                    $this->nuevaInstancia();
                    $id_persona = $this->ObtenerIdPersona($cedula_ruc);
                    $this->cargarObjetoCuenta();
                    $persona = Persona::find($id_persona);
                    $this->getCuenta()->persona()->associate($persona);
                    $this->getCuenta()->save();
                    $this->nuevaInstanciaCuenta();
                    $this->session->set_flashdata('message', 'Su registro ha sido guardado');
                    redirect('contratar-plan/registrar');
                } else {
                    $this->session->set_flashdata('message', 'Error al guardar');
                    redirect('clientes/registrar');
                }
            } else {
                $this->session->set_flashdata('message', 'Este cliente ya esta registrado');
                redirect('clientes/registrar');
            }
        } else {
            redirect('clientes/registrar');
        }
    }

    public function verEditar($id) {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $this->fijarInstancia($this->getPersona()->find($id));
        $data["titulo"] = "Clientes - Modificar";
        $data["cliente"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["obj"] = $this->getPersona();
        $this->ci_smarty->vista('backend/cliente/modificar', $data);
    }

    public function modificar($id) {
        $this->utilidades->EstaLogeado();
        if ($this->validar() == TRUE) {
            $this->fijarInstancia($this->getPersona()->find($id));
            $this->cargarObjeto();
            $this->cargarForeign();
            if ($this->getPersona()->save() == true) {
                $this->nuevaInstancia();
                $this->session->set_flashdata('message', 'Se ha modificado correctamente');
                redirect('clientes/listar');
            } else {
                $this->session->set_flashdata('message', 'Error al modificar');
                redirect('clientes/modificar/' . $id);
            }
        } else {
            redirect('clientes/modificar/' . $id);
        }
    }

}
