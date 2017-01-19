{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    MODIFICAR CONTRATO
                    <span class="step-title"> Avance 1 de 4 </span>
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            {foreach from=$lista item=obj}
            <form name="formCP"class="form-horizontal form-label-left"  id="submit_form" method="POST" action="{base_url()}contratar-plan/modificar-registro/{$obj->id_contrato}" autocomplete="off">
                <input type="hidden" value="{$obj->id_contrato}" id="id_contrato">
                <input type="hidden" value="{$obj->cedula_ruc}" id="cedula_ruc" name="cedula_ruc">
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
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="provincia" class="form-control" name="provincia" >
                                            {foreach from=$listaProvincia item=datos}
                                                <option value="{$datos->id_provincia}" {if $obj->nombre_provincia == $datos->nombre_provincia}{'selected'}{/if}>{$datos->nombre_provincia}</option>
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
                                            <option value="$obj->id_canton">{$obj->nombre_canton}</option>    
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
                                            <option value="{$obj->id_parroquia}">{$obj->nombre_parroquia}</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="calles">Calles *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="calles"class="form-control col-md-7 col-xs-12" value="{$obj->calles}" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numeroCasa">Número de Casa *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="numeroCasa"class="form-control col-md-7 col-xs-12" value="{$obj->numero_casa}" type="text" maxlength="10">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="referenciaLugar">Referencia del Lugar
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="referenciaLugar"class="form-control col-md-7 col-xs-12" value="{$obj->referencia}" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nodoEnlazado">Nodo Enlazado *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="nodoEnlazado" name="nodoEnlazado" >
                                            {foreach from=$listaNodo item=datos}
                                                <option value="{$datos->id_nodoEnlazado}" {if $obj->nombre_nodoEnlazado == $datos->nombre_nodoEnlazado}{'selected'}{/if} >{$datos->nombre_nodoEnlazado}</option>
                                            {/foreach}
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="antena">Antena Utilizada *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="antena" name="antena" >
                                            {foreach from=$listaAntena item=datos}
                                                <option value="{$datos->id_antena} {if $obj->nombre_antena == $datos->nombre_antena}{'selected'}{/if}">{$datos->nombre_antena}</option>
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
                                            <option value="2.4 GHZ"{if $obj->frecuencia == '2.4 GHZ'}{'selected'}{/if}>2.4 GHZ</option>
                                            <option value="5.8 GHZ"{if $obj->frecuencia == '5.8 GHZ'}{'selected'}{/if}>5.8 GHZ</option>

                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionIpWan">Dirección IP Wan *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="direccionIpWan" name="direccionIpWan"class="form-control col-md-7 col-xs-12" value="{$obj->direccion_ipWan}"type="text" onkeyup="validarIP('direccionIpWan')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="puerta_enlace">Puerta de Enlace *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="puerta_enlace" name="puerta_enlace"class="form-control col-md-7 col-xs-12" value="{$obj->gateway}"type="text" onkeyup="validarIP('puerta_enlace')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dns">DNS *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="dns" name="dns"class="form-control col-md-7 col-xs-12" value="{$obj->dns}"type="text" onkeyup="validarIP('dns')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subred">Subred </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="subred" name="subred"class="form-control col-md-7 col-xs-12"value="{$obj->subred}"type="text" onkeyup="validarIP('subred')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                {if $obj->id_router==''}
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
                                {/if}
                                {if $obj->id_router!=''}
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marcaRouter">Marca de Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="marcaRouter" name="marcaRouter">
                                            <option value="">Seleccione -------></option>
                                            {foreach from=$listaRouter item=datos}
                                            <option value="{$datos->id_marcaRouter}" {if $obj->nombre_marcaRouter == $datos->nombre_marcaRouter}{'selected'}{/if}>{$datos->nombre_marcaRouter}</option>
                                            {/foreach}
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionIpRouter">IP del Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="direccionIpRouter" name="direccionIpRouter"class="form-control col-md-7 col-xs-12" value="{$obj->ip_router}" type="text" onkeyup="validarIP(' . "'direccionIpRouter')" . ' " maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombrewifi">Nombre de Wifi *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="nombrewifi" name="nombrewifi"class="form-control col-md-7 col-xs-12" value="{$obj->nombre_wifi}" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseniawifi">Contraseña de Wifi *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="contraseniawifi" name="contraseniawifi"class="form-control col-md-7 col-xs-12" value="{$obj->clave_wifi}"type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuariorouter">Usuario de Acceso al Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="usuariorouter" name="usuariorouter"class="form-control col-md-7 col-xs-12" value="{$obj->usuario_router}" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseniarouter">Contraseña de Acceso al Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="contraseniarouter" name="contraseniarouter"class="form-control col-md-7 col-xs-12" value="{$obj->clave_router}" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                {/if}
                            </div>
                             <div class="tab-pane" id="tab3">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_plan">Tipo de Plan *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="tipoPlan" name="tipoPlan" >
                                                {foreach from=$listaTipoPlan item=datos}
                                                    <option value="{$datos->id_tipoPlan}" {if $obj->id_tipoPlan == $datos->id_tipoPlan}{'selected'}{/if}>{$datos->nombre}</option>
                                                {/foreach}
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
                                            <option value="{$obj->id_plan}">{$obj->velocidad}{" "}{$obj->descripcion}</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="CostoPlan">Valor Mensual *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <input id="CostoPlan" name="CostoPlan"class="form-control col-md-7 col-xs-12" value="{$obj->valor_mensual}" type="text" readonly="readonly">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <label class="control-label"> $</label>
                                    </div>
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
                                                        <th>Tipo de Plan: </th>
                                                        <th><p class="form-control-static" data-display="tipoPlan"> </p> </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Ancho de banda: </th>
                                                        <th><p class="form-control-static" data-display="velocidadPlan"> </p></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Valor Mensual: </th>
                                                        <th><p class="form-control-static" data-display="CostoPlan"> </p> $</th>
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
                                    <i class="fa fa-angle-left"></i> Anterior </a>
                                <a href="javascript:;" class="btn btn-outline green button-next"> Siguiente
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <a href="{base_url()}contratar-plan/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                                <button type="submit" onclick="enviarForm()"class="button-submit btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button> &nbsp;
                            </div>
                        </div>
                    </div> 
                    
                </div>
            </form>
          {/foreach}
        </div>
    </div>
     <script src="{base_url()}/assets/global/plugins/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        //cargar tipos d eplanes y costo
         $("document").ready(function() {
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

function enviarForm(){
var idContrato = $('#id_contrato').val();
    var url ="{base_url()}contratar-plan/modificar-registro/"+idContrato;
    $.ajax({
            type: "POST",
            url: url,
            data: $("#submit_form").serialize(),
            dataType: "html",
            success: function (data) {
                $("#form_wizard_1").html(data);
                location.href="{base_url()}contratar-plan/listar";
            }
    });
    return false;
}
 
</script>

   
{/block}
