{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    MODIFICAR PLAN
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            {foreach from=$lista item=obj}
            <form   onsubmit="return validar()"class="form-horizontal form-label-left" action="{base_url()}planes/modificar-registro/{$obj->id_plan}" method="POST" autocomplete="off">
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_plan">Tipo de Plan *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="chosen-select form-control" id="tipoPlan" name="tipoPlan" onchange="validacion('tipoPlan')">
                            {foreach from=$lista_tipoPlan item=datos}
                                <option value="{$datos->id_tipoPlan}" {if $obj->nombre == $datos->nombre}{"selected"}{/if}>{$datos->nombre}</option>
                            {/foreach}
                        </select>
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="velocidad">Velocidad *</label>
                    <div class="col-md-3 col-sm-3 col-xs-6 input-icon right">
                        <input id="velocidad" name="velocidad"class="form-control col-md-7 col-xs-12" value="{$obj->velocidad}"type="text" onkeypress="return SoloNumerosDecimales(event, '0.0', 6, 2);" onkeyup="validacion('velocidad')">
                        <span class="help-block"></span>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <select class="chosen-select form-control" id="desc" name="desc" onchange="validacion('desc')">
                            <option value="">Seleccione ----></option>
                            <option value="KBPS"{if $obj->descripcion == 'KBPS'}{'selected'}{/if}>KBPS</option>
                            <option value="MB"{if $obj->descripcion == 'MB'}{'selected'}{/if}>MB</option>
                        </select>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valor_mensual">Valor Mensual *</label>
                    <div class="col-md-3 col-sm-3 col-xs-6 input-icon right">
                        <input id="valor_mensual" name="valor_mensual"class="form-control col-md-7 col-xs-12" value="{$obj->valor_mensual}" type="text" onkeypress="return SoloNumerosDecimales(event, '0.0', 6, 2);" onkeyup="validacion('valor_mensual')">
                        <span class="help-block"></span>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <label class="control-label"> $</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                            <a href="{base_url()}planes/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                        </div>
                    </div>
                </div>  
            </form>
             {/foreach}
        </div>
    </div>
    <script>

    function requerido(valor) {
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            return false;
        }
    }
    function validar(){
        var tipoPlan = document.getElementById("tipoPlan").value;
        var velocidad = document.getElementById("velocidad").value;
        var desc = document.getElementById("desc").value;
        var valor_mensual = document.getElementById("valor_mensual").value;
        var v1,v2,v3,v4;
        v1 = validacion('tipoPlan');
        v2 = validacion('velocidad');
        v3 = validacion('desc');
        v4 = validacion('valor_mensual');
        if(requerido(tipoPlan)==false || requerido(velocidad)==false || requerido(desc)==false || requerido(valor_mensual)==false){
            $("#exito").hide();
            $("#error").show();
            return false;
        }
    }
    function validacion(campo){
             //var a = 0;
            if(campo ==='tipoPlan'){
                desc = document.getElementById(campo).value;
                if(desc == null || desc == 0){
                   // $("#glypcn" + campo).remove();
                    $('#tipoPlan').parent().parent().attr("class", "form-group has-error");
                    //$('#' + campo).parent().children('span').text("campo obligatorio").show();
                    //$('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                }else{
                    $('#tipoPlan').parent().parent().attr("class", "form-group has-success has-feedback");
                    return true;
                }
            }
            if(campo=='velocidad'){
                valor_mensual = document.getElementById(campo).value;
                if(valor_mensual == null || valor_mensual.length == 0 || /^\s+$/.test(valor_mensual)){
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                    return false;
                }else{
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                    return true;
                }
            }
            if(campo ==='desc'){
                desc = document.getElementById(campo).value;
                if(desc == null || desc == 0){
                   // $("#glypcn" + campo).remove();
                    $('#desc').parent().parent().attr("class", "form-group has-error");
                    //$('#' + campo).parent().children('span').text("campo obligatorio").show();
                    //$('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                }else{
                    $('#desc').parent().parent().attr("class", "form-group has-success has-feedback");
                    return true;
                }
            }
              if(campo=='valor_mensual'){
                valor_mensual = document.getElementById(campo).value;
                if(valor_mensual == null || valor_mensual.length == 0 || /^\s+$/.test(valor_mensual)){
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                    return false;
                }else{
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                    return true;
                }
            }   
    } 

    </script>

{/block}