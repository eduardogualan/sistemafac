<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author jose
 */
class Auth {

    //put your code here
    protected $ci;

    public function __construct() {
        $this->ci = & get_instance();
    }

    /**
     * Función que permite crea tokens para la seguridades csrf
     * @param type $param
     * @return type returna un token cifrado
     */
    public function token() {
        $token = sha1(uniqid(rand(), true));
        $this->ci->session->set_userdata('token', $token);
        return $token;
    }

    /**
     * Función que permite comprobar si un usuario esta en sesión
     * @return type
     */
    public function is_logged() {
        return $this->ci->session->userdata('usuario') != FALSE ? TRUE : FALSE;
    }

    public function inicio_sesion($usuario, $clave) {
        $this->ci->load->model("Cuenta");
        $cuentaL = Cuenta::where('usuario', '=', $usuario)->get();
        if ($cuentaL->count() > 0) {
            $cuenta = $cuentaL->first();
            $pass = $cuenta->contrasenia;
            if ($this->ci->bcrypt->check_password($clave, $pass)) {
                $auxCuenta = Cuenta::where('usuario', '=', $usuario)
                                ->where('contrasenia', '=', $pass)->get();
                if ($auxCuenta->count() > 0) {
                    $this->crear_sesiones($cuenta->persona->cedula_ruc, $cuenta->persona->apellidos . ' ' . $cuenta->persona->nombres);
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    private function crear_sesiones($cedula, $nombre_usuario) {
        $data = array('usuario' => $cedula, 'nombre' => $nombre_usuario);
        $this->ci->session->set_userdata($data);
    }

    public function cerrar_sesion() {
        $this->ci->session->unset_userdata(array('usuario', 'nombre'));
        $this->ci->session->sess_destroy();
        //$this->ci->session->sess_create();
        $this->ci->session->set_flashdata('cerrada', 'La sessión se ha cerrado correctamente.');
        //redirect(base_url('login', 'refresh'));
    }

    public function send_mail($email, $enviar=false) {
        $config['useragent'] = "Biblioteca";
        //$config['mailpath'] = "/usr/sbin/sendmail"; // Sendmail path
        $config['protocol'] = "smtp"; // mail/sendmail/smtp
        $config['smtp_host'] = "ssl://smtp.gmail.com";  // SMTP Server. 
        $config['smtp_user'] = "eduardogualn@gmail.com";  // SMTP Username
        $config['smtp_pass'] = "1105675522";  // SMTP Password
        $config['smtp_port'] = "465";  // SMTP Port
        $config['mailtype'] = "html"; // text/html formato email
        $config['charset'] = "utf-8"; // charset			

        $this->ci->load->library('email', $config);
        $this->ci->email->set_newline("\r\n");
        $this->ci->email->from('Biblioteca', 'Acceso al sistema');
        $this->ci->email->to($email);
        $this->ci->email->subject('Inicio de sesión.');
        $this->ci->email->message('usted a iniciado sesión desde la IP:<br/><br/>' 
                . $_SERVER['REMOTE_ADDR'] . '<br />Utilizando: ' 
                . $_SERVER['HTTP_USER_AGENT']);
        if($enviar==true){
            $this->ci->email->send();
        }
        
    }
    public function sacarRolCedula($cedula){
        $cuentaB = Cuenta::where("usuario",'=',$cedula)->get()->first();
        $cuenta = Cuenta::find($cuentaB->id_cuenta);
        return $cuenta->persona->rol->nombre;
    }
}
