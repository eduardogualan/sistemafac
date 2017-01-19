{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    DESCUENTO DE FACTURA
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            {foreach  from = $lista item=obj}
                <form  name="formCP"onsubmit="return validar()"class="form-horizontal form-label-left" action="{base_url()}facturas-descuento/modificar-registro{$obj->id_detalleMensualidad}" method="POST" autocomplete="off">
                    <div class="form-group">
                        <div class="alert alert-danger text-center" style="display:none;" id="error">
                            <button class="close" data-close="alert"></button>
                            <strong>Advertencia: </strong>Debe completar todos los campos obligatorios
                        </div> 
                    </div>
                    {if $ci->session->flashdata('message')}
                        <div class="alert alert-danger text-center">
                            <button class="close" data-close="alert"></button>
                            <strong>Error al guardar: </strong>{$ci->session->flashdata('message')}
                        </div>  
                    {/if}
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opcionesDescuentos">Descuento *
                            <span class="required"> </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="opcionesDescuentos" name="opcionesDescuentos" class="form-control chosen-select" onchange="CalcularDescuentos(), validacion('opcionesDescuentos')" >
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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="conceptoDesc" class="form-control" name="conceptoDesc" rows="3"  ></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <label class="control-label"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="table-scrollable">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Cliente:</th>
                                            <th colspan="3">{$obj->apellidos}{" "}{$obj->nombres}</th>
                                        </tr>
                                        <tr>
                                            <th>Lugar de Servicio:</th>
                                            <th colspan="3">{$obj->nombre_canton}{" - "}{$obj->nombre_parroquia}</th>
                                        </tr>
                                        <tr>
                                            <th>Periodo de Consumo:</th>
                                            <th colspan="3"><strong>Desde: </strong>{" "}{$obj->fecha_venta}{"  "}<strong>Hasta: </strong>{"  "}{$obj->fecha_vencimiento}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Valor Mensual</strong></td>
                                            <td><input type="text" id="costoPlan"class="form-control col-md-7 col-xs-12"name="costoPlan" value="{$obj->valor_mensual}" readonly="readonly"></td>
                                        </tr>
                                        <tr>
                                            <td ><strong>Descuento</strong></td>
                                            <td><input type="text" id="DescuentoPlan"class="form-control col-md-7 col-xs-12"name="DescuentoPlan" value="{$obj->valor_descuento}" readonly="readonly"></td>
                                        </tr>
                                        <tr>
                                            <td ><strong>Subtotal</strong></td>
                                            <td><input type="text" id="valordeTotalPlan"class="form-control col-md-7 col-xs-12"name="valorTotalPlan" value="{$obj->valor_total}" readonly="readonly"></td>
                                        </tr>
                                        <tr>
                                            <td ><strong>Iva</strong></td>
                                            <td><input type="text" id="ivaPlan"class="form-control col-md-7 col-xs-12"name="ivaPlan" value="{$obj->iva_venta}" readonly="readonly"></td>
                                        </tr> 
                                        {if $obj->saldo_instalacion > 0}
                                            <tr>
                                                <td ><strong>Recrago de Instalación</strong></td>
                                                <td><input type="text" id="saldoPendiente"class="form-control col-md-7 col-xs-12"name="saldoPendiente" value="{$obj->saldo_instalacion}" readonly="readonly"></td>
                                            </tr>
                                        {/if}
                                        {if $obj->saldo_instalacion <=0}
                                        <input type="hidden" id="saldoPendiente" name="saldoPendiente" value="{$obj->saldo_instalacion}">
                                    {/if}
                                    <tr>
                                        <td><strong>TOTAL</strong></td>
                                        <td><input type="text" id="totalPagar"class="form-control col-md-7 col-xs-12"name="totalPagar" value="{$obj->total_venta}" readonly="readonly"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                                <a href="{base_url()}facturas-pendientes"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                            </div>
                        </div>
                    </div>  
                </form>
            {/foreach}
        </div>
    </div>
    <script>

        function CalcularDescuentos() {
            var opcion = $("#opcionesDescuentos").val();
            var saldoP = $("#saldoPendiente").val();
            var costoPlan = $("#costoPlan").val();
            //alert(costoPlan);
            var desc = $("#DescuentoPlan").val();
            var iva = $("#ivaPlan").val();
            var saldoPendiente = parseFloat(saldoP);
            var costP = parseFloat(costoPlan);
            var descuento = parseFloat(desc);
            var ivaPlan = parseFloat(iva);
            if (opcion == "0") {
                //0%
                var descuento1 = costP * 0;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "15") {
                //15%
                var descuento1 = costP * 0.15;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "30") {
                //30 %
                var descuento1 = costP * 0.30;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);

            } else if (opcion == "50") {
                //50%
                var descuento1 = costP * 0.50;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);

            } else if (opcion == "65") {
                var descuento1 = costP * 0.65;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "80") {
                //80%
                var descuento1 = costP * 0.80;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "90") {
                //90%
                var descuento1 = costP * 0.90;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "99") {
                //100%
                var descuento1 = costP * 0.99;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else {
                var descuento1 = costP * 0;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            }
        }

        function redondiarDecimales(valor) {
            //return Math.round(valor);
            return Math.round((valor + 0.00001) * 100) / 100;
        }
        function requerido(valor) {
            if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
                return false;
            }
        }
        function validar() {
            var opdescuento = document.getElementById("opcionesDescuentos").value;
            var v1;
            v1 = validacion('opcionesDescuentos');
            if (requerido(opdescuento) == false || v1 === false) {
                $("#exito").hide();
                $("#error").show();
                return false;
            }
        }
        function validacion(campo) {
            //var a = 0;
            if (campo === 'opcionesDescuentos') {
                desc = document.getElementById(campo).value;
                if (desc == null) {
                    // $("#glypcn" + campo).remove();
                    $('#tipoPlan').parent().parent().attr("class", "form-group has-error");
                    //$('#' + campo).parent().children('span').text("campo obligatorio").show();
                    //$('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                } else {
                    $('#tipoPlan').parent().parent().attr("class", "form-group has-success has-feedback");
                    return true;
                }
            }
        }

    </script>
{/block}