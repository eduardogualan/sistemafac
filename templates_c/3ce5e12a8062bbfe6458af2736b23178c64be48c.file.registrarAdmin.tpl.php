<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-03-04 12:49:41
         compiled from "/var/www/indynet/application/views/templates/login/registrarAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85086935656cb8047a305d2-32192321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ce5e12a8062bbfe6458af2736b23178c64be48c' => 
    array (
      0 => '/var/www/indynet/application/views/templates/login/registrarAdmin.tpl',
      1 => 1456176929,
      2 => 'file',
    ),
    'ff320b28f5a5926621f7bb48b74534c0aee0257e' => 
    array (
      0 => '/var/www/indynet/application/views/templates/template.tpl',
      1 => 1457113775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85086935656cb8047a305d2-32192321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56cb8047c731c1_25391935',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cb8047c731c1_25391935')) {function content_56cb8047c731c1_25391935($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8" />
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? 'Indynet' : $tmp);?>
</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!--favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>
assets/layouts/layout/img/indynet.ico">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url();?>
assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url();?>
/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url();?>
assets/pages/css/login-3.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
           <!-- ESPACIO QUE QUEDE CENTRADO-->
        </div>
        
        <!-- BEGIN LOGIN -->
        <div class="content">
            
    <form onsubmit="return validar()" autocomplete="off" class="form-horizontal form-label-left" action="<?php echo base_url();?>
Acceso_sistema_control/RegistrarCuentaAdministrador" method="POST">
        <div class="text-center">
            <img src="<?php echo base_url();?>
/assets/layouts/layout/img/logologin.png" alt="logo" class="logo-default" />
            <h4 class="form-title">REGISTRAR  ADMINISTRADOR DEL SISTEMA</h4>
        </div>
        <div class="form-group">
            <div class="alert alert-danger text-center" style="display:none;" id="error">
                <button class="close" data-close="alert"></button>
                <strong>Advertencia: </strong>Debe completar todos los campos obligatorios
            </div> 
        </div>
        <?php if ($_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message')) {?>
            <div class="alert alert-danger text-center">
                <button class="close" data-close="alert"></button>
                <strong>Error al guardar: </strong><?php echo $_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message');?>

            </div>  
        <?php }?>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12" for="cedula_ruc">Cédula/Ruc</label>
            <div class="col-md-9 col-sm-8 col-xs-12 input-icon right">
                <input id="cedula_ruc" name="cedula_ruc"class="form-control col-md-7 col-xs-12" placeholder="ingrese su cédula o ruc"type="text" onkeyup="validacion('cedula_ruc')" onkeypress="return Solo_numeros(event)" maxlength="13">
                <span class="help-block"></span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12" for="apellidos">Apellidos</label>
            <div class="col-md-9 col-sm-8 col-xs-12 input-icon right">
                <input id="apellidos" name="apellidos"class="form-control col-md-7 col-xs-12" placeholder="ingrese sus apellidos"type="text" onkeyup="validacion('apellidos')" onkeypress="return Solo_letras()(event)">
                <span class="help-block"></span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12" for="nombres">Nombres</label>
            <div class="col-md-9 col-sm-8 col-xs-12 input-icon right">
                <input id="nombres" name="nombres"class="form-control col-md-7 col-xs-12" placeholder="ingrese sus nombres"type="text" onkeyup="validacion('nombres')" onkeypress="return Solo_letras()(event)">
                <span class="help-block"></span>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-4 col-xs-12" for="email">Email</label>
            <div class="col-md-9 col-sm-8 col-xs-12 input-icon right">
                <input id="email" name="email"class="form-control col-md-7 col-xs-12" placeholder="ingrese su email"type="text" onkeyup="validacion('email')">
                <span class="help-block"></span>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
            <a href="http://www.indynet.net.ec/" class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
        </div>
        <div class="forget-password">
        </div>
    </form>
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
            var email = document.getElementById("email").value;
            var v1, v2, v3, v6;
            v1 = validacion('cedula_ruc');
            v2 = validacion('apellidos');
            v3 = validacion('nombres');
            v6 = validacion('email');
            if (requerido(cedula_ruc) == false || v1 === false || requerido(apellidos) == false || v2 === false || requerido(nombres) == false || v3 === false  || v6 === false) {
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

           <body oncontextmenu="return false" onkeydown="return false">
        </div>
        <!-- BEGIN CORE PLUGINS -->
       <script src="<?php echo base_url();?>
/assets/global/plugins/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url();?>
assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>
assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url();?>
assets/pages/scripts/login.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url();?>
assets/validar/validar.js"></script>
        <script src="<?php echo base_url();?>
assets/validar/validarIdentidad.js"></script>
  
    </body>
</html><?php }} ?>
