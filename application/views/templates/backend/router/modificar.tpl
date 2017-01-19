{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    MODIFICAR Router
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            <form   onsubmit="return validar()"class="form-horizontal form-label-left" action="{base_url()}router/modificar-registro/{$obj->id_router}" method="POST" autocomplete="off">
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombrewifi">Nombre de Wifi *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="nombrewifi" name="nombrewifi"class="form-control col-md-7 col-xs-12" value="{$obj->nombre_wifi}" onkeyup="validacion('nombrewifi')"type="text">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseniawifi">Contraseña de Wifi *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="contraseniawifi" name="contraseniawifi"class="form-control col-md-7 col-xs-12" value="{$obj->clave_wifi}" onkeyup="validacion('contraseniawifi')"type="text">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuariorouter">Usuario de Acceso al Router *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="usuariorouter" name="usuariorouter"class="form-control col-md-7 col-xs-12" value="{$obj->usuario_router}" onkeyup="validacion('usuariorouter')"type="text">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseniarouter">Contraseña de Acceso al Router *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="contraseniarouter" name="contraseniarouter"class="form-control col-md-7 col-xs-12" value="{$obj->clave_router}" onkeyup="validacion('contraseniarouter')"type="text">
                        <span class="help-block"></span>
                    </div>
                </div>'
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                            <a href="{base_url()}router/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                        </div>
                    </div>
                </div>  
            </form>
        </div>
    </div>
    <script>

    function requerido(valor) {
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            return false;
        }
    }
    function validar(){
        var nombreWifi = document.getElementById("nombrewifi").value;
        var contraseniawifi = document.getElementById("contraseniawifi").value;
        var usuariorouter = document.getElementById("usuariorouter").value;
        var contraseniarouter = document.getElementById("contraseniarouter").value;
        var v1,v2,v3,v4;
        v1 = validacion('nombrewifi');
        v2 = validacion('contraseniawifi');
        v3 = validacion('usuariorouter');
        v4 = validacion('contraseniarouter');
        if(requerido(nombreWifi)==false || requerido(contraseniawifi)==false || requerido(usuariorouter)==false || requerido(contraseniarouter)==false){
            $("#exito").hide();
            $("#error").show();
            return false;
        }
    }
    function validacion(campo){
              if(campo=='nombrewifi'){
                nombre_wifi = document.getElementById(campo).value;
                if(nombre_wifi == null || nombre_wifi.length == 0 || /^\s+$/.test(nombre_wifi)){
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
             if(campo=='contraseniawifi'){
                contra_wifi = document.getElementById(campo).value;
                if(contra_wifi == null || contra_wifi.length == 0 || /^\s+$/.test(contra_wifi)){
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
            if(campo=='usuariorouter'){
                usuario_router = document.getElementById(campo).value;
                if(usuario_router == null || usuario_router.length == 0 || /^\s+$/.test(usuario_router)){
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
            if(campo=='contraseniarouter'){
                contraseniarouter = document.getElementById(campo).value;
                if(contraseniarouter == null || contraseniarouter.length == 0 || /^\s+$/.test(contraseniarouter)){
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