<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Facturacion_control extends CI_Controller {

    private $detalleM = null;
    private $descuento = null;
    private $venta = null;

    public function __construct() {
        parent::__construct();
        $this->load->model("Detalle_mensualidad");
        $this->load->model("Descuento");
        $this->load->model("Venta_plan");
        $this->utilidades->EstaLogeado();
    }

    public function getDetallemensualidad() {
        if ($this->detalleM == NULL) {
            $this->detalleM = new Detalle_mensualidad();
        }
        return $this->detalleM;
    }

    public function getDescuento() {
        if ($this->descuento == NULL) {
            $this->descuento = new Descuento();
        }
        return $this->descuento;
    }

    public function getVentaPlan() {
        if ($this->venta == null) {
            $this->venta = new Venta_plan();
        }
        return $this->venta;
    }

    public function FijarInstancia($detalleM) {
        $this->detalleM = $detalleM;
    }

    public function fijarInstanciaVenta($venta) {
        $this->venta = $venta;
    }

    public function fijarInstanciaDescuento($descuento) {
        $this->descuento = $descuento;
    }

    public function ListarFacturasXCliente() {
        $this->utilidades->EstaPermitidoTresRoles('Administrador', 'Cliente', 'Empleado', $this->utilidades->rol());
        $data["titulo"] = "Facturas - Listar";
        $data["lista"] = $this->BuscarFacturaXCeduala($this->utilidades->Usuario('usuario'));
        $data["facturasOpen"] = 'active open';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/factura/listar', $data);
    }

    public function FacturasPendientes() {
        $this->utilidades->EstaPermitidoDosRoles('Administrador', 'Empleado', $this->utilidades->rol());
        $data["titulo"] = "Facturas - Pendientes";
        $data["lista"] = $this->ListarFacturasXEstado("Pendiente");
        $data["facturacionOpen"] = 'active open';
        $data["facturasPendientes"] = 'active';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/factura/listar_pendientes', $data);
    }

    public function FacturasPagados() {
        $this->utilidades->EstaPermitidoDosRoles('Administrador', 'Empleado', $this->utilidades->rol());
        $data["titulo"] = "Facturas - Pagadas";
        $data["lista"] = $this->ListarFacturasXEstado("Pagado");
        $data["facturacionOpen"] = 'active open';
        $data["facturasPagados"] = 'active';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/factura/listar_pagados', $data);
    }

    public function verEditar($id) {
        $this->utilidades->EstaPermitidoDosRoles('Administrador', 'Empleado', $this->utilidades->rol());
        // $this->FijarInstancia($this->getDetallemensualidad()->find($id));
        $data["titulo"] = "Facturas - Descuentos";
        $data["facturacionOpen"] = 'active open';
        $data["lista"] = $this->BuscarFacturaXId($id);
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/factura/descuento_factura', $data);
    }

    public function ModificarFactura($id) {
        if ($this->validar() == TRUE) {
            // $this->fijarInstancia($this->getRouter()->find($id));
            $lista = $this->BuscarFacturaXId($id);
            if ($lista->count() > 0) {
                foreach ($lista as $item) {
                    $this->fijarInstanciaDescuento($this->getDescuento()->find($item->id_descuento));
                    $this->CargarObjetoDescuento();
                    $this->getDescuento()->save();
                    $this->fijarInstanciaVenta($this->getVentaPlan()->find($item->id_ventaPlan));
                    $this->CargarObjetoVenta();
                    $this->getVentaPlan()->save();
                    $this->session->set_flashdata('message', 'descuento guardado con éxito');
                    redirect('facturas-pendientes');
                }
            }
        } else {
            redirect('facturas-descuento/' . $id);
        }
    }

    private function CargarObjetoDescuento() {
        $this->getDescuento()->porcentaje = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["opcionesDescuentos"])));
        $this->getDescuento()->valor_descuento = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["DescuentoPlan"])));
        $this->getDescuento()->concepto = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["conceptoDesc"])));
    }

    private function CargarObjetoVenta() {
        $this->getVentaPlan()->iva_venta = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["ivaPlan"])));
        $this->getVentaPlan()->total_venta = $this->security->xss_clean(addslashes(htmlspecialchars($_POST["totalPagar"])));
    }

    private function validar() {
        $this->form_validation->set_rules('ivaPlan', 'ivaPlan', 'required|trim');
        $this->form_validation->set_rules('opcionesDescuentos', 'opcionesDescuentos', 'required|trim');
        $this->form_validation->set_rules('totalPagar', 'totalPagar', 'required|trim');
        $this->form_validation->set_message('required', 'se requiere un valor en el campo %s');
        return $this->form_validation->run();
    }

    public function GenerarPDFFacturas($id) {
        $factura = $this->BuscarFacturaXIdCEdulaEStado($id, $this->utilidades->Usuario('usuario'));
        if ($factura->count() > 0) {
            foreach ($factura as $item) {
                $pdf = new FPDF('P', 'mm', 'A5');
                $pdf->AddPage();
                //encabezad
                $pdf->SetTitle("COMPROBANTE DE PAGO NRO.: " . $item->numeroFactura);
                $pdf->Image(base_url() . 'assets/layouts/layout/img/cabecera.png', 10, 1, 130);
                $pdf->Ln(23);
                $pdf->SetFont('Arial', 'B', 12);
                $pdf->Cell(0, 10, ' COMPROBANTE DE PAGO', 0, 0, 'C');
                $pdf->Ln(8);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(0, 10, utf8_decode(' COMPROBANTE Nº: ' . $item->numeroFactura), 0, 0, 'C');
                $pdf->Ln(15);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, "Cliente: ", 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(60, 5, utf8_decode($item->nombres . " " . $item->apellidos), 0);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode("Dirección: "), 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(60, 5, utf8_decode($item->nombre_canton . " - " . $item->nombre_parroquia), 0);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode("Cédula o Ruc:"), 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(60, 5, utf8_decode($item->cedula_ruc), 0);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode("Fecha Pagado:"), 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(50, 5, utf8_decode($item->fecha_pagado), 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(20, 5, utf8_decode("Teléfono:"), 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, utf8_decode($item->celular), 0);

                $pdf->Ln(10);
                //creaar factura
                //cabecera d etalla
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(10, 5, "Cant.", 1);
                $pdf->Cell(90, 5, "Detalle", 1);
                $pdf->Cell(15, 5, "V.Unit.", 1);
                $pdf->Cell(15, 5, "V.Tot.", 1);
                //cuerpo de tabla 
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Ln(8);
                $pdf->Cell(10, 5, $item->cantidad, 0);
                $pdf->Cell(90, 5, utf8_decode($item->nombre), 0);
                $pdf->Cell(15, 5, "", 0);
                $pdf->Cell(15, 5, "", 0);
                $pdf->Ln(5);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(90, 5, utf8_decode(" velocidad " . $item->velocidad . " " . $item->descripcion), 0);
                $pdf->Cell(15, 5, number_format($item->valor_unitario, 2), 0);
                $pdf->Cell(15, 5, number_format($item->valor_total, 2), 0);
                //mostrar calculo de subotles parciales
                $pdf->Ln(10);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(60, 5, "", 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(40, 5, "SUBTOTAL", 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, number_format($item->valor_total, 2), 1);
                $pdf->Ln(5);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(60, 5, "Periodo de consumo:", 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(40, 5, "DESCUENTO " . $item->porcentaje . " %", 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, number_format($item->valor_descuento, 2), 1);
                $pdf->Ln(5);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(60, 5, $item->fecha_venta . " / " . $item->fecha_vencimiento, 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(40, 5, "I.V.A 12 % ", 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, number_format($item->iva_venta, 2), 1);
                $valor = $item->valor_total + $item->iva_venta - $item->valor_descuento;
                if ($item->total_venta > $valor) {
                    $pdf->Ln(5);
                    $pdf->Cell(10, 5, "", 0);
                    $pdf->Cell(60, 5, "", 0);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->Cell(40, 5, "RECARGO DE INST.", 1);
                    $pdf->SetFont('Arial', 'I', 10);
                    $pdf->Cell(20, 5, number_format($item->total_venta - $valor, 2), 1);
                }
                $pdf->Ln(5);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(60, 5, "", 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(40, 5, "TOTAL A PAGAR", 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, number_format($item->total_venta, 2), 1);
                $pdf->Ln(10);
                $pdf->Cell(5, 5, "", 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(10, 5, utf8_decode('SON: ' . $this->cantidadletras->num2letras(number_format($item->total_venta, 2))), 0);
            }
            $pdf->Ln(35);
            $pdf->SetFont('Arial', 'B', 8);
            $pdf->Cell(30, 5, '', 0);
            $pdf->Cell(40, 5, 'FIRMA AUTORIZADA', 0);
            $pdf->Cell(5, 5, '', 0);
            $pdf->Cell(40, 5, utf8_decode("FIRMA CLIENTE"), 0);
            $pdf->Image(base_url() . 'assets/layouts/layout/img/sello.png', 35, 155, 40);
            $pdf->Ln(5);
            $pdf->SetFont('Arial', 'I', 8);
            $pdf->Cell(0, 10, utf8_decode('Descargado desde: ' . base_url() . 'facturas/listar/'), 0, 0, 'C');
            //pie de pagina
            $pdf->Image(base_url() . 'assets/layouts/layout/img/pie.png', 50, 185, 90);
            $pdf->Output();
        } else {
            redirect('facturas/listar');
        }
    }

    public function GenerarPDFFacturasAdmin($id) {
        $factura = $this->BuscarFacturaXId($id);
        if ($factura->count() > 0) {
            foreach ($factura as $item) {
                $pdf = new FPDF('P', 'mm', 'A5');
                $pdf->AddPage();
                $pdf->SetTitle("IMPRIMIR FACTURAS");
                $pdf->Ln(40);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, "Cliente: ", 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(60, 5, utf8_decode($item->nombres . " " . $item->apellidos), 0);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode("Dirección: "), 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(60, 5, utf8_decode($item->nombre_canton . " - " . $item->nombre_parroquia), 0);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode("Cédula o Ruc:"), 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(60, 5, utf8_decode($item->cedula_ruc), 0);
                $pdf->Ln(5);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(30, 5, utf8_decode("Fecha Pagado:"), 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(50, 5, utf8_decode($item->fecha_pagado), 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(20, 5, utf8_decode("Teléfono:"), 0);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, utf8_decode($item->celular), 0);

                $pdf->Ln(10);
                //creaar factura
                //cabecera d etalla
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(10, 5, "Cant.", 1);
                $pdf->Cell(90, 5, "Detalle", 1);
                $pdf->Cell(15, 5, "V.Unit.", 1);
                $pdf->Cell(15, 5, "V.Tot.", 1);
                //cuerpo de tabla 
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Ln(8);
                $pdf->Cell(10, 5, $item->cantidad, 0);
                $pdf->Cell(90, 5, utf8_decode($item->nombre), 0);
                $pdf->Cell(15, 5, "", 0);
                $pdf->Cell(15, 5, "", 0);
                $pdf->Ln(5);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(90, 5, utf8_decode(" velocidad " . $item->velocidad . " " . $item->descripcion), 0);
                $pdf->Cell(15, 5, number_format($item->valor_unitario, 2), 0);
                $pdf->Cell(15, 5, number_format($item->valor_total, 2), 0);
                //mostrar calculo de subotles parciales
                $pdf->Ln(10);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(60, 5, "", 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(40, 5, "SUBTOTAL", 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, number_format($item->valor_total, 2), 1);
                $pdf->Ln(5);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(60, 5, "Periodo de consumo:", 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(40, 5, "DESCUENTO " . $item->porcentaje . " %", 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, number_format($item->valor_descuento, 2), 1);
                $pdf->Ln(5);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(60, 5, $item->fecha_venta . " / " . $item->fecha_vencimiento, 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(40, 5, "I.V.A 12 % ", 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, number_format($item->iva_venta, 2), 1);
                $valor = $item->valor_total + $item->iva_venta - $item->valor_descuento;
                if ($item->total_venta > $valor) {
                    $pdf->Ln(5);
                    $pdf->Cell(10, 5, "", 0);
                    $pdf->Cell(60, 5, "", 0);
                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->Cell(40, 5, "RECARGO DE INST.", 1);
                    $pdf->SetFont('Arial', 'I', 10);
                    $pdf->Cell(20, 5, number_format($item->total_venta - $valor, 2), 1);
                }
                $pdf->Ln(5);
                $pdf->Cell(10, 5, "", 0);
                $pdf->Cell(60, 5, "", 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(40, 5, "TOTAL A PAGAR", 1);
                $pdf->SetFont('Arial', 'I', 10);
                $pdf->Cell(20, 5, number_format($item->total_venta, 2), 1);
                $pdf->Ln(10);
                $pdf->Cell(5, 5, "", 0);
                $pdf->SetFont('Arial', 'B', 10);
                $pdf->Cell(10, 5, utf8_decode('SON: ' . $this->cantidadletras->num2letras(number_format($item->total_venta, 2))),0);
            }
            $pdf->Output();
        } else {
            redirect('facturas-pagadas');
        }
    }

    private function BuscarFacturaXCeduala($cedula_ruc) {
        $facturacion = Detalle_mensualidad::join("venta_plan", "detalle_mensualidad.id_ventaPlan", "=", "venta_plan.id_ventaPlan")
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
                ->orderBy('detalle_mensualidad.id_detalleMensualidad', 'desc')
                //->select('detalle_mensualidad.*')
                ->where('persona.cedula_ruc', '=', $cedula_ruc)
                //->orderBy('detalle_mensualidad.id_detalleMensualidad', 'desc')
                ->get();
        return $facturacion;
    }

    private function BuscarFacturaXId($id) {
        $facturacion = Detalle_mensualidad::join("venta_plan", "detalle_mensualidad.id_ventaPlan", "=", "venta_plan.id_ventaPlan")
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
                //->orderBy('detalle_mensualidad.id_detalleMensualidad', 'desc')
                //->select('detalle_mensualidad.*')
                ->where('detalle_mensualidad.id_detalleMensualidad', '=', $id)
                ->get();
        return $facturacion;
    }

    private function ListarFacturasXEstado($estado) {
        $facturacion = Detalle_mensualidad::join("venta_plan", "detalle_mensualidad.id_ventaPlan", "=", "venta_plan.id_ventaPlan")
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
                //->orderBy('detalle_mensualidad.id_detalleMensualidad', 'desc')
                //->select('detalle_mensualidad.*')
                ->where('detalle_mensualidad.estado', '=', $estado)
                ->get();
        return $facturacion;
    }

    private function BuscarFacturaXIdCEdulaEStado($id, $cedulaRuc) {
        $facturacion = Detalle_mensualidad::join("venta_plan", "detalle_mensualidad.id_ventaPlan", "=", "venta_plan.id_ventaPlan")
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
                //->orderBy('detalle_mensualidad.id_detalleMensualidad', 'desc')
                //->select('detalle_mensualidad.*')
                ->where('detalle_mensualidad.id_detalleMensualidad', '=', $id)
                ->where('detalle_mensualidad.estado', '=', "Pagado")
                ->where('persona.cedula_ruc', '=', $cedulaRuc)
                ->get();
        return $facturacion;
    }

}
