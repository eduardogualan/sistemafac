<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Suscriptor_control extends CI_Controller {

    private $persona = null;
    private $cuenta = null;
    private $rol = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Cuenta");
        $this->load->model('Rol');
        $this->load->model("Persona");
        $this->load->model("Tipo_plan");
        $this->load->model("Plan");
    }

    private function getPersona() {
        if ($this->persona == NULL) {
            $this->persona = new Persona();
        }
        return $this->persona;
    }

    private function getCuenta() {
        if ($this->cuenta == NULL) {
            $this->cuenta = new Cuenta();
        }
        return $this->cuenta;
    }

    public function NuevoSuscriptor() {
        $data["titulo"] = "Suscriptor - Registrar";
        $this->ci_smarty->vista('login/suscribir', $data);
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
        $this->getPersona()->email = $this->security->xss_clean($_POST["email"]);
    }

    private function cargarObjetoCuenta() {
        $this->getCuenta()->usuario = $this->security->xss_clean($_POST["cedula_ruc"]);
        $this->getCuenta()->contrasenia = $this->security->xss_clean($this->bcrypt->hash_password($_POST["cedula_ruc"]));
    }

    private function cargarForeign() {
        $id_rol = "";
        $lista = Rol::where("nombre", "Suscriptor")->get();
        if ($lista->count() > 0) {
            foreach ($lista as $registro) {
                $id_rol = $registro->id_rol;
            }
        }
        $rol = Rol::find($id_rol);
        $this->getPersona()->rol()->associate($rol);
    }

    public function RegistrarSuscriptorCuenta() {
        $cedula_ruc = $_POST["cedula_ruc"];
        if (isset($cedula_ruc)) {
            if ($this->ConsultarCedulaRucDisponible($cedula_ruc) == NULL) {
                $this->cargarObjeto();
                $this->cargarForeign();
                if ($this->getPersona()->save() == true) {
                    $id_persona = $this->ObtenerIdPersona($cedula_ruc);
                    $this->cargarObjetoCuenta();
                    $persona = Persona::find($id_persona);
                    $this->getCuenta()->persona()->associate($persona);
                    $this->getCuenta()->save();
                    $this->session->set_flashdata('message1', 'Sus datos personales fueron guardados con éxito, ahora acceda al sistema');
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('message', 'Error al guardar');
                    redirect('suscriptor/registar');
                }
            } else {
                $this->session->set_flashdata('message', 'Usted ya esta registrado en el sistema');
                redirect('suscriptor/registar');
            }
        } else {
            redirect('suscriptor/registar');
        }
    }

    //proceso para pedir proformas
    public function NuevoProforma() {
        $this->utilidades->EstaLogeado();
        $this->utilidades->EstaPermitido('Suscriptor', $this->utilidades->rol());
        $data["titulo"] = "Proformas";
        $data["ProformasOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista_tipoPlan"] = $this->ListarPlanTP();
        $this->ci_smarty->vista('backend/suscriptor/proformas', $data);
    }

    private function ListarPlanTP() {
        $plan = Plan::join("tipo_plan", "plan.id_tipoPlan", "=", "tipo_plan.id_tipoPlan")
                ->get();
        return $plan;
    }

    function ImprimirProformas($id) {
        $this->utilidades->EstaLogeado();
        $persona = Persona::where("cedula_ruc", $this->utilidades->Usuario('usuario'))->get();
        $pdf = new FPDF();
        $pdf->AddPage();
        //encabezad
        $pdf->SetTitle("PROFORMA INDYNET");
        $pdf->Image(base_url() . 'assets/layouts/layout/img/cabecera.png', 30, 1, 150);
        // $pdf->Ln(100);
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->SetXY(70, 45);
        $pdf->Cell(80, 5, utf8_decode("COTIZACIÓN"), 0, 1, "C");
        //dar salto de liena
        $pdf->Ln(5);
        if ($persona->count() > 0) {
            foreach ($persona as $item) {
                //datos del cleinet
                //$pdf->SetFont('Arial', 'B', 12);
                $pdf->SetFont('Arial', 'B', 12);
                $pdf->Cell(10, 5, utf8_decode("Fecha: " . $this->utilidades->FechaActual()), 0, 1, 'c');
                $pdf->Cell(10, 5, utf8_decode("Cliente: " . $item->nombres . " " . $item->apellidos), 0, 1, 'c');
                $pdf->Cell(10, 5, utf8_decode("Cédula o Ruc: " . $item->cedula_ruc), 0, 1, 'c');
                $pdf->Ln(7);
                $pdf->SetFont('Arial', 'I', 12);
                $pdf->MultiCell(190, 5, utf8_decode('Estimado(@), ' . $item->nombres . " " . $item->apellidos . ' ' . 'acontinuación le presentamos nuestra cotización para proveer el servicio de internet.'));
            }
        }
        $plan = $this->ObtenerPlanXId($id);
        if ($plan->count() > 0) {
            foreach ($plan as $value) {
                $pdf->Ln(5);
                //creaar proforma
                //cabecera rpforma
                $pdf->SetFont('Arial', 'B', 12);
                $pdf->Cell(30, 5, "Cantidad", 1);
                $pdf->Cell(150, 5, "Detalles", 1);
                //cuerpo de proforma
                $pdf->Ln(10);
                $pdf->SetFont('Arial', 'I', 12);
                $pdf->Cell(30, 5, '1', 0);
                $pdf->Cell(150, 5, utf8_decode("* Tipo de plan: " . $value->nombre), 0);
                $pdf->Ln(8);
                $pdf->Cell(30, 5, '', 0);
                $pdf->Cell(150, 5, utf8_decode("* Conexión : Modo inalámbrico"), 0);
                $pdf->Ln(8);
                $pdf->Cell(30, 5, '', 0);
                $pdf->Cell(150, 5, utf8_decode("* Equipo : Radio Estación Ubiquiti"), 0);
                $pdf->Ln(8);
                $pdf->Cell(30, 5, '', 0);
                $pdf->Cell(150, 5, utf8_decode("* Ancho de Banda : " . $value->velocidad . " " . $value->descripcion), 0);
                $pdf->Ln(8);
                $pdf->Cell(30, 5, '', 0);
                $pdf->Cell(150, 5, utf8_decode("* Soporte Técnico : Las 24 horas del día y los 7 dias de la semana (24/7)"), 0);
                $pdf->Ln(8);
                $pdf->Cell(30, 5, '', 0);
                $pdf->Cell(150, 5, utf8_decode("* Salida Internacional : Fibra Óptica"), 0);
                $pdf->Ln(8);
                $pdf->SetFont('Arial', 'B', 12);
                $pdf->Cell(130, 5, '', 0);
                $pdf->Cell(30, 5, 'SUBTOTAL: ', 1);
                $pdf->Cell(25, 5, number_format($value->valor_mensual, 2), 1);
                $pdf->Ln(5);
                $pdf->Cell(130, 5, '', 0);
                $pdf->Cell(30, 5, 'IVA 12%: ', 1);
                $pdf->Cell(25, 5, number_format($this->utilidades->RedondearDecimales($value->valor_mensual * 0.12), 2), 1);
                $pdf->Ln(5);
                $pdf->Cell(130, 5, '', 0);
                $pdf->Cell(30, 5, 'TOTAL: ', 1);
                $pdf->Cell(25, 5, number_format($this->utilidades->RedondearDecimales(($value->valor_mensual * 0.12) + $value->valor_mensual), 2), 1);
            }

            $pdf->Ln(13);
            $pdf->SetFont('Arial', 'I', 12);
            $pdf->MultiCell(190, 5, utf8_decode('En espera de que nuestro servicio pueda cumplir sus expectativas y a la orden para poder aclarar duda alguna con respecto al mismo, me despido.'));


            $pdf->Ln(10);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(80, 5, '', 0);
            $pdf->Cell(56, 5, utf8_decode("Atentamente,"), 0);
            // $pdf->SetXY(70, 500);
            $pdf->Image(base_url() . 'assets/layouts/layout/img/sello.png', 75, 205, 75);

            $pdf->Ln(25);
            $pdf->SetFont('Arial', 'I', 12);
            $pdf->Cell(70, 5, '', 0);
            $pdf->Cell(56, 5, utf8_decode("Francisco Lozano Lozano"), 0);
            $pdf->Ln(5);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(85, 5, '', 0);
            $pdf->Cell(56, 5, utf8_decode("VENTAS"), 0);

            $pdf->Ln(20);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(10, 5, utf8_decode('Cotización válido por 15 días apartir de la fecha de impresión '), 0, 1, 'c');
            //$pdf->Ln(2);
            $pdf->SetFont('Arial', 'I', 10);
            $pdf->Cell(10, 5, utf8_decode('Descargado desde: ' . base_url() . 'proformas/'), 0, 1, 'c');
            //pie de pagina
            $pdf->Image(base_url() . 'assets/layouts/layout/img/pie.png', 90, 260, 110);

            $pdf->Output();
        }
    }

    private function ObtenerPlanXId($id) {
        $plan = Plan::join("tipo_plan", "plan.id_tipoPlan", "=", "tipo_plan.id_tipoPlan")
                ->where('id_plan', '=', $id)
                ->get();
        return $plan;
    }
     
    public function enviar() {
        $this->auth->send_mail('eduardogualan@gmail.com');
        
    }


}
