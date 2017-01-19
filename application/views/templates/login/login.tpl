{extends file ="../template.tpl"}
{block name="contenido"}
    <form onsubmit="return validar()" autocomplete="off" class="form-horizontal form-label-left" action="{base_url()}acceso-al-sistema-indynet" method="POST">
        <div class="text-center">
            <img src="{base_url()}/assets/layouts/layout/img/logologin.png" alt="logo" class="logo-default" />
            <h3 class="form-title">INICIAR SESIÓN</h3>
        </div>

        <div class="form-group">
            <div class="alert alert-danger text-center" style="display:none;" id="error">
                <button class="close" data-close="alert"></button>
                <strong>Advertencia: </strong>Ingrese los datos de autentificación
            </div> 
        </div>
        {if $ci->session->flashdata('message1')}
            <div class="alert alert-success text-center">
                <button class="close" data-close="alert"></button>
                <strong>Felicidades: </strong>{$ci->session->flashdata('message1')}
            </div>  
        {/if}
        {if $ci->session->flashdata('message')}
            <div class="alert alert-danger text-center">
                <button class="close" data-close="alert"></button>
                <strong>Error: </strong>{$ci->session->flashdata('message')}
            </div>  
        {/if}
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12" for="user">Usuario</label>
            <div class="col-md-9 col-sm-8 col-xs-12 input-icon right">
                <input id="user" name="user"class="form-control col-md-7 col-xs-12" placeholder="ingrese su cédula o ruc"type="text" onkeyup="validacion('user')" onkeypress="return Solo_numeros(event)" maxlength="13">
                <span class="help-block"></span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12" for="contrasenia">Contraseña</label>
            <div class="col-md-9 col-sm-8 col-xs-12 input-icon right">
                <input id="contrasenia" name="contrasenia"class="form-control col-md-7 col-xs-12" placeholder="ingrese su contraseña"type="password" onkeyup="validacion('contrasenia')">
                <span class="help-block"></span>
            </div>
        </div>

        <div class="form-actions">
            <input type="hidden" name="_token" value="{$token}">
            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-lock"></i> ENTRAR </button>
            <a href="http://www.indynet.net.ec/"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
        </div>

        <div class="forget-password">
            <a  href="#ventana2" class="btn btn-xs btn-info" data-toggle="modal" title="Recuperar contraseña"><i class="fa fa-key"></i></a>
            <div class="modal fade" id="ventana2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" arial-hidden="true">&times;;</button>
                            <h6 class="text-center text-primary"><strong>RECUPERAR CONTRASEÑA</strong></h6>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-info text-center">
                                <button class="close" data-close="alert"></button>
                                <h6><strong>Información: </strong> Por seguridad solo el administrador del sistema podra recuperar su contraseña, si usted no es el administrador del sistema y olvido su contraseña comuníquese con la Empresa Indynet para que le ayuden reseteando su cuenta</h6>
                            </div>  
                            <div class="form-group">
                                <div class="alert alert-danger text-center" style="display:none;" id="error1">
                                    <button class="close" data-close="alert"></button>
                                    <strong>Advertencia: </strong>El campo cédula o ruc es obligatorio
                                </div> 
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cedula_ruc">Cédula o Ruc *</label>
                                <div class="col-md-6 col-sm-6 col-xs-8 input-icon right">
                                    <input id="cedula_ruc" name="cedula_ruc"class="form-control col-md-7 col-xs-12" placeholder="cédula o ruc"type="text" onkeypress="return Solo_numeros(event)" onkeyup="validacion1('cedula_ruc')" maxlength="13">
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-4">
                                    <button type="button" onclick="validarCampo()"class="btn btn-primary"><i class="fa fa-search"></i> BUSCAR</button>
                                </div>
                            </div> 
                            <div id="respuesta">
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                             <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" ><i class="fa fa-close"></i> CANCELAR </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
   <script>
            function requerido(valor) {
                if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
                    return false;
                }
            }
            function validar(){
                var user = document.getElementById("user").value;
                var contrasenia = document.getElementById("contrasenia").value;
                var v1 = 0, v2 = 0;
                v1 = validacion('user');
                v2 = validacion('contrasenia');
                if(requerido(user)==false || requerido(contrasenia)==false){
                    $("#exito").hide();
                    $("#error").show();
                    return false;
                }
            }
            function validacion(campo){
                   if (campo == 'user') {
                user = document.getElementById(campo).value;
                if(user == null || user.length == 0 || /^\s+$/.test(user)){
                     $("#glypcn" + campo).remove();
                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#' + campo).parent().children('span').text("campo obligatorio").show();
                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                            return false;
                }else{
                        if (user.length <= 10) {
                    if (ValidarCedula(user) == false) {
                        //alert("cedula incorrecto")
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("cédula incorrecto").show();
                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                        return false;
                    }else {
                           var url = '{base_url()}consultar-usuarios';
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: 'user=' + user,
                                dataType: "html",
                                error: function() {
                                    //alert("error petición ajax");
                                },
                                success: function(data) {
                                    if(data =="1"){
                                        $("#glypcn" + campo).remove();
                                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                        $('#' + campo).parent().children('span').hide();
                                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                        return true;
                                
                                    }else{
                                        if(data =="2"){
                                            $("#glypcn" + campo).remove();
                                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                                            $('#' + campo).parent().children('span').text("cédula no registrado en el sistema").show();
                                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                                            return false;
                                        }
                                    }
                                }
                            });
                    }
                } else {
                    if (user.length <= 13) {
                        if (ValidarRuc(user) == false) {
                            //alert("ruc incorrecto");
                            $("#glypcn" + campo).remove();
                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#' + campo).parent().children('span').text("ruc incorrecto").show();
                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                            return false;
                        } else {
                            var url = '{base_url()}consultar-usuarios';
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: 'user=' + user,
                                dataType: "html",
                                error: function() {
                                    //alert("error petición ajax");
                                },
                                success: function(data) {
                                    if(data =="1"){
                                        $("#glypcn" + campo).remove();
                                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                        $('#' + campo).parent().children('span').hide();
                                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                        return true;
                                
                                    }else{
                                        if(data =="2"){
                                            $("#glypcn" + campo).remove();
                                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                                            $('#' + campo).parent().children('span').text("ruc no registrado en el sistema").show();
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

                if (campo == 'contrasenia') {
                    contrasenia = document.getElementById(campo).value;
                    if (contrasenia == null || contrasenia.length == 0 || /^\s+$/.test(contrasenia)) {
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
            }
            
function validarCampo(){
    var cedula_ruc = $("#cedula_ruc").val();
    var v1 = 0;
    v1 = validacion1('cedula_ruc');
        if(requerido(cedula_ruc)==false || v1 === false){
            $("#exito").hide();
            $("#error1").show();
            return false;
        }else{
            RecuperarContrasenia();
        }

}
function validacion1(campo){
                   if (campo == 'cedula_ruc') {
                user = document.getElementById(campo).value;
                if(user == null || user.length == 0 || /^\s+$/.test(user)){
                     $("#glypcn" + campo).remove();
                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#' + campo).parent().children('span').text("campo obligatorio").show();
                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                            return false;
                }else{
                        if (user.length <= 10) {
                    if (ValidarCedula(user) == false) {
                        //alert("cedula incorrecto")
                        $("#glypcn" + campo).remove();
                        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#' + campo).parent().children('span').text("cédula incorrecto").show();
                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                        return false;
                    }else {
                           var url = '{base_url()}consultar-usuarios';
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: 'user=' + user,
                                dataType: "html",
                                error: function() {
                                    //alert("error petición ajax");
                                },
                                success: function(data) {
                                    if(data =="1"){
                                        $("#glypcn" + campo).remove();
                                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                        $('#' + campo).parent().children('span').hide();
                                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                        return true;
                                
                                    }else{
                                        if(data =="2"){
                                            $("#glypcn" + campo).remove();
                                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                                            $('#' + campo).parent().children('span').text("cédula no registrado en el sistema").show();
                                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                                            return false;
                                        }
                                    }
                                }
                            });
                    }
                } else {
                    if (user.length <= 13) {
                        if (ValidarRuc(user) == false) {
                            //alert("ruc incorrecto");
                            $("#glypcn" + campo).remove();
                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#' + campo).parent().children('span').text("ruc incorrecto").show();
                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                            return false;
                        } else {
                            var url = '{base_url()}consultar-usuarios';
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: 'user=' + user,
                                dataType: "html",
                                error: function() {
                                    //alert("error petición ajax");
                                },
                                success: function(data) {
                                    if(data =="1"){
                                        $("#glypcn" + campo).remove();
                                        $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                        $('#' + campo).parent().children('span').hide();
                                        $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                        return true;
                                
                                    }else{
                                        if(data =="2"){
                                            $("#glypcn" + campo).remove();
                                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                                            $('#' + campo).parent().children('span').text("ruc no registrado en el sistema").show();
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
            }
function RecuperarContrasenia(){
    var cedula_ruc = $("#cedula_ruc").val();
    var url ="{base_url()}recuperar-cuenta-admin";
    $.ajax({
        type: "POST",
        url: url,
        data: 'cedula_ruc=' + cedula_ruc,
        dataType: "html",
        success: function (data) {
           $("#respuesta").html(data);
        }
    
    });
}

function EnviarEmail(){
     var cedula_ruc = $("#cedula_ruc").val();
    var v1 = 0;
    v1 = validacion1('cedula_ruc');
        if(requerido(cedula_ruc)==false || v1 === false){
            $("#exito").hide();
            $("#error1").show();
            return false;
        }else{
            ProcesoEnviado();
        }
    
}

function ProcesoEnviado(){
 var cedula_ruc = $("#cedula_ruc").val();
    var url ="{base_url()}recuperar-cuenta-admin-enviar-correo";
    $.ajax({
        type: "POST",
        url: url,
        data: 'cedula_ruc=' + cedula_ruc,
        dataType: "html",
        success: function (data) {
           $("#respuesta").html(data);
        }
    
    });
}

</script>
{/block}    