{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    REGISTRAR CLIENTE
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            <form onsubmit="return validar()"class="form-horizontal form-label-left" action="{base_url()}clientes/guardar" method="POST" autocomplete="off">
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
                        <input id="cedula_ruc" name="cedula_ruc"class="form-control col-md-7 col-xs-12" placeholder="cédula o ruc del cliente"type="text" onkeyup="validacion('cedula_ruc')" maxlength="13" onkeypress="return Solo_numeros(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="apellidos" name="apellidos"class="form-control col-md-7 col-xs-12" placeholder="apellidos del cliente"type="text" onkeyup="validacion('apellidos')"onkeypress="return Solo_letras(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="nombres" name="nombres"class="form-control col-md-7 col-xs-12" placeholder="nombres del cliente"type="text" onkeyup="validacion('nombres')"onkeypress="return Solo_letras(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Teléfono *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="telefono" name="telefono"class="form-control col-md-7 col-xs-12" placeholder="teléfono del cliente"type="text" onkeyup="validacion('telefono')"onkeypress="return Solo_numeros(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="celular">Celular *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="celular" name="celular"class="form-control col-md-7 col-xs-12" placeholder="celular del cliente"type="text" onkeyup="validacion('celular')"onkeypress="return Solo_numeros(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12  input-icon right">
                        <input id="email" name="email"class="form-control col-md-7 col-xs-12" placeholder="email del cliente"type="text" onkeyup="validacion('email')">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                            {if $rol == "Administrador"}
                                <a href="{base_url()}clientes/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                            {/if}
                            {if $rol == "Empleado"}
                                <a href="{base_url()}contratar-plan/registrar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                            {/if}
                            
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
        function validar() {
            var cedula_ruc = document.getElementById("cedula_ruc").value;
            var apellidos = document.getElementById("apellidos").value;
            var nombres = document.getElementById("nombres").value;
            var telefono = document.getElementById("telefono").value;
            var celular = document.getElementById("celular").value;
            var email = document.getElementById("email").value;
            var v1, v2, v3, v4, v5, v6;
            v1 = validacion('cedula_ruc');
            v2 = validacion('apellidos');
            v3 = validacion('nombres');
            v4 = validacion('telefono');
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

                            var url = '{base_url()}clientes/validador';
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: 'texto=' + cedula_ruc,
                                dataType: "html",
                                error: function () {
                                    //alert("error petición ajax");
                                },
                                success: function (data) {
                                    if (data == "2") {
                                        $("#glypcn" + campo).remove();
                                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                        $('#' + campo).parent().children('span').hide();
                                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                        return true;

                                    } else {
                                        if (data == "1") {
                                            $("#glypcn" + campo).remove();
                                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                                            $('#' + campo).parent().children('span').text("esta cédula ya esta registrado en el sistema").show();
                                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                                            return false;
                                        }
                                    }
                                }
                            });
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


                                var url = '{base_url()}clientes/validador';
                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: 'texto=' + cedula_ruc,
                                    dataType: "html",
                                    error: function () {
                                        //alert("error petición ajax");
                                    },
                                    success: function (data) {
                                        if (data == "2") {
                                            $("#glypcn" + campo).remove();
                                            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                            $('#' + campo).parent().children('span').hide();
                                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                            return true;

                                        } else {
                                            if (data == "1") {
                                                $("#glypcn" + campo).remove();
                                                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                                                $('#' + campo).parent().children('span').text("este ruc ya esta registrado en el sistema").show();
                                                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                                                return false;
                                            }
                                        }
                                    }
                                });
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
            if (campo == 'telefono') {
                telefono = document.getElementById(campo).value;
                if (telefono == null || telefono.length == 0 || /^\s+$/.test(telefono)) {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");

                    return false;

                } else {
                    if (telefono.length != 9) {
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("ingrese un telefono válido").show();
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