<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contrato_plan_control extends CI_Controller {

    private $persona = null;
    //private $datos_facturacion = null;
    private $marcaRouter = null;
    private $valorIntalacion = null;
    private $contratoPlan = null;
    private $objrouter = null;
    private $datosTecnicos = null;
    private $descuento = null;
    private $mensualidad = null;
    private $contrato = null;
    private $direccion = null;

    public function __construct() {
        parent::__construct();
        $this->load->model('Persona');
        $this->load->model('Plan');
        $this->load->model('Tipo_plan');
        $this->load->model('Nodo_enlazado');
        $this->load->model("Marca_router");
        $this->load->model("Antena");
        $this->load->model("Router");
        $this->load->model("Datos_tecnicos");
        $this->load->model("Venta_plan");
        $this->load->model("Descuento");
        $this->load->model("Detalle_mensualidad");
        $this->load->model("Contrato");
        $this->load->model("Provincia");
        $this->load->model("Direccion");
        $this->load->model("Parroquias");
        $this->utilidades->EstaLogeado();
    }

    public function getMarcaRouter() {
        if ($this->marcaRouter == null) {
            $this->marcaRouter = new Marca_router();
        }
        return $this->marcaRouter;
    }

    public function getVentaPlan() {
        if ($this->contratoPlan == null) {
            $this->contratoPlan = new Venta_plan();
        }
        return $this->contratoPlan;
    }

    public function getContrato() {
        if ($this->contrato == null) {
            $this->contrato = new Contrato();
        }
        return $this->contrato;
    }

    public function getRouter() {
        if ($this->objrouter == NULL) {
            $this->objrouter = new Router();
        }
        return $this->objrouter;
    }

    public function getdatosTecnicos() {
        if ($this->datosTecnicos == NULL) {
            $this->datosTecnicos = new Datos_tecnicos();
        }
        return $this->datosTecnicos;
    }

    public function getDescuento() {
        if ($this->descuento == NULL) {
            $this->descuento = new Descuento();
        }
        return $this->descuento;
    }

    public function getMensualidad() {
        if ($this->mensualidad == NULL) {
            $this->mensualidad = new Detalle_mensualidad();
        }
        return $this->mensualidad;
    }

    public function getDireccion() {
        if ($this->direccion == NULL) {
            $this->direccion = new Direccion();
        }
        return $this->direccion;
    }

    public function nuevaInstanciaCP() {
        $this->contrato = null;
    }

    public function fijarInstanciaCP($CP) {
        $this->contrato = $CP;
    }

    public function FijarInstanciaDatosT($datosTec) {
        $this->datosTecnicos = $datosTec;
    }

    public function fijarInstanciaRouter($router) {
        $this->objrouter = $router;
    }

    public function fijarInstanciaDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function listar_ContratoPlan() {
        $this->utilidades->EstaPermitidoDosRoles('Empleado', 'Administrador', $this->utilidades->rol());
        $data["titulo"] = "Contratar Planes - Listar";
        $data["lista"] = $this->ListarContrato();
        $data["contratoPlan"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/contrato_plan/listar', $data);
    }

    public function nuevo() {
        $this->utilidades->EstaPermitidoDosRoles('Empleado', 'Administrador', $this->utilidades->rol());
        $data["titulo"] = "Contratar Planes - Registrar";
        //$data["cliente"] = "active";
        $data["contratoPlan"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["Persona"] = Persona::all();
        $data["listaNodo"] = Nodo_enlazado::orderBy('nombre_nodoEnlazado')->get();
        $data["listaAntena"] = Antena::orderBy('nombre_antena')->get();
        $data["listaProvincia"] = Provincia::all();
        $this->ci_smarty->vista('backend/contrato_plan/registrar', $data);
    }

    public function RegistrarContratoDePlan() {
        if ($this->validar() == TRUE) {
            $valor = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["gender"])));
            if ($valor == "Si") {
                $this->CargarObjetoRouter();
                $this->getRouter()->save();
                $router = Router::find($this->getRouter()->id_router);
                $this->CargarObjetoDatosTecnicos();
                $this->getdatosTecnicos()->router()->associate($router);
            }
            $this->CargarObjetoDatosTecnicos();
            $this->getdatosTecnicos()->save();
            $this->CargarObetoDireccion();
            $this->getDireccion()->save();
            $datosTecnicos = Datos_tecnicos::find($this->getdatosTecnicos()->id_datosTecnicos);
            $direccion = Direccion::find($this->getDireccion()->id_direccion);
            $this->CargarObjetoContrato();
            $this->getContrato()->valorInstalacion = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["valor_instalacion"])));
            $this->getContrato()->nroContrato = $this->utilidades->numeroContrato();
            $this->getContrato()->fecha_instalacion= $this->utilidades->FechaActual();
            $this->getContrato()->datos_tecnicos()->associate($datosTecnicos);
            $this->getContrato()->Direccion()->associate($direccion);
            $this->getContrato()->save();
            $this->CargarObjetoDescuento();
            $this->getDescuento()->save();
            $descuento = Descuento::find($this->getDescuento()->id_descuento);
            $contrato = Contrato::find($this->getContrato()->id_contrato);
            $this->CargarObjetoVentaPlan();
            $this->getVentaPlan()->descuento()->associate($descuento);
            $this->getVentaPlan()->contrato()->associate($contrato);
            $this->getVentaPlan()->save();
            $venta = Venta_plan::find($this->getVentaPlan()->id_ventaPlan);
            $this->CargarObjetoMensualidad();
            $this->getMensualidad()->Venta_plan()->associate($venta);
            $this->getMensualidad()->save();
            
            //mostrar pdf;
            echo $this->getContrato()->id_contrato;
        } else {
            redirect('contratar-plan/registrar');
        }
    }

    //100% funcionando
    private function CargarObjetoRouter() {
        $id_marcaRouter = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["marcaRouter"])));
        $marcaRouter = Marca_router::find($id_marcaRouter);
        $this->getRouter()->ip_router = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["direccionIpRouter"])));
        $this->getRouter()->nombre_wifi = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["nombrewifi"])));
        $this->getRouter()->clave_wifi = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["contraseniawifi"])));
        $this->getRouter()->usuario_router = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["usuariorouter"])));
        $this->getRouter()->clave_router = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["contraseniarouter"])));
        $this->getRouter()->marca_router()->associate($marcaRouter);
    }

    //asta aqui funcionando al 100%
    private function CargarObjetoDatosTecnicos() {
        $id_nodoEnlazado = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["nodoEnlazado"])));
        $id_antena = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["antena"])));
        //$id_cliente = $this->ObtenerIdPersona($this->security->xss_clean(addslashes(htmlspecialchars($_POST["cedula_ruc"]))));
        $nodoEnlazado = Nodo_enlazado::find($id_nodoEnlazado);
        $antena = Antena::find($id_antena);
        //$cliente = Persona::find($id_cliente);
        $this->getdatosTecnicos()->frecuencia = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["frecuencia"])));
        $this->getdatosTecnicos()->direccion_ipWan = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["direccionIpWan"])));
        $this->getdatosTecnicos()->gateway = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["puerta_enlace"])));
        $this->getdatosTecnicos()->dns = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["dns"])));
        $this->getdatosTecnicos()->subred = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["subred"])));
        $this->getdatosTecnicos()->nodo_enlazado()->associate($nodoEnlazado);
        $this->getdatosTecnicos()->antena()->associate($antena);
        // $this->getdatosTecnicos()->Persona()->associate($cliente);
    }

    private function CargarObetoDireccion() {
        $parroquia = Parroquias::find($this->security->xss_clean(addslashes(htmlspecialchars($_POST["parroquia"]))));
        $this->getDireccion()->calles = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["calles"])));
        $this->getDireccion()->numero_casa = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["numeroCasa"])));
        $this->getDireccion()->referencia = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["referenciaLugar"])));
        $this->getDireccion()->Parroquias()->associate($parroquia);
    }

    //ast aqui funcionando al 100%
    private function CargarObjetoDescuento() {
        $this->getDescuento()->porcentaje = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["opcionesDescuentos"])));
        $this->getDescuento()->valor_descuento = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["DescuentoPlan"])));
        $this->getDescuento()->concepto = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["conceptoDesc"])));
    }

    public function CargarObjetoContrato() {
        $id_cliente = $this->ObtenerIdPersona($this->security->xss_clean(addslashes(htmlspecialchars($_POST["cedula_ruc"]))));
        $cliente = Persona::find($id_cliente);
        $plan = Plan::find($this->security->xss_clean(addslashes(htmlspecialchars($_POST["velocidadPlan"]))));
        $this->getContrato()->persona()->associate($cliente);
        $this->getContrato()->Plan()->associate($plan);
    }

    //asta aqui funcionando al 100%
    private function CargarObjetoVentaPlan() {
        $this->getVentaPlan()->fecha_venta = date("Y-m-d", strtotime($this->security->xss_clean(addslashes(htmlspecialchars($_POST["fecha"])))));
        $this->getVentaPlan()->iva_venta = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["ivaPlan"])));
        $this->getVentaPlan()->total_venta = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["totalPagar"])));
        $this->getVentaPlan()->saldo_instalacion = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["saldoPendiente"])));
        $this->getVentaPlan()->numeroFactura = $this->utilidades->NumeroDeFactura();
    }

    private function CargarObjetoMensualidad() {
        $this->getMensualidad()->fecha_vencimiento = $this->utilidades->UltimoDiaMes();
        $this->getMensualidad()->cantidad = 1;
        $this->getMensualidad()->valor_unitario = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["costoPlan"])));
        $this->getMensualidad()->valor_total = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["costoPlan"])));
    }

    private function validar() {
        $this->form_validation->set_rules('tipoPlan', 'tipoPlan', 'required|trim');
        $this->form_validation->set_rules('parroquia', 'parroquia', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
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

    public function DesactivarContrato($id) {
        $this->utilidades->EstaPermitidoDosRoles('Administrador', 'Empleado', $this->utilidades->rol());
        $this->fijarInstanciaCP($this->getContrato()->find($id));
        $this->getContrato()->estado_contrato = "Inactivo";
        $this->getContrato()->save();
        $this->session->set_flashdata('message', 'contrato desactivado satisfactoriamente');
        redirect('contratar-plan/listar');
    }

    public function ActivarContrato($id) {
        $this->utilidades->EstaPermitidoDosRoles('Administrador', 'Empleado', $this->utilidades->rol());
        $this->fijarInstanciaCP($this->getContrato()->find($id));
        $this->getContrato()->estado_contrato = "Activo";
        $this->getContrato()->save();
        $this->session->set_flashdata('message', 'contrato activado satisfactoriamente');
        redirect('contratar-plan/listar');
    }

    public function VerEditar($id) {
        $this->utilidades->EstaPermitidoDosRoles('Administrador', 'Empleado', $this->utilidades->rol());
        $data["titulo"] = "Contratar Planes - Modificar";
        //$data["cliente"] = "active";
        $data["contratoPlan"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["lista"] = $this->ListarContratoXid($id);
        $data["listaNodo"] = Nodo_enlazado::orderBy('nombre_nodoEnlazado')->get();
        $data["listaAntena"] = Antena::orderBy('nombre_antena')->get();
        $data["listaRouter"] = Marca_router::orderBy('nombre_marcaRouter')->get();
        $data["listaTipoPlan"] = Tipo_plan::orderBy('nombre')->get();
        $data["listaProvincia"] = Provincia::all();
        $this->ci_smarty->vista('backend/contrato_plan/modificar', $data);
    }

    public function Modificar($id) {
        if ($this->validar() == true) {
            $lista = $this->ListarContratoXid($id);
            foreach ($lista as $item) {
                if ($item->id_router == '') {
                    $valor = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["gender"])));
                    if ($valor == "Si") {
                        $this->CargarObjetoRouter();
                        $this->getRouter()->save();
                        $router = Router::find($this->getRouter()->id_router);
                        $this->FijarInstanciaDatosT($this->getdatosTecnicos()->find($item->id_datosTecnicos));
                        $this->CargarObjetoDatosTecnicos();
                        $this->getdatosTecnicos()->router()->associate($router);
                        $this->getdatosTecnicos()->save();

                        $this->fijarInstanciaDireccion($this->getDireccion()->find($item->id_direccion));
                        $this->CargarObetoDireccion();
                        $this->getDireccion()->save();
                        //modificar contrato
                        $this->fijarInstanciaCP($this->getContrato()->find($item->id_contrato));
                        $this->CargarObjetoContrato();
                        $this->getContrato()->save();
                        $this->MostrarMensajeModificado();
                    } else {
                        $this->FijarInstanciaDatosT($this->getdatosTecnicos()->find($item->id_datosTecnicos));
                        $this->CargarObjetoDatosTecnicos();
                        $this->getdatosTecnicos()->save();
                        $this->fijarInstanciaDireccion($this->getDireccion()->find($item->id_direccion));
                        $this->CargarObetoDireccion();
                        $this->getDireccion()->save();
                        $this->fijarInstanciaCP($this->getContrato()->find($item->id_contrato));
                        $this->CargarObjetoContrato();
                        $this->getContrato()->save();
                        $this->MostrarMensajeModificado();
                    }
                } else if ($item->id_router != '') {
                    $this->fijarInstanciaRouter($this->getRouter()->find($item->id_router));
                    $this->CargarObjetoRouter();
                    $this->getRouter()->save();
                    $this->FijarInstanciaDatosT($this->getdatosTecnicos()->find($item->id_datosTecnicos));
                    $this->CargarObjetoDatosTecnicos();
                    $this->getdatosTecnicos()->save();
                    $this->fijarInstanciaDireccion($this->getDireccion()->find($item->id_direccion));
                    $this->CargarObetoDireccion();
                    $this->getDireccion()->save();
                    $this->fijarInstanciaCP($this->getContrato()->find($item->id_contrato));
                    $this->CargarObjetoContrato();
                    $this->getContrato()->save();
                    $this->MostrarMensajeModificado();
                }
            }
        } else {
            redirect('contratar-plan/modificar/' . $id);
        }
    }

    public function FacturarContratoManualmente($id) {
        $this->utilidades->EstaPermitido('Administrador', $this->utilidades->rol());
        $data["titulo"] = "Crear Factura Manualmente";
        //$data["cliente"] = "active";
        $data["facturacionOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $data["listaF"] = $this->ListarContratoXid($id);
        $this->ci_smarty->vista('backend/factura/facturasManual', $data);
    }

    public function GuardarFacturaManual() {
        if (isset($_POST["totalPagar"])) {
            $fechaInicio = $this->security->xss_clean($_POST["fecha_inicio"]);
            $fechavencimiento = $this->security->xss_clean($_POST["fecha_vencimiento"]);
            if ($fechaInicio == "" || $fechavencimiento == "") {
                $this->getVentaPlan()->fecha_venta = $this->utilidades->PrimerDiaMes();
                $this->getMensualidad()->fecha_vencimiento = $this->utilidades->UltimoDiaMes();
            } else {
                $this->getVentaPlan()->fecha_venta = date("Y-m-d", strtotime($fechaInicio));
                $this->getMensualidad()->fecha_vencimiento = date("Y-m-d", strtotime($fechavencimiento));
            }
            $this->getDescuento()->porcentaje = 0;
            $this->getDescuento()->valor_descuento = 0;
            $this->getDescuento()->concepto = "";
            $this->getDescuento()->save();
            $descuento = Descuento::find($this->getDescuento()->id_descuento);
            $contrato = Contrato::find($this->security->xss_clean($_POST["id_contrato"]));
            //cargar datos de venta plan 
            $this->getVentaPlan()->iva_venta = $this->security->xss_clean($_POST["ivaPlan"]);
            $this->getVentaPlan()->total_venta = $this->security->xss_clean($_POST["totalPagar"]);
            $this->getVentaPlan()->saldo_instalacion = 0; //$this->security->xss_clean(addslashes(htmlspecialchars($_POST["saldoPendiente"])));
            $this->getVentaPlan()->numeroFactura = $this->utilidades->NumeroDeFactura();
            $this->getVentaPlan()->Descuento()->associate($descuento);
            $this->getVentaPlan()->Contrato()->associate($contrato);
            $this->getVentaPlan()->save();
            $venta = Venta_plan::find($this->getVentaPlan()->id_ventaPlan);
            //cargar datos de mensualidad
            //$this->getMensualidad()->fecha_vencimiento = $this->utilidades->UltimoDiaMes();
            $this->getMensualidad()->cantidad = 1;
            $this->getMensualidad()->valor_unitario = $this->security->xss_clean($_POST["costoPlan"]);
            $this->getMensualidad()->valor_total = $this->security->xss_clean($_POST["costoPlan"]);
            $this->getMensualidad()->Venta_plan()->associate($venta);
            $this->getMensualidad()->save();
            $this->session->set_flashdata('message', 'Factura creada con éxito');
            redirect("contratar-plan/listar");
        } else {
            redirect('facturas/crear-manualmente');
        }
    }

    private function ListarContratoXid($id) {
        $lista = Contrato::join('datos_tecnicos', 'contrato.id_datosTecnicos', '=', 'datos_tecnicos.id_datosTecnicos')
                ->leftJoin('antena', function($join) {
                    $join->on('datos_tecnicos.id_antena', '=', 'antena.id_antena');
                })
                ->leftJoin('nodo_enlazado', function($join) {
                    $join->on('datos_tecnicos.id_nodoEnlazado', '=', 'nodo_enlazado.id_nodoEnlazado');
                })
                ->leftJoin('plan', function($join) {
                    $join->on('contrato.id_plan', '=', 'plan.id_plan');
                })
                ->leftJoin('tipo_plan', function($join) {
                    $join->on('plan.id_tipoPlan', '=', 'tipo_plan.id_tipoPlan');
                })
                ->leftJoin('persona', function($join) {
                    $join->on('contrato.id_cliente', '=', 'persona.id_persona');
                })
                ->leftJoin('router', function($join) {
                    $join->on('datos_tecnicos.id_router', '=', 'router.id_router');
                })
                ->leftJoin('marca_router', function($join) {
                    $join->on('router.id_marcaRouter', '=', 'marca_router.id_marcaRouter');
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
                ->leftJoin('provincia', function($join) {
                    $join->on('canton.id_provincia', '=', 'provincia.id_provincia');
                })
                ->where('contrato.id_contrato', '=', $id)
                ->get();
        return $lista;
    }

    private function ListarContrato() {
        $listar = Contrato::join("plan", "contrato.id_plan", "=", "plan.id_plan")
                ->leftJoin('tipo_plan', function($join) {
                    $join->on('plan.id_tipoPlan', '=', 'tipo_plan.id_tipoPlan');
                })
                ->leftJoin('persona', function($join) {
                    $join->on('contrato.id_cliente', '=', 'persona.id_persona');
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
                ->get();
        return $listar;
    }

    public function generarPdf($id) {
        $lista = $this->ListarContratoXid($id);
        $pdf = new PDF();
        $pdf->AddPage();
        $pdf->SetTitle("ACUERDO DE CONTRATO");
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->SetXY(70, 40);
        $pdf->Cell(80, 5, utf8_decode("CONTRATO DE PRESTACIÓN DE SERVICIOS DE INTERNET"), 0, 1, "C");
        $pdf->Ln(3);
        if ($lista->count() > 0) {
            foreach ($lista as $item) {
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('Intervienen en la celebración del presente contrato de prestación de servicios, por una parte la compañía Master Technology Cia. Ltda. con RUC 1791918886001(en adelante Indynet), debidamente representada por el señor Francisco Lozano Lozano, en su calidad de gerente, y por otra parte el Sr(@). '.$item->nombres.' '.$item->apellidos.' , con C.I./RUC '.$item->cedula_ruc.' quienes libre, por mutuo acuerdo y voluntariamente celebran el presente contrato de prestación de servicios contenido en las siguientes clausulas:'));

                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("PRIMERA.- ANTECEDENTE:"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('Indynet  se encuentra autorizada para la prestación de servicios de valor agregado de acuerdo a la resolución número 382-17-CONATEL-2008 del 14 de Agosto del 2008.'));

                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("SEGUNDA.- OBJETO, CARACTERISTICAS Y ÓRDENES DE SERVICIO:"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('El presente contrato tiene por objeto que Indynet proporcione al cliente los servicios descritos en la ORDEN DE  SERVICIO, que forma parte integrante de este contrato.'));
                $pdf->MultiCell(190, 5, utf8_decode('Las partes aceptan que este Contrato constituya un contrato base ya que en adelante servicios adicionales, cambios en los servicios y cualquier otra modificación que se implemente; se realizarán mediante simples ORDENES DE SERVICIO, estas nuevas órdenes tendrán el mismo efecto jurídico y serán parte integrante de este contrato.'));

                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("TERCERA.- PRECIO Y FORMA DE PAGO:"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('El valor acordado por las partes por la instalación y puesta en funcionamiento de los servicios es el que consta en la ORDEN DE SERVICIO y lo constituirá para eventos posteriores el señalado en las posteriores ORDENES DE SERVICIOS.'));
                $pdf->MultiCell(190, 5, utf8_decode('Los valores mensuales serán pagados por el cliente a Indynet, por mes vencido, previa la recepción de las facturas correspondientes. En caso de que el cliente no cancele los valores hasta el 10 del mes siguiente, Indynet tienen la facultad de suspender la prestación de los servicios en cualquier momento.'));

                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("CUARTA.- PLAZO DE VIGENCIA"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('El presente contrato, tendrá un plazo de vigencia de un (1) año, contado a partir de la fecha de activación de los servicios. En caso de dudas, la fecha de activación será la de firma de las correspondientes actas de entrega recepción individual de cada uno de los servicios o enlaces contratados por el cliente.'));
                $pdf->Ln(2);
                $pdf->MultiCell(190, 5, utf8_decode('El plazo para la instalación y activación de los servicios será de cinco (5) días laborables a partir de la fecha de recepción de los valores correspondientes a la instalación y primer mes de consumo contemplados en la cláusula tercera. En caso de que el SUSCRIPTOR deseare darlo por terminado, deberá notificar a MASTER TECHNOLOGY CIA. LTDA con 30 días de anticipación y además deberá pagar a MASTER TECHNOLOGY CIA. LTDA cualquier valor pendiente de pago por cualquier concepto.'));

                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("QUINTA.- CALIDAD DEL SERVICIO"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('Salvo que en las órdenes de servicio se determine algo diferente, Indynet prestará sus servicios al cliente con las siguientes características:'));
                $pdf->MultiCell(190, 5, utf8_decode('* INTERNET.- Disponibilidad del 98% mensual calculada sobre la base de 720 horas al mes.'));
                $pdf->MultiCell(190, 5, utf8_decode('* TRANSMISION DE DATOS.- Disponibilidad del 98% mensual calculada sobre la base de 720 horas al mes.'));
                $pdf->MultiCell(190, 5, utf8_decode('Para el cálculo de no disponibilidad del servicio, no se considerará el tiempo durante el cual no se lo haya podido prestar  debido a circunstancias de caso fortuito o fuerza mayor, ni en el caso de intervención de terceros, ni la  degradación – interrupción del servicio causada por fallas de los equipos operados por el cliente, virus, software P2P, problemas de conexión eléctrica entre otros.'));
                $pdf->MultiCell(190, 5, utf8_decode('Tampoco se tomara en cuenta para el cálculo de no disponibilidad, los periodos de tiempo utilizados en mantenimientos preventivos  que se realicen a toda o parte de la red, aclarándose que los espacios de trabajo de mantenimiento deberán ser planificados  con anticipación y a medida de lo posible en días no laborables, para lo cual el cliente será notificado con anticipación.'));
                $pdf->MultiCell(190, 5, utf8_decode('El departamento técnico de Indynet recibirá los requerimientos del cliente a través de MSN: técnico-indynet@hotmail.com, telf.: 3029478 o al celular número  097393098, 086564646, 097390800 las 24 horas del día y dará solución a sus requerimientos lo antes posible.'));

                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("SEXTA.- INSTALACIONES:"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('Los equipos de enlace y demás que se requiera hasta llegar al lugar del cliente, son de propiedad y responsabilidad de Indynet.'));
                $pdf->MultiCell(190, 5, utf8_decode('El cliente es responsable que las instalaciones eléctricas dentro de su infraestructura cuenten con energía eléctrica aterrizada y estabilizada; El cliente se compromete a dar las facilidades al personal de Indynet para que se pueda hacer uso de los equipos, torres, fibras ópticas y demás, que lleguen hasta las instalaciones del cliente y reenviar las señales en forma independiente para atender a otros clientes de Indynet que se encuentren ubicados en las cercanías de las instalaciones del cliente.'));

                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("SEPTIMA.- TERMINACION:"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('Este contrato y cada una de las respectivas órdenes de servicio, que eventualmente las partes suscriban, terminarán su vigencia al finalizar sus respectivos plazos de duración si cualquiera de las partes comunica tal decisión por escrito con noventa días de anticipación a la fecha de terminación. Si no existe tal comunicación, se entenderá que el contrato ha sido renovado automáticamente por periodos mensuales, de la misma manera el consumidor podrá dar por terminado unilateralmente el contrato en cualquier tiempo, previa notificación por escrito con al menos quince días de anticipación a la finalización del periodo en curso según indica el artículo 44 de la Ley Orgánica de Defensa del Consumidor. '));
                $pdf->MultiCell(190, 5, utf8_decode('Indynet podrá dar por terminado el contrato unilateralmente en caso de que el cliente no cancele los valores señalados en las respectivas ordenes de servicio o en caso de fuerza mayor  como eventos de la naturaleza, cambios en la legislación, cambios en las licencias de servicio, cambios en las tarifas e impuestos que incrementen los costos de los servicios que presta.'));


                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("OCTAVA.- LIBERACION DE RESPONSABILIDAD:"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('El proveedor es responsable de la calidad y continuidad del servicio y de los perjuicios que ocasione al cliente el uso de los equipos y líneas de comunicación del proveedor, por lo tanto; el proveedor estaría exento de responsabilidad únicamente en el caso de que los daños producidos al usuario, sean imputables a terceros, el cliente libera de toda responsabilidad a Indynet y a todos y a cada uno de sus empleados, contratistas o subcontratistas por el mal uso que eventualmente diere a los servicios que se les preste, de la misma manera el usuario tiene todos y cada uno de los derechos establecidos en la Ley Especial de Telecomunicaciones, el Reglamento General, el Reglamento para la Prestación de Servicios de Valor Agregado y la Ley Orgánica de Defensa del Consumidor.'));


                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("NOVENA.- CONTROVERSIAS:"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('Para cualquier controversia acerca del alcance y efectos del presente contrato las partes se someten al proceso arbitral y de mediación de los centros de mediación y arbitraje legalmente establecidos en la ciudad de Loja y a acatar sus resoluciones.'));
                $pdf->Ln(2);
                $pdf->MultiCell(190, 5, utf8_decode('Para constancia de lo anterior, las partes firman en dos ejemplares del mismo tenor, en la ciudad de Loja, con fecha correspondiente '.$item->fecha_instalacion));
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(37, 5, "", 0);
                $pdf->Cell(90, 5, utf8_decode("MASTER TECHNOLOGY CIA. LTDA."), 0);
                $pdf->Cell(40, 5, utf8_decode("POR EL CLIENTE"), 0);
                $pdf->Ln(15);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(50, 5, "", 0);
                $pdf->Cell(70, 5, utf8_decode("Francisco Lozano Lozano"), 0);
                $pdf->Cell(40, 5, utf8_decode($item->nombres.' '.$item->apellidos), 0);
                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(60, 5, "", 0);
                $pdf->Cell(75, 5, utf8_decode("GERENTE"), 0);
                $pdf->Cell(40, 5, utf8_decode("CLIENTE"), 0);
                $pdf->Ln(2);

                $pdf->SetFont('Arial', 'B', 12);
                $pdf->Cell(20, 5, "", 0);
                $pdf->Cell(70, 5, utf8_decode("SOLICITUD SE SERVICIO Nº MT-00".$item->nroContrato), 0);
                $pdf->Cell(30, 5, "", 0);
                $pdf->Cell(15, 5, utf8_decode("CONTRATO Nº 00".$item->nroContrato), 0);
                $pdf->Ln(10);

                //DATOS DEL CLEINTE
                $pdf->Cell(0, 10, utf8_decode("DATOS DEL CLIENTE:"), 1, 1, 'C');
                //$pdf->Ln(1);
                $pdf->Cell(30, 5, utf8_decode('NOMBRE: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(160, 5, utf8_decode($item->nombres.' '.$item->apellidos), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('CÉDULA / RUC: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(160, 5, utf8_decode($item->cedula_ruc), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('PROVINCIA: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(40, 5, utf8_decode($item->nombre_provincia), 1);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(20, 5, utf8_decode('CANTÓN: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(40, 5, utf8_decode($item->nombre_canton), 1);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(25, 5, utf8_decode('PARROQUIA: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(35, 5, utf8_decode($item->nombre_parroquia), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('CALLES: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(120, 5, utf8_decode($item->calles), 1);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(25, 5, utf8_decode('NRO. CASA: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(15, 5, utf8_decode($item->numero_casa), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('REF. DE LUGAR: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(160, 5, utf8_decode($item->referencia), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('E-MAIL: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(160, 5, utf8_decode($item->email), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('TELÉFONO: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(65, 5, utf8_decode($item->telefono), 1);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('CELULAR: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(65, 5, utf8_decode($item->celular), 1);
                $pdf->Ln(10);

                //datos del circuito 
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 10, utf8_decode("DATOS DEL CIRCUITO:"), 1, 1, 'C');
                //$pdf->Ln(1);
                $pdf->Cell(30, 5, utf8_decode('PUNTO A: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(160, 5, utf8_decode("DOMICILIO ".$item->nombres), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('PUNTO B: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(160, 5, utf8_decode($item->nombre_nodoEnlazado." - Master Technology Cía. Ltda."), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('CONT. TÉCNICO: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(80, 5, utf8_decode("Manuel Lozano Lozano"), 1);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(40, 5, utf8_decode('CELULAR: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(40, 5, utf8_decode('0997393098'), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('INTERFAZ: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(40, 5, utf8_decode("Ethernet - Inalámbrico"), 1);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(25, 5, utf8_decode('VELOCIDAD: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(95, 5, utf8_decode($item->velocidad." ".$item->descripcion." ".$item->nombre), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(35, 5, utf8_decode('TIPO DE CIRCUITO:'), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(15, 5, utf8_decode("Local:"), 1);
                $pdf->Cell(10, 5, utf8_decode(""), 1);
                $pdf->Cell(25, 5, utf8_decode("Provincial:"), 1);
                $pdf->Cell(10, 5, utf8_decode(""), 1);
                $pdf->Cell(20, 5, utf8_decode("Regional:"), 1);
                $pdf->Cell(10, 5, utf8_decode(""), 1);
                $pdf->Cell(20, 5, utf8_decode("Nacional"), 1);
                $pdf->Cell(10, 5, utf8_decode(""), 1);
                $pdf->Cell(25, 5, utf8_decode("Internacional:"), 1);
                $pdf->Cell(10, 5, utf8_decode(""), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(60, 5, utf8_decode('DURACIÓN DEL CONTRATO: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, utf8_decode("12 Meses"), 1);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(60, 5, utf8_decode('FECHA DE INICIO DEL SERVICIO: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(50, 5, utf8_decode($item->fecha_instalacion), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('RESIDENCIAL: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(65, 5, utf8_decode(""), 1);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode('CORPORATIVO: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(65, 5, utf8_decode(""), 1);
                $pdf->Ln(10);

                //datos equipos instaldos en el cliente
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 10, utf8_decode("EQUIPOS INSTALADOS EN EL CLIENTE:"), 1, 1, 'C');
                $pdf->Cell(30, 5, utf8_decode('CANTIDAD '), 1);
                $pdf->Cell(80, 5, utf8_decode('EQUIPO '), 1);
                $pdf->Cell(40, 5, utf8_decode('MARCA '), 1);
                $pdf->Cell(40, 5, utf8_decode('NRO. SERIE '), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(30, 5, utf8_decode('1'), 1);
                $pdf->Cell(80, 5, utf8_decode($item->nombre_antena." ".$item->frecuencia), 1);
                $pdf->Cell(40, 5, utf8_decode(' '), 1);
                $pdf->Cell(40, 5, utf8_decode(''), 1);
                $pdf->Ln(10);

                //datos d etarifa
                //datos del circuito 
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 10, utf8_decode("TARIFAS:"), 1, 1, 'C');
                //$pdf->Ln(1);
                $pdf->Cell(90, 5, utf8_decode(' INSTALACIÓN E  INSCRIPCIÓN (pago único): '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(100, 5, utf8_decode("$ ".$item->valorInstalacion), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(90, 5, utf8_decode('TARIFA MENSUAL POR SERVICIO:'), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(100, 5, utf8_decode("$ ".$item->valor_mensual), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(90, 5, utf8_decode('TARIFA MENSUAL RENTA DE EQUIPOS:'), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(100, 5, utf8_decode("$ 0.00"), 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(50, 5, utf8_decode('NOTA: '), 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(140, 5, utf8_decode("A las tarifas indicadas se le aplicará los impuestos correspondientes."), 1);

                $pdf->Ln(10);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 5, utf8_decode("OBSERVACIONES:"), 0, 1, 'c');
                $pdf->Ln(1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('1. El cliente deberá incluir con esta solicitud la copia del RUC o C.I'));
                $pdf->Ln(2);
                $pdf->MultiCell(190, 5, utf8_decode('2. Este Circuito será utilizado por el Cliente única y exclusivamente para TRANSMISION DE DATOS. En caso de trasgresión estará sujeto a las penalidades previstas en el Contrato y en la Ley.'));
                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->MultiCell(190, 5, utf8_decode('Yo, '.$item->nombres.' '.$item->apellidos.', acepto el inicio de los trabajos de implementación, así como a cancelar todos los valores que se deduzcan de esta operación (inscripción, pensión básica, arrendamiento de equipos y materiales usados).'));

                $pdf->Ln(16);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(60, 5, "", 0);
                $pdf->Cell(75, 5, utf8_decode("POR INDYNET"), 0);
                $pdf->Cell(40, 5, utf8_decode("CLIENTE"), 0);
                $pdf->Ln(3);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(50, 5, "", 0);
                $pdf->Cell(70, 5, utf8_decode("Francisco Lozano Lozano"), 0);
                $pdf->Cell(40, 5, utf8_decode($item->nombres.' '.$item->apellidos), 0);
            }

            $pdf->Output();
        }
    }

    private function MostrarMensajeModificado() {
        echo '<div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <div class=" text-center alert alert-success">
                                            <button class="close" data-dismiss="alert"></button> 
                                            <strong>Felicidades</strong> Se ha modificado correctamente
                                        </div>
                                    </div>
                                </div>';
    }

}
