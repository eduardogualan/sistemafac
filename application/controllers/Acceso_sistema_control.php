<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso_sistema_control extends CI_Controller {

    private $cuenta = null;
    private $persona = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Cuenta");
        $this->load->model("Persona");
        $this->load->model("Detalle_mensualidad");
        // $this->utilidades->EstaSesion();
    }

    private function getCuenta() {
        if ($this->cuenta == NULL) {
            $this->cuenta = new Cuenta();
        }
        return $this->cuenta;
    }

    private function getPersona() {
        if ($this->persona == NULL) {
            $this->persona = new Persona();
        }
        return $this->persona;
    }

    private function fifarInstancia($cuenta) {
        $this->cuenta = $cuenta;
    }

    public function index() {
        $lista = Cuenta::with("persona")->get();
        if ($lista->count() <= 0) {
            $data["titulo"] = "Indynet | Registrar Administrador";
            $this->ci_smarty->vista('login/registrarAdmin', $data);
        } else {
            $data["titulo"] = "Indynet | Login";
            $data["token"] = $this->auth->token();
            $this->ci_smarty->vista('login/login', $data);
            // mail("eduardogualan@gmail.com", "Prueba", "Mensaje de prueba de envio de correos correos");
        }
    }

    //metodo para crear el administrador del sistema x primera vez
    private function cargarObjeto() {
        $this->getPersona()->cedula_ruc = $this->security->xss_clean($_POST["cedula_ruc"]);
        $this->getPersona()->apellidos = $this->security->xss_clean($_POST["apellidos"]);
        $this->getPersona()->nombres = $this->security->xss_clean($_POST["nombres"]);
        $this->getPersona()->email = $this->security->xss_clean($_POST["email"]);
    }

    private function cargarObjetoCuenta() {
        $this->getCuenta()->usuario = $this->security->xss_clean($_POST["cedula_ruc"]);
        $this->getCuenta()->contrasenia = $this->security->xss_clean($this->bcrypt->hash_password($_POST["cedula_ruc"]));
    }

    private function cargarForeign() {
        $id_rol = "";
        $lista = Rol::where("nombre", "Administrador")->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $id_rol = $registro->id_rol;
            }
        }
        $rol = Rol::find($id_rol);
        $this->getPersona()->rol()->associate($rol);
    }

    public function RegistrarCuentaAdministrador() {
        $cedula_ruc = $_POST["cedula_ruc"];
        if (isset($cedula_ruc)) {
            $this->cargarObjeto();
            $this->cargarForeign();
            if ($this->getPersona()->save() == true) {
                $persona = Persona::find($this->getPersona()->id_persona);
                $this->cargarObjetoCuenta();
                $this->getCuenta()->persona()->associate($persona);
                $this->getCuenta()->save();
                $this->session->set_flashdata('message1', 'Administrador del sistema registrado con éxito');
                redirect(base_url());
            } else {
                $this->session->set_flashdata('message', 'Error al guardar');
                redirect(base_url());
            }
        } else {
            redirect(base_url());
        }
    }

    public function MostrarPaginaPrincipalDelSistema() {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitidoCuatroRoles('Administrador', 'Empleado', 'Cliente', 'Suscriptor', $this->utilidades->rol());
        $data["titulo"] = "Indynet | SGPSI ";
        $data["rol"] = $this->utilidades->rol();
        $data['facturas']= $this->BuscarFacturaXCeduala($this->utilidades->Usuario('usuario'));
        $data["home"] = 'active';
        $this->ci_smarty->vista('backend/principal/principal', $data);
    }

    public function IniciarSesion() {
        $token = xss_clean($this->input->post('_token'));
        if ($token == $this->session->userdata('token')) {
            $usuario = xss_clean($this->input->post('user'));
            $contrasenia = xss_clean($this->input->post('contrasenia'));
            if ($this->auth->inicio_sesion($usuario, $contrasenia) == FALSE) {
                $this->session->set_flashdata('message', 'Usuario o contraseña incorrecto');
                redirect('iniciar-sesion');
            } else if ($this->EstadoDecuenta($usuario) == FALSE) {
                $this->session->set_flashdata('message', 'Su cuenta esta desactivada');
                redirect('iniciar-sesion');
            } else {
                $this->ModificarC($usuario);
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('message', 'Usted no es una persona');
            redirect('iniciar-sesion');
        }
    }

    private function EstadoDecuenta($cedula_ruc) {
        $estado = Cuenta::join("persona", "cuenta.id_persona", "=", "persona.id_persona")
                ->where('persona.cedula_ruc', '=', $cedula_ruc)
                ->where('cuenta.estado', '=', '1')
                ->get();
        if ($estado->count() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function ModificarC($usuario) {
        $fecha = new DateTime();
        $fecha->format('Y/m/d H:i:s');
        $cuenta = Cuenta::where('usuario', '=', $usuario)->get();
        if ($cuenta->count() > 0) {
            foreach ($cuenta as $value) {
                $this->fifarInstancia($this->getCuenta()->find($value->id_cuenta));
                $this->getCuenta()->ultimo_acceso = $fecha;
                $this->getCuenta()->save();
            }
        }
    }

    public function cerrar_sesion() {
        $this->auth->cerrar_sesion();
        redirect('iniciar-sesion');
    }

    private function BuscarFacturaXCeduala($cedula_ruc) {
        $facturas = Detalle_mensualidad::join("venta_plan", "detalle_mensualidad.id_ventaPlan", "=", "venta_plan.id_ventaPlan")
                ->leftJoin('descuento', function($join) {
                    $join->on('venta_plan.id_descuento', '=', 'descuento.id_descuento');
                })
                ->leftJoin('contrato', function($join) {
                    $join->on('venta_plan.id_contrato', '=', 'contrato.id_contrato');
                })
                ->leftJoin('persona', function($join) {
                    $join->on('contrato.id_cliente', '=', 'persona.id_persona');
                })
                ->leftJoin('plan', function($join) {
                    $join->on('contrato.id_plan', '=', 'plan.id_plan');
                })
                ->leftJoin('tipo_plan', function($join) {
                    $join->on('plan.id_tipoPlan', '=', 'tipo_plan.id_tipoPlan');
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
                ->where('detalle_mensualidad.estado', '=', "Pendiente")
                //->orderBy('detalle_mensualidad.id_detalleMensualidad', 'desc')
                ->get();
        return $facturas;
    }

}
