<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jquery_control extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Persona");
        $this->load->model("Marca_router");
        $this->load->model("Canton");
        $this->load->model("Parroquias");
        $this->utilidades->EstaLogeado();
    }

    //cargar combos con opciones de pago de instalacion
    public function MostarOpcionDePagosInstalcion() {
        $valor_instalacion = $this->input->post("valor_instalacion");
        if (isset($valor_instalacion)) {
            if ($valor_instalacion > 0) {
                echo '<label class="control-label col-md-3 col-sm-3 col-xs-12" for="paga_instalacion">Pago de Instalación *</label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <select class="chosen-select form-control col-md-7 col-xs-12" id="paga_instalacion" name="paga_instalacion" onchange="OpcionPago()">
                                            <option value="">Seleccione -------></option>
                                            <option value="Si">Pagado</option>
                                            <option value="No">No Pagado</option>
                                            <option value="3">Dos Pagos</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>';
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    //mostrar opciones de pagos seleccionado x combo
    public function ValorDeInstalacion() {
        $valor = $this->input->post("valor");
        $valor_instalacion = $this->input->post("valor_instalacion");
        $valorMensual = $this->input->post("valorMensual");
        $iva = $valorMensual * 0.12;
        $total = $valorMensual + $iva;
        $total1 = $total + $valor_instalacion;
        if (isset($valor) && isset($valor_instalacion) && isset($valorMensual)) {
            if ($valorMensual > 0) {
                $descuento = '<div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opcionesDescuentos">Descuento *
                                            <span class="required"> </span>
                                        </label>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <select id="opcionesDescuentos" name="opcionesDescuentos" class="form-control chosen-select" onchange="CalcularDescuentos();" >
                                                <option value="">Seleccione---------></option>
                                                <option value="0">De 1 a 3 días 0%</option>
                                                <option value="15">De 4 a 5 días 15%</option>
                                                <option value="30">De 6 a 10 días 30%</option>
                                                <option value="50">De 11 a 15 días 50%</option>
                                                <option value="65">De 16 a 20 días 65%</option>
                                                <option value="80">De 21 a 25 días 80%</option>
                                                <option value="90">De 26 a 28 días 90%</option>
                                                <option value="99">De 29 a 30 días 99%</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <label class="control-label"></label>
                                        </div>
                                    </div>  
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="conceptoDesc">Concepto
                                            <span class="required"> </span>
                                        </label>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <textarea id="conceptoDesc" class="form-control" name="conceptoDesc" rows="3"  ></textarea>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <label class="control-label"></label>
                                        </div>
                                    </div>  ';
                if ($valor == "Si") {
                    $tabla1 = '<div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"> Detalles a Pagar el Primer Mes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Valor Mensual</td>
                                                    <td> <input type="text" id="costoPlan"class="form-control col-md-7 col-xs-12"name="costoPlan" value="' . $valorMensual . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>Descuento</td>
                                                    <td> <input type="text" id="DescuentoPlan"class="form-control col-md-7 col-xs-12"name="DescuentoPlan" value="0" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>SubTotal</td>
                                                    <td> <input type="text" id="valordeTotalPlan"class="form-control col-md-7 col-xs-12"name="valorTotalPlan" value="' . $valorMensual . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>IVA del Plan</td>
                                                    <td> <input type="text" id="ivaPlan"class="form-control col-md-7 col-xs-12"name="ivaPlan" value="' . $this->utilidades->redondearDecimales($iva) . '" readonly="readonly"></td>
                                                </tr>
                                                 <tr>
                                                    <td>Recargo de Instalación</td>
                                                    <td><input type="text" id="saldoPendiente"class="form-control col-md-7 col-xs-12"name="saldoPendiente" value="0" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Total a Pagar</strong></td>
                                                    <td> <input type="text" id="totalPagar"class="form-control col-md-7 col-xs-12"name="totalPagar" value="' . $this->utilidades->redondearDecimales($total) . '" readonly="readonly"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                         <input type="hidden" id="valorFinalPlan" value="' . $this->utilidades->redondearDecimales($total) . '"name="valorFinalPlan">
                                    </div>
                                </div>
                                <div class="col-md-3"></div>';
                    echo $descuento . $tabla1;
                } elseif ($valor == "No") {
                    $total1 = $total + $valor_instalacion;
                    $tabla2 = '<div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"> Detalles a Pagar el Primer Mes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Valor Mensual</td>
                                                    <td> <input type="text" id="costoPlan"class="form-control col-md-7 col-xs-12"name="costoPlan" value="' . $valorMensual . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>Descuento</td>
                                                    <td> <input type="text" id="DescuentoPlan"class="form-control col-md-7 col-xs-12"name="DescuentoPlan" value="0" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>SubTotal</td>
                                                    <td> <input type="text" id="valordeTotalPlan"class="form-control col-md-7 col-xs-12"name="valorTotalPlan" value="' . $valorMensual . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>IVA del Plan</td>
                                                    <td> <input type="text" id="ivaPlan"class="form-control col-md-7 col-xs-12"name="ivaPlan" value="' . $this->utilidades->redondearDecimales($iva) . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>Recargo de Instalación</td>
                                                    <td><input type="text" id="saldoPendiente"class="form-control col-md-7 col-xs-12"name="saldoPendiente" value="' . $valor_instalacion . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Total a Pagar</strong></td>
                                                    <td> <input type="text" id="totalPagar"class="form-control col-md-7 col-xs-12"name="totalPagar" value="' . $this->utilidades->redondearDecimales($total1) . '" readonly="readonly"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <input type="hidden" id="valorFinalPlan" value="' . $this->utilidades->redondearDecimales($total) . '"name="valorFinalPlan">
                                    </div>
                                </div>
                                <div class="col-md-3"></div>';
                    echo $descuento . $tabla2;
                } elseif ($valor == "3") {
                    $valorPagado = '<div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valorPagado">Valor Pagado *
                                            <span class="required"> </span>
                                        </label>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <input id="valorPagado" name="valorPagado"class="form-control col-md-7 col-xs-12" value="' . 00.00 . '" type="text" onkeypress="return SoloNumerosDecimales(event,' . "'0.0', 6, 2);" . '" onkeyup="calcularValorPagar()" >
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <label class="control-label"> $</label>
                                        </div>
                                    </div>';
                    $tabla3 = '<div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"> Detalles a Pagar el Primer Mes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Valor Mensual</td>
                                                    <td> <input type="text" id="costoPlan"class="form-control col-md-7 col-xs-12"name="costoPlan" value="' . $valorMensual . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>Descuento</td>
                                                    <td> <input type="text" id="DescuentoPlan"class="form-control col-md-7 col-xs-12"name="DescuentoPlan" value="0" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>SubTotal</td>
                                                    <td> <input type="text" id="valordeTotalPlan"class="form-control col-md-7 col-xs-12"name="valorTotalPlan" value="' . $valorMensual . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>IVA del Plan</td>
                                                    <td> <input type="text" id="ivaPlan"class="form-control col-md-7 col-xs-12"name="ivaPlan" value="' . $this->utilidades->redondearDecimales($iva) . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td>Recargo de Instalación</td>
                                                    <td><input type="text" id="saldoPendiente"class="form-control col-md-7 col-xs-12"name="saldoPendiente" value="' . $valor_instalacion . '" readonly="readonly"></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Total a Pagar</strong></td>
                                                    <td> <input type="text" id="totalPagar"class="form-control col-md-7 col-xs-12"name="totalPagar" value="' . $this->utilidades->redondearDecimales($total1) . '" readonly="readonly"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                         <input type="hidden" id="valorFinalPlan" value="' . $this->utilidades->redondearDecimales($total) . '"name="valorFinalPlan">
                                    </div>
                                </div>
                                <div class="col-md-3"></div>';
                    // echo $valorPagado . $saldoPendiente;
                    echo $valorPagado . $descuento . $tabla3;
                }
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    public function CargarCliente() {
        $cedula_ruc = $this->input->post("cedula_ruc");
        if (isset($cedula_ruc)) {
            $usuario = "";
            $lista = Persona::where("cedula_ruc", $cedula_ruc)->get();
            if ($lista->count() > 0) {
                foreach ($lista as $registro) {
                    echo '<div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cliente">Cliente *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12" >
                                        <input  name="cliente"class="form-control col-md-7 col-xs-12" value="' . $registro->apellidos . ' ' . $registro->nombres . '" type="text" readonly="readonly">
                                    </div>
                                </div>';
                }
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    public function MostrarDatosdeRouter() {
        $valor = $this->input->post("valor");
        if (isset($valor)) {
            if ($valor == "Si") {
                $marcaR = Marca_router::orderBy('nombre_marcaRouter')->get();

                echo '<div class="item form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="marcaRouter">Marca de Router *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <select class="chosen-select form-control" id="marcaRouter" name="marcaRouter">
                                             <option value="">Seleccione -------></option>';
                foreach ($marcaR as $item) {
                    echo '<option value="' .$item->id_marcaRouter. '">' .$item->nombre_marcaRouter. '</option>';
                }
                echo '/<select><span class="help-block"></span>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        
                                    </div> </div>';
                //campos de texto 
                echo '<div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionIpRouter">IP del Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="direccionIpRouter" name="direccionIpRouter"class="form-control col-md-7 col-xs-12" value="192.168.0.1" type="text" onkeyup="validarIP(' . "'direccionIpRouter')" . ' " maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>';
                // campo d etexto 
                echo '
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombrewifi">Nombre de Wifi *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="nombrewifi" name="nombrewifi"class="form-control col-md-7 col-xs-12" placeholder="ingrese el nombre de wifi"type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseniawifi">Contraseña de Wifi *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="contraseniawifi" name="contraseniawifi"class="form-control col-md-7 col-xs-12" placeholder="ingrese la contraseña de wifi"type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuariorouter">Usuario de Acceso al Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="usuariorouter" name="usuariorouter"class="form-control col-md-7 col-xs-12" placeholder="ingrese el usuario de acceso al router"type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseniarouter">Contraseña de Acceso al Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="contraseniarouter" name="contraseniarouter"class="form-control col-md-7 col-xs-12" placeholder="ingrese la contraseña de acceso al router"type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>';
            } else if ($valor == "No") {
                //echo 'soy no';
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

    public function CargarCanton() {
        $idProvincia = $this->input->post('idProvincia');
        if (isset($idProvincia)) {
            $lista = Canton::where('id_provincia', '=', $idProvincia)->get();
            if ($lista->count() > 0) {
                echo '<option value="">Seleccione -------></option>';
                foreach ($lista as $item) {
                    echo '<option value="'.$item->id_canton.'">'.$item->nombre_canton.'</option>';
                }
            } else {
                
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }
    
     public function CargarParroquias() {
        $idCanton = $this->input->post('idcanton');
        if (isset($idCanton)) {
            $lista = Parroquias::where('id_canton', '=', $idCanton)->get();
            if ($lista->count() > 0) {
                echo '<option value="">Seleccione -------></option>';
                foreach ($lista as $item) {
                    echo '<option value="'.$item->id_parroquia.'">'.$item->nombre_parroquia.'</option>';
                }
            } else {
                
            }
        } else {
            $this->ci_smarty->vista('error404/error404');
        }
    }

}
