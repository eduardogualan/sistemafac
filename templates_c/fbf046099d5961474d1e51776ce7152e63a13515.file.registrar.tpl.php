<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-03-03 22:16:54
         compiled from "/var/www/indynet/application/views/templates/backend/marca_router/registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151543355356a9b5e46d1310-31175278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbf046099d5961474d1e51776ce7152e63a13515' => 
    array (
      0 => '/var/www/indynet/application/views/templates/backend/marca_router/registrar.tpl',
      1 => 1454778831,
      2 => 'file',
    ),
    '3a948bff99bcb423f72864b9a192afeaf9c7151f' => 
    array (
      0 => '/var/www/indynet/application/views/templates/template_admin.tpl',
      1 => 1457051778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151543355356a9b5e46d1310-31175278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56a9b5e47a2262_30214920',
  'variables' => 
  array (
    'titulo' => 0,
    'ci' => 0,
    'home' => 0,
    'rol' => 0,
    'AdministrarOpen' => 0,
    'cliente' => 0,
    'usuario' => 0,
    'antena' => 0,
    'router' => 0,
    'nodo' => 0,
    'tPlan' => 0,
    'plan' => 0,
    'contratoPlan' => 0,
    'facturacionOpen' => 0,
    'cobrarPlanes' => 0,
    'facturasPendientes' => 0,
    'facturasPagados' => 0,
    'facturasOpen' => 0,
    'routerOpen' => 0,
    'ProformasOpen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a9b5e47a2262_30214920')) {function content_56a9b5e47a2262_30214920($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url();?>
/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url();?>
assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url();?>
assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url();?>
assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>
assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url();?>
assets/pages/css/pricing.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <link href="<?php echo base_url();?>
assets/slider/css/flexslider.css" rel="stylesheet" type="text/css"/>
        <!--DATE PICKER PERSONALIZADO -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>
assets/calendario/css/calendario.css">
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url();?>
/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>
/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url();?>
/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?php echo base_url();?>
home">
                        <img src="<?php echo base_url();?>
/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">

                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username"><strong>Hola </strong><?php echo $_smarty_tpl->tpl_vars['ci']->value->utilidades->Usuario('nombre');?>
</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url();?>
usuario/perfil">
                                        <i class="icon-user"></i> Perfil </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="<?php echo base_url();?>
salir">
                                        <i class="glyphicon glyphicon-off"></i> Salir </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">

                        <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['home']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                            <a href="<?php echo base_url();?>
home" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title"> Home</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['rol']->value=="Administrador") {?>
                            <li class="nav-item  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['AdministrarOpen']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-bank"></i>
                                    <span class="title">ADMINISTRAR</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
clientes/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-street-view"></i>
                                            <span class="title"> Clientes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['usuario']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
usuarios/listar" class="nav-link nav-toggle">
                                            <i class="icon-users"></i>
                                            <span class="title"> Usuarios</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['antena']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
antena/listar" class="nav-link nav toggle">
                                            <i class="fa fa-forumbee"></i>
                                            <span class="title">Antenas</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>

                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['router']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
marcas-de-router/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-signal"></i>
                                            <span class="title"> Marcas de Router</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['nodo']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
nodo/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-tencent-weibo"></i>
                                            <span class="title"> Nodos</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['tPlan']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
tipos-de-planes/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-gears"></i>
                                            <span class="title"> Tipos de Planes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['plan']->value)===null||$tmp==='' ? " " : $tmp);?>
 ">
                                        <a href="<?php echo base_url();?>
planes/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-certificate"></i>
                                            <span class="title"> Planes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php }?>
                        <?php if (!(($_smarty_tpl->tpl_vars['rol']->value=="Suscriptor")||($_smarty_tpl->tpl_vars['rol']->value=="Cliente"))) {?>
                            <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['contratoPlan']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                <a href="<?php echo base_url();?>
contratar-plan/listar" class="nav-link nav-toggle">
                                    <i class="fa fa-feed"></i>
                                    <span class="title"> Contratar Planes</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                           
                            <li class="nav-item  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['facturacionOpen']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-credit-card"></i>
                                    <span class="title">FACTURACIÓN</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cobrarPlanes']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
cobrar/plan" class="nav-link nav toggle">
                                            <i class="fa fa-money"></i>
                                            <span class="title">Cobrar Planes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>

                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['facturasPendientes']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
facturas-pendientes" class="nav-link nav-toggle">
                                            <i class="fa fa-list"></i>
                                            <span class="title"> Facturas Pendientes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['facturasPagados']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
facturas-pagadas" class="nav-link nav-toggle">
                                            <i class="fa fa-list-alt"></i>
                                            <span class="title"> Facturas Pagadas</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['rol']->value!="Suscriptor") {?>
                            <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['facturasOpen']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                <a href="<?php echo base_url();?>
facturas/listar" class="nav-link nav-toggle">
                                    <i class="fa fa-sticky-note-o"></i>
                                    <span class="title"> Facturas</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['routerOpen']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                <a href="<?php echo base_url();?>
router/listar" class="nav-link nav-toggle">
                                    <i class="fa fa-wifi"></i>
                                    <span class="title"> Router</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['rol']->value=="Suscriptor") {?>
                            <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['ProformasOpen']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                <a href="<?php echo base_url();?>
proformas" class="nav-link nav-toggle">
                                    <i class="fa fa-clone"></i>
                                    <span class="title"> Proformas</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        <?php }?>


                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                        
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    REGISTRAR MARCA DE ROUTER
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            <form   onsubmit="return validar()"class="form-horizontal form-label-left" action="<?php echo base_url();?>
marcas-de-router/guardar" method="POST" autocomplete="off">
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="nombre" name="nombre"class="form-control col-md-7 col-xs-12" placeholder="nombre de antena"type="text" onkeyup="validacion('nombre')">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                            <a href="<?php echo base_url();?>
marcas-de-router/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
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
            var nombre = document.getElementById("nombre").value;
            var v1;
            v1 = validacion('nombre');
            if (requerido(nombre) == false) {
                $("#exito").hide();
                $("#error").show();
                return false;
            }
        }
        function validacion(campo) {
            //var a = 0;
            if (campo == 'nombre') {
                nombre = document.getElementById(campo).value;
                if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                    return false;
                } else {
                    var url = '<?php echo base_url();?>
marcas-de-router/validador';
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: 'texto=' + nombre,
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
                                    $('#' + campo).parent().children('span').text("ya existe un registro con este nombre").show();
                                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                                    return false;
                                }
                            }
                        }
                    });
                }
            }

        }

    </script>



                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">Copyright &copy; 2016, Indynet Todos los derechos reservados. Desarrollado por:
            <a href="https://www.facebook.com/eduardo.gualan"  target="_blank" class="red">Ángel Eduardo Gualán Lozano</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
    <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?php echo base_url();?>
/assets/global/plugins/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo base_url();?>
/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?php echo base_url();?>
assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?php echo base_url();?>
/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <script src="<?php echo base_url();?>
assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url();?>
/assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url();?>
assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!--DATEPICKER PRSONALIZADO -->
    <script type="text/javascript" src="<?php echo base_url();?>
assets/calendario/js/calendario.js"></script>
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="<?php echo base_url();?>
/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>
/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <script src="<?php echo base_url();?>
assets/validar/validar.js"></script>
    <script src="<?php echo base_url();?>
assets/validar/validarIdentidad.js"></script>
    <script src="<?php echo base_url();?>
assets/slider/js/jquery.flexslider.js"></script>

</body>
</html>
<?php }} ?>
