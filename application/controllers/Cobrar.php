<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cobrar extends CI_Controller {

    private $ventaPlan = null;
    private $mensualidad = null;

    public function __construct() {
        parent::__construct();

        $this->load->model("Detalle_mensualidad");
        $this->load->model("Venta_plan");
        $this->load->model("Contrato");
        $this->utilidades->EstaLogeado();
    }

    public function getMensualidad() {
        if ($this->mensualidad == null) {
            $this->mensualidad = new Detalle_mensualidad();
        }
        return $this->mensualidad;
    }

    public function getVenta() {
        if ($this->ventaPlan == null) {
            $this->ventaPlan = new Venta_plan();
        }
        return $this->ventaPlan;
    }

    public function fijarInstanciaVentaPlan($ventaPlan) {
        $this->ventaPlan = $ventaPlan;
    }

    public function fijarInstanciaMensualidad($mensualidad) {
        $this->mensualidad = $mensualidad;
    }

    public function nuevaInstanciaVentaPlan() {
        $this->ventaPlan = NULL;
    }

    public function nuevaInstanciaMensualidad() {
        $this->mensualidad = NULL;
    }

    //mostrar facturar para cobrar
    public function Plan() {
        $this->utilidades->EstaPermitidoDosRoles('Administrador', 'Empleado', $this->utilidades->rol());
        $data["titulo"] = "Cobrar - Planes";
        $data["facturacionOpen"] = 'active open';
        $data["cobrarPlanes"] = 'active';
        $data["rol"] = $this->utilidades->rol();
        $this->ci_smarty->vista('backend/factura/factura', $data);
    }

//    cargar factura x numero de cedula
    public function ImprimirFactura() {
        $this->utilidades->EstaPermitidoDosRoles('Administrador', 'Empleado', $this->utilidades->rol());
        $cedula_ruc = $this->security->xss_clean($_POST["valor"]);
        if (isset($cedula_ruc)) {
            $total = 0;
            $facturacion = $this->BuscarFacturaXCeduala($cedula_ruc);
            if ($facturacion->count() > 0) {
                foreach ($facturacion as $item) {
                    echo '<div class="table-scrollable">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Cliente:</th>
                                                        <th colspan="1">' . $item->apellidos . " " . $item->nombres . '</th>
                                                        <th colspan="2"> Nro. de Factura: '. $item->numeroFactura .'</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Lugar de Servicio:</th>
                                                        <th colspan="3">' . $item->nombre_canton . " - " . $item->nombre_parroquia ." , ".$item->calles.'</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Periodo de Consumo:</th>
                                                        <th colspan="3">' . $item->fecha_venta . " - " . $item->fecha_vencimiento . '</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Cant.</th>
                                                        <th>Descripción</th>
                                                        <th>Valor Unitario</th>
                                                        <th>Valor Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right">1</td>
                                                        <td>' . $item->nombre . " velocidad " . $item->velocidad . " " . $item->descripcion . '</td>
                                                        <td class="text-right">' . number_format($item->valor_unitario, 2) . '</td>
                                                        <td class="text-right">' . number_format($item->valor_total, 2) . '</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" rowspan="6" class="text-center"></td>
                                                        <td class="text-right"><strong>Subtotal</strong></td>
                                                        <td class="text-right">' .  number_format( $item->valor_total, 2) . '</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Descuento ' . $item->porcentaje . "%" . '</strong></td>
                                                        <td class="text-right">' . number_format($item->valor_descuento, 2) . '</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Iva</strong></td>
                                                        <td class="text-right">' . number_format($item->iva_venta, 2) . '</td>
                                                    </tr>';
                    if ($item->saldo_instalacion > 0) {
                        echo ' <tr>
                                                        <td class="text-right"><strong>Recargo de Instalación</strong></td>
                                                        <td class="text-right">' . number_format($item->saldo_instalacion, 2) . '</td>
                                                    </tr>';
                    }
                    $total +=$item->total_venta;

                    echo '      <tr>
                                                        <td class="text-right"><strong>TOTAL</strong></td>
                                                        <td class="text-right">' . number_format($item->total_venta, 2) . '</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                          ';
                }

                echo '<div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <div class="form-actions">
                                                <input type="hidden" id="totalPagar" name="totalPagar" value="' . $total . '">
                                                <h4 class="text-right"><strong>TOTAL A PAGAR: ' . number_format($total, 2) . ' $</strong></h4>
                                                <button onclick="GuardarPagos()"type="button" class="btn btn-primary pull-left"><i class="fa fa-save"></i> COBRAR </button> &nbsp;
                                            </div>
                                        </div>
                                    </div> ';
            } else {
                echo '<div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <div class=" text-center alert alert-info">
                                            <button class="close" data-dismiss="alert"></button> 
                                            <strong>Información</strong> Cliente no tiene facturas por pagar
                                        </div>
                                    </div>
                                </div>
                                 ';
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }



    //modificar estado de factura
    public function ConfirmarPagoFactura() {
        $this->utilidades->EstaPermitidoDosRoles('Administrador', 'Empleado', $this->utilidades->rol());
        $cedula_ruc = $this->security->xss_clean($_POST["valor"]);
        if (isset($cedula_ruc)) {
            $facturacion = $this->BuscarFacturaXCeduala($cedula_ruc);
            $fecha_pagado = new DateTime();
            if ($facturacion->count() > 0) {
                foreach ($facturacion as $item) {
                    $this->fijarInstanciaVentaPlan($this->getVenta()->find($item->id_ventaPlan));
                    $this->getVenta()->saldo_instalacion = 0;
                    // $this->getVenta()->estado_instalacion = "Pagado";
                    $this->getVenta()->save();
                    $this->nuevaInstanciaVentaPlan();
                    //modificar mensualidad
                    $this->fijarInstanciaMensualidad($this->getMensualidad()->find($item->id_detalleMensualidad));
                    $this->getMensualidad()->estado = "Pagado";
                    $this->getMensualidad()->fecha_pagado = $fecha_pagado->format('Y/m/d');
                    $this->getMensualidad()->save();
                    $this->nuevaInstanciaMensualidad();
                }
                echo '<div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <div class=" text-center alert alert-success">
                                            <button class="close" data-dismiss="alert"></button> 
                                            <strong>Felicidades</strong> Factura guardada con éxito 
                                        </div>
                                    </div>
                                </div>
                                 ';
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    private function BuscarFacturaXCeduala($cedula_ruc) {
        $facturacion = Detalle_mensualidad::join("venta_plan", "detalle_mensualidad.id_ventaPlan", "=", "venta_plan.id_ventaPlan")
                ->leftJoin('descuento', function($join) {
                    $join->on('venta_plan.id_descuento', '=', 'descuento.id_descuento');
                })
                ->leftJoin('contrato', function($join) {
                    $join->on('venta_plan.id_contrato', '=', 'contrato.id_contrato')->where('detalle_mensualidad.estado', '=', "Pendiente");
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
                ->get();
        return $facturacion;
    }

}
