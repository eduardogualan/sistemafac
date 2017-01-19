<?php

class Utilidades {

    protected $ci;

    public function __construct() {
        $this->ci = & get_instance();
    }

    public function RedondearDecimales($valor) {
        $float_redondeado = round($valor * 100) / 100;
        return $float_redondeado;
    }

    public function PrimerDiaMes() {
        $fecha = new DateTime();
        $fecha->modify('first day of this month');
        return $primerdiames = $fecha->format('Y/m/d');  //d/m/Y
    }

    public function UltimoDiaMes() {
        $fecha = new DateTime();
        $fecha->modify('last day of this month');
        return $ultimoDiames = $fecha->format('Y/m/d');
    }
    public function FechaActual() {
        $fecha = new DateTime();
        return $fecha->format('Y/m/d');
    }
    public function SumarFechas($dias) {
        $fecha = new DateTime($dias);
        $fecha->modify('last day of +1 month');
        return $diassumados = $fecha->format('Y/m/d');
    }

    private function funcionesCorreguis() {
        for ($m = 1; $m <= 12; $m++) {
            $month = date("M", mktime(0, 0, 0, $m, 1, 2000));
            echo $mon["$month"] = $m . '<br/>';
        }
        $fecha = new DateTime();
        $fecha->modify('last day of +1 month');
        $diassumados = $fecha->format('Y/m/d');
        echo $diassumados . '<br/>';

        $fecha = date('Y-m-j');
        $nuevafecha = strtotime('+3 month', strtotime($fecha));
        $nuevafecha = date('j-m-Y', $nuevafecha);

        echo $nuevafecha . '<br/>';

        echo "hoy dia" . date('j-m-Y');
    }

    public function EstaLogeado() {
        if ($this->ci->auth->is_logged() == FALSE) {
            redirect('iniciar-sesion');
        }
    }

    public function EstaPermitido($rol, $rolUsuario) {
        if ($rol != $rolUsuario) {
            $this->ci->auth->cerrar_sesion();
            redirect('iniciar-sesion');
        }
    }

    public function EstaPermitidoDosRoles($rol, $rol1, $rolUsuario) {
        if (!(($rol == $rolUsuario) || ($rol1 == $rolUsuario))) {
            $this->ci->auth->cerrar_sesion();
            redirect('iniciar-sesion');
        }
    }

    public function EstaPermitidoTresRoles($rol, $rol1, $rol2, $rolUsuario) {
        if (!(($rol == $rolUsuario) || ($rol1 == $rolUsuario) || ($rol2 == $rolUsuario))) {
            $this->ci->auth->cerrar_sesion();
            redirect('iniciar-sesion');
        }
    }

    public function EstaPermitidoCuatroRoles($rol, $rol1, $rol2, $rol3, $rolUsuario) {
        if (!(($rol == $rolUsuario) || ($rol1 == $rolUsuario) || ($rol2 == $rolUsuario) || ($rol3 == $rolUsuario))) {
            $this->ci->auth->cerrar_sesion();
            redirect('iniciar-sesion');
        }
    }

    public function rol() {
        return $this->ci->auth->sacarRolCedula($this->ci->session->userdata('usuario'));
    }
    public function Usuario($nombre) {
        return $this->ci->session->userdata($nombre);
    }
    
    public function NumeroDeFactura() {
        $this->ci->load->model('Venta_plan');
        $numeroFactura = Venta_plan::all();
        return $numeroFactura->count()+1;
        
    }
    
     public function numeroContrato() {
        $this->ci->load->model('Contrato');
        $numeroContrato = Contrato::all();
        return $numeroContrato->count()+1;
        
    }
}
