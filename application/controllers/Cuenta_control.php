<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta_control extends CI_Controller {

    private $cuenta = null;
    private $persona = null;

    public function __construct() {
        parent::__construct();
        $this->load->model('Persona');
        $this->load->model('Rol');
        $this->load->model('Cuenta');
        // $this->utilidades->EstaLogeado();
    }

    public function getCuenta() {
        if ($this->cuenta == NULL) {
            $this->cuenta = new Cuenta();
        }
        return $this->cuenta;
    }

    public function nuevaInstancia() {
        $this->cuenta = null;
    }

    public function fijarInstancia($cuenta) {
        $this->cuenta = $cuenta;
    }

    public function getPersona() {
        if ($this->persona == NULL) {
            $this->persona = new Persona();
        }
        return $this->persona;
    }

    public function nuevaInstanciaPersona() {
        $this->persona = null;
    }

    public function fijarInstanciaPersona($persona) {
        $this->persona = $persona;
    }

    public function ListarCuenta() {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Usuarios - Listar";
        $data["usuario"] = 'active';
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista"] = Cuenta::with('persona')->get();
        //  $data['listapersona'] = Persona::
        $this->ci_smarty->vista('backend/usuario/listar', $data);
    }

    public function nuevoUsuario() {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Usuarios - Registrar";
        $data["usuario"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data['lista_rol'] = Rol::all();
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/usuario/registrar', $data);
    }

    private function cargarObjeto() {
        $rol = Rol::find($this->security->xss_clean($_POST["rol"]));
        $this->getPersona()->cedula_ruc = $this->security->xss_clean($_POST["cedula_ruc"]);
        $this->getPersona()->apellidos = $this->security->xss_clean($_POST["apellidos"]);
        $this->getPersona()->nombres = $this->security->xss_clean($_POST["nombres"]);
        $this->getPersona()->celular = $this->security->xss_clean($_POST["celular"]);
        $this->getPersona()->email = $this->security->xss_clean($_POST["email"]);
        $this->getPersona()->Rol()->associate($rol);
    }

    private function cargarObjetoCuenta() {
        $this->getCuenta()->usuario = $this->security->xss_clean($_POST["cedula_ruc"]);
        $this->getCuenta()->contrasenia = $this->security->xss_clean($this->bcrypt->hash_password($_POST["cedula_ruc"]));
    }

    private function validar() {
        $this->form_validation->set_rules('cedula_ruc', 'cedula_ruc', 'required|trim');
        $this->form_validation->set_rules('nombres', 'nombres', 'required|trim');
        $this->form_validation->set_rules('apellidos', 'apellidos', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

    public function RegistrarCuentas() {
        if ($this->validar() == TRUE) {
            $cedula_ruc = $_POST["cedula_ruc"];
            if ($this->ConsultarUsuario($cedula_ruc) == NULL) {
                $this->cargarObjeto();
                if ($this->getPersona()->save() == true) {
                    $persona = Persona::find($this->getPersona()->id_persona);
                    $this->cargarObjetoCuenta();
                    $this->getCuenta()->persona()->associate($persona);
                    $this->getCuenta()->save();
                    $this->nuevaInstanciaPersona();
                    $this->nuevaInstancia();
                    $this->session->set_flashdata('message', 'Su registro ha sido guardado');
                    redirect('usuarios/listar');
                } else {
                    $this->session->set_flashdata('message', 'Error al guardar');
                    redirect('usuarios/registrar');
                }
            } else {
                $this->session->set_flashdata('message', 'Este usuario ya esta registrado');
                redirect('usuarios/registrar');
            }
        } else {
            redirect('usuarios/registrar');
        }
    }

    public function VerEditar($id) {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        // $this->fijarInstanciaPersona($this->getPersona()->find($id));
        $data["titulo"] = "Usuarios - Modificar";
        $data["usuario"] = "active";
        $data["AdministrarOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista"] = $this->ListarUsuarioXid($id);
        $data['lista_rol'] = Rol::orderBy('nombre')->get();
        $this->ci_smarty->vista('backend/usuario/modificar', $data);
    }

    public function modificarCuenta($id) {
        if ($this->validar() == TRUE) {
            $this->fijarInstanciaPersona($this->getPersona()->find($id));
            $this->cargarObjeto();
            if ($this->getPersona()->save() == true) {
                $this->nuevaInstanciaPersona();
                $this->session->set_flashdata('message', 'Se ha modificado correctamente');
                redirect('usuarios/listar');
            } else {
                $this->session->set_flashdata('message', 'Error al modificar');
                redirect('usuarios/modificar/' . $id);
            }
        } else {
            redirect('usuarios/modificar/' . $id);
        }
    }

    public function ResetearCuenta($id) {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $this->fijarInstancia($this->getCuenta()->find($id));
        $this->getCuenta()->contrasenia = $this->bcrypt->hash_password($this->ConsultarusuarioXId($id));
        $this->getCuenta()->save();
        $this->session->set_flashdata('message', 'cuenta reseteada con éxito');
        redirect('usuarios/listar');
    }

    public function ResetearCuentaCliente($id) {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $this->fijarInstancia($this->getCuenta()->find($id));
        $this->getCuenta()->contrasenia = $this->bcrypt->hash_password($this->ConsultarusuarioXId($id));
        $this->getCuenta()->save();
        $this->session->set_flashdata('message', 'cuenta reseteada con éxito');
        redirect('clientes/listar');
    }

    public function DesactivarCuenta($id) {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $this->fijarInstancia($this->getCuenta()->find($id));
        $this->getCuenta()->estado = FALSE;
        $this->getCuenta()->save();
        $this->session->set_flashdata('message', 'cuenta desactivada satisfactoriamente');
        redirect('usuarios/listar');
    }

    public function ActivarCuenta($id) {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $this->fijarInstancia($this->getCuenta()->find($id));
        $this->getCuenta()->estado = TRUE;
        $this->getCuenta()->save();
        $this->session->set_flashdata('message', 'cuenta activada satisfactoriamente');
        redirect('usuarios/listar');
    }

    private function ConsultarusuarioXId($id) {
        $lista = Cuenta::where("id_cuenta", $id)->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $usuario = $registro->usuario;
            }
        }
        return $usuario;
    }

    private function ConsultarUsuario($user) {
        $lista = Cuenta::where("usuario", $user)->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $usuario = $registro->usuario;
            }
            return $usuario;
        }
    }

    public function MostrarUsuario() {
        $user = $this->input->post("user");
        if (isset($user)) {
            $registro = $this->ConsultarUsuario($user);
            if ($user == $registro) {
                echo '1';
            } else {
                echo '2';
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    public function CargarDatosAdmin() {
        $cedula_ruc = $this->input->post("cedula_ruc");
        if (isset($cedula_ruc)) {
            $lista = $this->BuscarCuentaPersonaRol($cedula_ruc);
            if ($lista->count() > 0) {
                foreach ($lista as $value) {
                    echo '<div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres *</label>
                                <div class="col-md-6 col-sm-6 col-xs-8 input-icon right">
                                    <input id="nombres" name="nombres"class="form-control col-md-7 col-xs-12" value="' . $value->nombres . '"type="text" readonly="readonly">
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-4"></div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos *</label>
                                <div class="col-md-6 col-sm-6 col-xs-8 input-icon right">
                                    <input id="apellidos" name="apellidos"class="form-control col-md-7 col-xs-12" value="' . $value->apellidos . '"type="text" readonly="readonly">
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-4"></div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email *</label>
                                <div class="col-md-6 col-sm-6 col-xs-8 input-icon right">
                                    <input id="email" name="email"class="form-control col-md-7 col-xs-12" value="' . $value->email . '"type="text" readonly="readonly">
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-4"></div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                <div class="col-md-6 col-sm-6 col-xs-8 input-icon right">
                                    <button type="button" onclick="EnviarEmail()" class="btn btn-primary pull-right"><i class="fa fa-send"></i> ENVIAR</button>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-4"></div>
                            </div>';
                }
            } else {
                echo '
                                <div class="alert alert-danger text-center">
                                    <button class="close" data-close="alert"></button>
                                    <strong>ERROR: </strong>USTED NO ES EL ADMINISTRADOR DEL SISTEMA
                                </div> ';
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

  
    public function sendMailGmail() {
        $cedula_ruc = $this->input->post("cedula_ruc");
        if (isset($cedula_ruc)) {
            $lista = $this->BuscarCuentaPersonaRol($cedula_ruc);
            if ($lista->count() > 0) {
                foreach ($lista as $item) {
                    $logitud = 10;
                    $Nvopsswd = substr(md5(microtime()), 1, $logitud);
                    $this->fijarInstancia($this->getCuenta()->find($item->id_cuenta));
                    $this->getCuenta()->contrasenia = $this->bcrypt->hash_password($Nvopsswd);
                    $this->getCuenta()->save();
                    $this->nuevaInstancia();

                    //configuracion para gmail
                    $configGmail = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.gmail.com',
                        'smtp_port' => 465,
                        'smtp_user' => 'admdelsistemactrlasistencia@gmail.com',
                        'smtp_pass' => 'eduardo1995',
                        'mailtype' => 'html',
                        'charset' => 'utf-8',
                        'newline' => "\r\n"
                    );
                    //cargamos la configuración para enviar con gmail
                    $this->email->initialize($configGmail);
                    $this->email->from($item->email);
                    $this->email->to($item->email);
                    $this->email->subject('Recuperación de contraseña');
                    $this->email->message('<h2>SISTEMA DE GESTIÓN DE PAGOS DE SERVICIO DE INTERNET</h2><hr><br/> <strong>Informa:</strong> su nueva contraseña de acceso al sistema es: ' . $Nvopsswd . '<br/> <strong>ATENTAMENTE</strong> EDUARDO GUALÁN DESARROLLADOR DE SISTEMAS');
                    if ($this->email->send() == TRUE) {
                         echo '<div class="alert alert-success text-center">
                                    <button class="close" data-close="alert"></button>
                                    <strong>FELICIDADES: </strong> Contraseña recuperada satisfactoriamente ahora revise su correo electrónico
                                </div>';
                       
                    } else {
                        echo '<div class="alert alert-danger text-center">
                                    <button class="close" data-close="alert"></button>
                                    <strong>ERROR: </strong> No se pudo recuperar  la contraseña vuelba a intentar nuevamente
                                </div>';
                    }
                }
            }else{
               echo '<div class="alert alert-danger text-center">
                                    <button class="close" data-close="alert"></button>
                                    <strong>ERROR: </strong> No se pudo recuperar  la contraseña vuelba a intentar nuevamente
                                </div>'; 
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }


        //cargamos la libreria email de ci
        //$this->load->library("email");
    }

    private function ListarUsuarioXid($id) {
        $usuario = Persona::join("rol", "persona.id_rol", "=", "rol.id_rol")
                ->where('persona.id_persona', '=', $id)
                ->get();
        return $usuario;
    }

    private function BuscarCuentaPersonaRol($cedula_ruc) {
        $lista = Cuenta::join("persona", "cuenta.id_persona", "=", "persona.id_persona")
                ->leftJoin('rol', function($join) {
                    $join->on('persona.id_rol', '=', 'rol.id_rol');
                })
                ->where('persona.cedula_ruc', '=', $cedula_ruc)
                ->where('rol.nombre', '=', 'Administrador')
                ->get();
        return $lista;
    }

}
