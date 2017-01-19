{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    MODIFICAR USUARIO
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            {foreach from=$lista item=obj}
            <form   onsubmit="return validar()"class="form-horizontal form-label-left" action="{base_url()}usuarios/modificar-registro/{$obj->id_persona}" method="POST" autocomplete="off">
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cedula_ruc">Cédula o Ruc *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="cedula_ruc" name="cedula_ruc"class="form-control col-md-7 col-xs-12" value="{$obj->cedula_ruc}"type="text" onkeyup="validacion('cedula_ruc')" readonly="readonly">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="apellidos" name="apellidos"class="form-control col-md-7 col-xs-12" value="{$obj->apellidos}"type="text" onkeyup="validacion('apellidos')"onkeypress="return Solo_letras(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="nombres" name="nombres"class="form-control col-md-7 col-xs-12" value="{$obj->nombres}"type="text" onkeyup="validacion('nombres')"onkeypress="return Solo_letras(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="celular">Celular *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="celular" name="celular"class="form-control col-md-7 col-xs-12" value="{$obj->celular}"type="text" onkeyup="validacion('celular')"onkeypress="return Solo_numeros(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12  input-icon right">
                        <input id="email" name="email"class="form-control col-md-7 col-xs-12" value="{$obj->email}"type="text" onkeyup="validacion('email')">
                        <span class="help-block"></span>
                    </div>
                </div>
   
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="velocidad">Rol *</label>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <select class="chosen-select form-control" id="rol" name="rol" onchange="validacion('rol')">
                            {foreach from=$lista_rol item=datos}
                                <option value="{$datos->id_rol}" {if $obj->nombre == $datos->nombre}{"selected"}{/if}>{$datos->nombre}</option>
                            {/foreach}
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                            <a href="{base_url()}usuarios/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
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
        function validar() {
            var cedula_ruc = document.getElementById("cedula_ruc").value;
            var apellidos = document.getElementById("apellidos").value;
            var nombres = document.getElementById("nombres").value;
            var rol = document.getElementById("rol").value;
            var celular = document.getElementById("celular").value;
            var email = document.getElementById("email").value;
            var v1, v2, v3, v4, v5, v6;
            v1 = validacion('cedula_ruc');
            v2 = validacion('apellidos');
            v3 = validacion('nombres');
            v4 = validacion('rol');
            v5 = validacion('celular');
            v6 = validacion('email');
            if (requerido(cedula_ruc) == false || v1 === false || requerido(apellidos) == false || v2 === false || requerido(nombres) == false || v3 === false || v4 === false || v5 === false || v6 === false) {
                $("#exito").hide();
                $("#error").show();
                return false;
            }
        }
        function validacion(campo) {
            //var a = 0;
            if (campo == 'cedula_ruc') {
                cedula_ruc = document.getElementById(campo).value;
                if (cedula_ruc == null || cedula_ruc.length == 0 || /^\s+$/.test(cedula_ruc)) {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                    return false;
                } else {
                    if (cedula_ruc.length <= 10) {
                        if (ValidarCedula(cedula_ruc) == false) {
                            //alert("cedula incorrecto")
                            $("#glypcn" + campo).remove();
                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#' + campo).parent().children('span').text("cédula incorrecto").show();
                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                            return false;
                        } else {
                            $("#glypcn" + campo).remove();
                                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                        $('#' + campo).parent().children('span').hide();
                                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                        return true;

                        }
                    } else {
                        if (cedula_ruc.length <= 13) {
                            if (ValidarRuc(cedula_ruc) == false) {
                                //alert("ruc incorrecto");
                                $("#glypcn" + campo).remove();
                                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                                $('#' + campo).parent().children('span').text("ruc incorrecto").show();
                                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                                return false;
                            } else {
                                    $("#glypcn" + campo).remove();
                                            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                            $('#' + campo).parent().children('span').hide();
                                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                            return true;
                            }
                        }
                    }
                }

            }
            if (campo == 'apellidos') {
                apellidos = document.getElementById(campo).value;
                if (apellidos == null || apellidos.length == 0 || /^\s+$/.test(apellidos)) {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                    return false;
                } else {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                    return true;
                }
            }
            if (campo == 'nombres') {
                nombres = document.getElementById(campo).value;
                if (nombres == null || nombres.length == 0 || /^\s+$/.test(nombres)) {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                    return false;
                } else {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#' + campo).parent().children('span').hide();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                    return true;
                }
            }
             if(campo ==='rol'){
                desc = document.getElementById(campo).value;
                if(desc == null || desc == 0){
                   // $("#glypcn" + campo).remove();
                    $('#rol').parent().parent().attr("class", "form-group has-error");
                    //$('#' + campo).parent().children('span').text("campo obligatorio").show();
                    //$('#' + campo).parent().append("<span id='glypcn" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                }else{
                    $('#rol').parent().parent().attr("class", "form-group has-success has-feedback");
                    return true;
                }
            }
            if (campo == 'celular') {
                celular = document.getElementById(campo).value;
                if (celular == null || celular.length == 0 || /^\s+$/.test(celular)) {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");

                    return false;

                } else {
                    if (celular.length != 10) {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("ingrese un celular válido").show();
                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                        return false;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");

                        return true;
                    }
                }
            }
            if (campo == 'email') {
                email = document.getElementById(campo).value;
                if (email == null || email.length == 0 || /^\s+$/.test(email)) {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");

                    return false;

                } else {
                    if (!(/\S+@\S+\.\S+/.test(email))) {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("ingrese un email válido").show();
                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                        return false;
                    } else {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#' + campo).parent().children('span').hide();
                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");

                        return true;
                    }
                }
            }
        }
    </script>

{/block}