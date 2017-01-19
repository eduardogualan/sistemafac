<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_usuario_control extends CI_Controller {

    private $cuenta = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Cuenta");
        $this->load->model("Persona");
        $this->load->model("Rol");
        $this->utilidades->EstaLogeado();
    }

    public function getCuenta() {
        if ($this->cuenta == NULL) {
            $this->cuenta = new Cuenta();
        }
        return $this->cuenta;
    }

    public function iniciarInstancia() {
        $this->cuenta = NULL;
    }

    public function fijarInstancia($cuenta) {
        $this->cuenta = $cuenta;
    }

    public function verPerfil() {
        $data["titulo"] = "Perfil - Usuario";
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/principal/perfil', $data);
    }

    public function ModificarContrasenia() {
        if ($this->validar() == TRUE) {
            $this->fijarInstancia($this->getCuenta()->find($this->IdCuenta($this->security->xss_clean($_POST["cedula"]))));
            $this->CargarObjeto();
            $this->getCuenta()->save();
            $this->GuardadoExitosamente();
        } else {
            redirect('usuario/perfil');
        }
    }

    private function CargarObjeto() {
        $this->getCuenta()->usuario = $this->security->xss_clean($_POST["cedula"]);
        $this->getCuenta()->contrasenia = $this->security->xss_clean($this->bcrypt->hash_password($_POST["pass1"]));
    }

    private function validar() {
        $this->form_validation->set_rules('cedula', 'cedula', 'required|trim');
        $this->form_validation->set_rules('pass1', 'pass1', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

    private function IdCuenta($usuario) {
        $lista = Cuenta::where("usuario", $usuario)->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $id_cuenta = $registro->id_cuenta;
            }
        }
        return $id_cuenta;
    }

    public function MostrarFormulario() {
        $valor = $this->security->xss_clean($_POST["valor"]);
        if (isset($valor)) {
            if ($valor == "Si") {
                $usuario = $this->utilidades->Usuario('usuario');
                echo ' <div class="alert alert-danger text-center" style="display:none;" id="error">
                                        <button class="close" data-close="alert"></button>
                                        <strong>Advertencia: </strong>Los datos ingresados son incorrectos intentelo nuevamente
                                    </div>  <div class="item form-group">
                                        <label class="control-label col-md-4" for="pass">Contraseña *</label>
                                        <div class="col-md-8 input-icon right">
                                            <input id="pass" name="pass"class="form-control col-md-7 col-xs-12" placeholder="su nueva contraseña"type="password" onkeyup="validacion' . "('pass')" . '">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-4" for="pass1">Confirmar Contraseña *</label>
                                        <div class="col-md-8 input-icon right">
                                            <input id="pass1" name="pass1"class="form-control col-md-7 col-xs-12" placeholder="repita su contraseña"type="password" onkeyup="validacion' . "('pass1')" . '">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <input type="hidden" id="cedula" name="cedula" value="' . $usuario . '">
                                            <div class="form-actions">
                                                <button onclick="return validar()"type="button" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                                            </div>
                                        </div>
                                    </div>';
            } else {
                
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    private function GuardadoExitosamente() {
        echo ' <div class="alert alert-success text-center">
                                        <button class="close" data-close="alert"></button>
                                        <strong>Felicidades: </strong>Su contraseña fue cambiada exitosamente
                                    </div>';
    }

}
