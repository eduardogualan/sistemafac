{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    CONTRATAR PLAN
                    <span class="step-title"> Avance 1 de 4 </span>
                </span>
            </div>
            {if $rol=="Empleado"}
                <div class="actions">
                    <a href="{base_url()}clientes/registrar"class="btn btn-primary"><i class="fa fa-pencil"></i> CREAR CLIENTE</a>
                </div>
            {/if}
        </div>
        <div class="portlet-body form">
            <form name="formCP"class="form-horizontal form-label-left"  id="submit_form" method="POST" action="{base_url()}contratar-plan/guardar" autocomplete="off">
                <div class="form-wizard">
                    <div class="form-body">
                        {if $ci->session->flashdata('message')}
                            <div class="alert alert-success text-center">
                                <button class="close" data-close="alert"></button>
                                <strong>Felicidades: </strong>{$ci->session->flashdata('message')}
                            </div>  
                        {/if}
                        <ul class="nav nav-pills nav-justified steps">
                            <li>
                                <a href="#tab1" data-toggle="tab" class="step">
                                    <span class="number"> 1 </span>
                                    <span class="desc">
                                        <i class="fa fa-check"></i> Datos del Cliente </span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab" class="step">
                                    <span class="number"> 2 </span>
                                    <span class="desc">
                                        <i class="fa fa-check"></i> Datos Técnicos </span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab" class="step active">
                                    <span class="number"> 3 </span>
                                    <span class="desc">
                                        <i class="fa fa-check"></i> Facturación de Contrato </span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab4" data-toggle="tab" class="step active">
                                    <span class="number"> 4 </span>
                                    <span class="desc">
                                        <i class="fa fa-check"></i> Confirmar Contrato </span>
                                </a>
                            </li>

                        </ul>
                        <div id="bar" class="progress progress-striped" role="progressbar">
                            <div class="progress-bar progress-bar-success"> </div>
                        </div>
                        <div class="tab-content">
                            <div class=" text-center alert alert-danger display-none">
                                <button class="close" data-dismiss="alert"></button> 
                                <strong>Advertencia</strong> complete todos los campos obligatorios para poder continuar
                            </div>
                            <div class="tab-pane active" id="tab1">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cedula_ruc">Cédula o Ruc *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="country_list" class="form-control" name="cedula_ruc" onchange="CargarCliente()">
                                            <option value="">Seleccione -------></option>
                                            {foreach from=$Persona item=datos}
                                                <option value="{$datos->cedula_ruc}">{$datos->cedula_ruc}</option>
                                            {/foreach}
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div id="mostrarCliente">          
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="provincia" class="form-control" name="provincia" > 
                                            <option value="">Seleccione -------></option>
                                            {foreach from=$listaProvincia item=datos}
                                                <option value="{$datos->id_provincia}">{$datos->nombre_provincia}</option>
                                            {/foreach}
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="canton">Cantón *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="canton" class="form-control" name="canton"> 
                                            
                                             </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="parroquia">Parroquia *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="parroquia" class="form-control" name="parroquia"> 
                                            
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="calles">Calles *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="calles"class="form-control col-md-7 col-xs-12" placeholder="ejemplo 10 de agosto y ramón pinto" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numeroCasa">Número de Casa *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="numeroCasa"class="form-control col-md-7 col-xs-12" placeholder="ejemplo 57 - 34" type="text" maxlength="10">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="referenciaLugar">Referencia del Lugar
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="referenciaLugar"class="form-control col-md-7 col-xs-12" placeholder="ejemplo una cuadra antes del subcentro de salud" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nodoEnlazado">Nodo Enlazado *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="nodoEnlazado" name="nodoEnlazado" >
                                            <option value="">Seleccione -------></option>
                                            {foreach from=$listaNodo item=datos}
                                                <option value="{$datos->id_nodoEnlazado}">{$datos->nombre_nodoEnlazado}</option>
                                            {/foreach}
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="antena">Antena Utilizada *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="antena" name="antena" >
                                            <option value="">Seleccione -------></option>
                                            {foreach from=$listaAntena item=datos}
                                                <option value="{$datos->id_antena}">{$datos->nombre_antena}</option>
                                            {/foreach}
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="frecuencia">Frecuencia Utilizada *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="frecuencia" name="frecuencia">
                                            <option value="">Seleccione -------></option>
                                            <option value="2.4 GHZ">2.4 GHZ</option>
                                            <option value="5.8 GHZ">5.8 GHZ</option>

                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionIpWan">Dirección IP Wan *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="direccionIpWan" name="direccionIpWan"class="form-control col-md-7 col-xs-12" placeholder="ingrese la dirección ip wan"type="text" onkeyup="validarIP('direccionIpWan')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="puerta_enlace">Puerta de Enlace *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="puerta_enlace" name="puerta_enlace"class="form-control col-md-7 col-xs-12" placeholder="ingrese la puerta de enlace"type="text" onkeyup="validarIP('puerta_enlace')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dns">DNS *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="dns" name="dns"class="form-control col-md-7 col-xs-12" placeholder="ingrese el DNS"type="text" onkeyup="validarIP('dns')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subred">Subred </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="subred" name="subred"class="form-control col-md-7 col-xs-12" placeholder="ingrese una subred"type="text" onkeyup="validarIP('subred')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Router *
                                        <span class="required">  </span>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="radio-list">
                                            <label>
                                                <input type="radio" id="router" name="gender" value="Si" data-title="Si" /> Si </label>
                                            <label>
                                                <input type="radio" id="router" name="gender" value="No" data-title="No" /> No </label>
                                        </div>
                                        <div id="form_gender_error"> </div>
                                    </div>
                                </div>
                                <div   id="Router">

                                </div>
                            </div>
                             <div class="tab-pane" id="tab3">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha">Fecha de Inicio de Servicio *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="fecha"name="fecha" class="form-control col-md-7 col-xs-12 " type="date" value=""  />
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_plan">Tipo de Plan *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="tipoPlan" name="tipoPlan" >
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_plan">Velocidad de Plan *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="velocidadPlan" name="velocidadPlan" >
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <input type="hidden" id="CostoPlan" value="" name="CostoPlan">

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valor_instalacion">Valor de Instalación *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <input id="valor_instalacion" name="valor_instalacion"class="form-control col-md-7 col-xs-12" placeholder="valor de instalación"type="text" onkeypress="return SoloNumerosDecimales(event, '0.0', 6, 2);" onkeyup="MostrarOpcionesDePagos()">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <label class="control-label"> $</label>
                                    </div>
                                </div>
                                <div class="item form-group" id="OpcionDepagos">

                                </div>
                                <div id="valor_pagadoIntalacion">
                                    
                                </div>
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="table-scrollable">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Cliente: </th>
                                                        <th><p class="form-control-static" data-display="cliente"> </p></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Tipo de Plan: </th>
                                                        <th><p class="form-control-static" data-display="tipoPlan"> </p> </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Ancho de banda: </th>
                                                        <th><p class="form-control-static" data-display="velocidadPlan"> </p></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Valor Mensual: </th>
                                                        <th><p class="form-control-static" data-display="costoPlan"> </p> $</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Valor de Instalación: </th>
                                                        <th><p class="form-control-static" data-display="valor_instalacion"> </p> $</th>
                                                    </tr>
                                                     <tr>
                                                        <th>Pago de Instalación: </th>
                                                        <th><p class="form-control-static" data-display="paga_instalacion"> </p></th>
                                                    </tr>
                                                     <tr>
                                                        <th>Recargo de Instalación: </th>
                                                        <th><p class="form-control-static" data-display="saldoPendiente"> </p> $</th>
                                                    </tr>
                                                    
                                                </thead>
                                            </table>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-actions">
                                <a href="javascript:;" class="btn default button-previous">
                                    <i class="fa fa-angle-left"></i> Anterior </a>&nbsp;&nbsp;
                                <a href="javascript:;" class="btn btn-outline green button-next"> Siguiente
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <a href="{base_url()}contratar-plan/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                                <button type="submit" class="button-submit btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button> &nbsp;&nbsp; &nbsp;&nbsp;
                            </div>
                        </div>
                    </div> 
                    <div id="ajax_loader"><img id="loader_gif" src="loader.gif" class="display-none"/></div>
                </div>
            </form>
        </div>
    </div>
     <script src="{base_url()}/assets/global/plugins/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        //cargar tipos d eplanes y costo
         $("document").ready(function() {
        $("#tipoPlan").load("{base_url()}contratar-plan/consultar-tipo-plan");
           //selecionar velocidad
        $("#tipoPlan").change(function() {
             var url = '{base_url()}contratar-plan/consultar-plan';
             var id = $("#tipoPlan").val();
            $.ajax({
                 type: "POST",
                url: url,
                data: 'texto=' + id,
                dataType: "html",
                success: function (data) {
                       $("#velocidadPlan").html(data);
                    }
            });
           $("#velocidadPlan").change(function() {
                var url = '{base_url()}contratar-plan/consultar-valor-mensual-plan';
                var id = $("#velocidadPlan").val();
                //alert(url);
               $.ajax({
                    type: "POST",
                   url: url,
                   data: 'texto=' + id,
                   dataType: "html",
                   success: function (data) {
                         // $("#CostoPlan").html(data);
                        document.formCP.CostoPlan.defaultValue = data;
                    }
               });
            }); 

        });

    });
    //cargar provicia cantones y parroquias
$("document").ready(function() {
    $("#provincia").change(function() {
    var idProvincia = $("#provincia").val();
    var url = '{base_url()}Jquery_control/CargarCanton';
     $.ajax({
        type: "POST",
        url: url,
        data:"idProvincia="+idProvincia,
        dataType: "html",
        success: function (data) {
        $("#canton").html(data);
        }
    }); 
    $("#canton").change(function(){
    var idcanton = $("#canton").val();
    var url = '{base_url()}Jquery_control/CargarParroquias';
     $.ajax({
        type: "POST",
        url: url,
        data:"idcanton="+idcanton,
        dataType: "html",
        success: function (data) {
        $("#parroquia").html(data);
        }
    }); 
    });
    });

});
    
    
    //cargar cantones y parroquias
  function CargarCantones(){
  var idProvincia = $("#provincia").val();
    var url = '{base_url()}Jquery_control/CargarCanton';
     $.ajax({
        type: "POST",
        url: url,
        data:"idProvincia="+idProvincia,
        dataType: "html",
        success: function (data) {
        $("#Opcionescanton").html(data);
        }
    }); 
    
  }
  
  function CargarParroquias(){
    var idcanton = $("#canton").val();
    var url = '{base_url()}Jquery_control/CargarParroquias';
     $.ajax({
        type: "POST",
        url: url,
        data:"idcanton="+idcanton,
        dataType: "html",
        success: function (data) {
        $("#Opcionesparroquias").html(data);
        }
    }); 
  }

//mostrar opciones de pagos
$('#valor_instalacion').on('keyup', function(){
     var valor_instalacion = $("#valor_instalacion").val();
    var url = "{base_url()}contratar-plan/mostrar-opcion-pagos";
    $.ajax({
        type: "POST",
        url: url,
        data:"valor_instalacion="+valor_instalacion,
        dataType: "html",
        success: function (data) {
        $("#OpcionDepagos").html(data);
                       //alert(data);

        }
    }); 
    
 });
 //mostrar las tres opcionesde pagos
   function OpcionPago(){
    var valor = $("#paga_instalacion").val();
    var valorMensual = $("#CostoPlan").val();
    var valor_instalacion = $("#valor_instalacion").val();
    var url = "{base_url()}contratar-plan/valor-instalcion-pagar";
    $.ajax({
        type: "POST",
        url: url,
        data: {literal}{valor:valor, valor_instalacion:valor_instalacion, valorMensual: valorMensual},
        dataType: "html",
        success: function (data) {
        $("#valor_pagadoIntalacion").html(data);
        
        }
    });
    
  }
  {/literal}
//calcular saldo pendiendte de pago de instalcion
    function calcularValorPagar(){
        var valor_instalacion = $("#valor_instalacion").val();
        var valor_pagado = $("#valorPagado").val();
        var total = $("#totalPagar").val();
       var ValorIns = parseFloat(valor_instalacion); // decimal = 1234.0987
       var ValorPagodo = parseFloat(valor_pagado); // decimal = 1234.0987
       var TotalPagar = parseFloat(total); // decimal = 1234.0987
     if(ValorIns<ValorPagodo){
        $('#valorPagado').parent().parent().attr("class", "form-group has-error");
        $('#valorPagado').parent().children('span').text("el valor pagado no puede ser mayor al valor de instalación").show();
        document.formCP.saldoPendiente.defaultValue = ""; 
        document.formCP.valorPagado.defaultValue = ""; 
        document.formCP.totalPagar.defaultValue = "";
        }else{
        var saldo = ValorIns - ValorPagodo;
       document.formCP.saldoPendiente.defaultValue = saldo;  
       var iva = $("#ivaPlan").val();
       var subtotal = $("#valordeTotalPlan").val();
       var recargo = $("#saldoPendiente").val();
       var ivaPlan = parseFloat(iva); 
       var subTotalPlan = parseFloat(subtotal); 
       var recargoPlan = parseFloat(recargo); 
        document.formCP.totalPagar.defaultValue = ivaPlan + subTotalPlan+recargoPlan;  
       $('#valorPagado').parent().parent().attr("class", "form-group has-success");
       $('#valorPagado').parent().children('span').hide();
     }
        
    }
         //seleccionar opciones de router
   $(document).ready(function(){
    $("input[name=gender]").click(function () {    
        var valor = $(this).val();
         var url = "{base_url()}contratar-plan/mostrar-campos-de-router";
        $.ajax({
            type: "POST",
            url: url,
            data: 'valor=' + valor, //+'$valor_mensaual' +valor_mensual,
            dataType: "html",
            success: function (data) {
                $("#Router").html(data);
                //alert("hola");
            }
        });
       
    });
});
//mostrar fecha
    $(function(){
	$("#fecha").datepicker({  maxDate: '0d'});
	
    });

function CargarCliente(){
    var url ="{base_url()}contratar-plan/cargar-cliente-combobox";
    var cedula_ruc = $("#country_list").val();
   // alert(url);
     $.ajax({
            type: "POST",
            url: url,
            data: 'cedula_ruc=' + cedula_ruc,
            dataType: "html",
            success: function (data) {
                $("#mostrarCliente").html(data);
            }
    });
}


$(document).ready(function(){
    $("#submit_form").submit(function(){
	$.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),		
            success:function(data){
                         //$("#form_wizard_1").html(data);
                         location.href="{base_url()}contratar-plan/acuerdo-contrato-pdf/"+data;
            }
        });
 
    });
    return false;
});
 
</script>
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
            }else{
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
        

    
   
    </script>
   
{/block}
