<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-03-02 21:44:30
         compiled from "/var/www/indynet/application/views/templates/backend/usuario/registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28764704156b7657f707014-68587867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd0fe0b3f0274ec51321075ead483de556891bc' => 
    array (
      0 => '/var/www/indynet/application/views/templates/backend/usuario/registrar.tpl',
      1 => 1454865362,
      2 => 'file',
    ),
    '3a948bff99bcb423f72864b9a192afeaf9c7151f' => 
    array (
      0 => '/var/www/indynet/application/views/templates/template_admin.tpl',
      1 => 1456877609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28764704156b7657f707014-68587867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56b7657f7e8ca9_31512686',
  'variables' => 
  array (
    'titulo' => 0,
    'ci' => 0,
    'home' => 0,
    'rol' => 0,
    'AdministrarOpen' => 0,
    'antena' => 0,
    'router' => 0,
    'nodo' => 0,
    'tPlan' => 0,
    'plan' => 0,
    'usuario' => 0,
    'cliente' => 0,
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
<?php if ($_valid && !is_callable('content_56b7657f7e8ca9_31512686')) {function content_56b7657f7e8ca9_31512686($_smarty_tpl) {?><!DOCTYPE html>
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
                                <span class="username"><?php echo $_smarty_tpl->tpl_vars['ci']->value->utilidades->Usuario('nombre');?>
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
                                            <i class="icon-settings"></i>
                                            <span class="title"> Tipos de Planes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['plan']->value)===null||$tmp==='' ? " " : $tmp);?>
 ">
                                        <a href="<?php echo base_url();?>
planes/listar" class="nav-link nav-toggle">
                                            <i class="icon-settings"></i>
                                            <span class="title"> Planes</span>
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
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
clientes/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-street-view"></i>
                                            <span class="title"> Clientes</span>
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
                                    <i class="icon-home"></i>
                                    <span class="title"> Proformas</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        <?php }?>



                        <li class="nav-item  ">
                            <a href="form_wizard8a36.html?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title">Portlets</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="portlet_boxed.html" class="nav-link ">
                                        <span class="title">Boxed Portlets</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="portlet_light.html" class="nav-link ">
                                        <span class="title">Light Portlets</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="portlet_solid.html" class="nav-link ">
                                        <span class="title">Solid Portlets</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="portlet_ajax.html" class="nav-link ">
                                        <span class="title">Ajax Portlets</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="portlet_draggable.html" class="nav-link ">
                                        <span class="title">Draggable Portlets</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

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
                    REGISTRAR USUARIO
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            <form   onsubmit="return validar()"class="form-horizontal form-label-left" action="<?php echo base_url();?>
usuarios/guardar" method="POST" autocomplete="off">
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cedula_ruc">Cédula o Ruc *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="cedula_ruc" name="cedula_ruc"class="form-control col-md-7 col-xs-12" placeholder="cédula o ruc del usuario"type="text" onkeyup="validacion('cedula_ruc')" maxlength="13" onkeypress="return Solo_numeros(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="apellidos" name="apellidos"class="form-control col-md-7 col-xs-12" placeholder="apellidos del usuario"type="text" onkeyup="validacion('apellidos')"onkeypress="return Solo_letras(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombres">Nombres *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="nombres" name="nombres"class="form-control col-md-7 col-xs-12" placeholder="nombres del usuario"type="text" onkeyup="validacion('nombres')"onkeypress="return Solo_letras(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="celular">Celular *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="celular" name="celular"class="form-control col-md-7 col-xs-12" placeholder="celular del usuario"type="text" onkeyup="validacion('celular')"onkeypress="return Solo_numeros(event)">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12  input-icon right">
                        <input id="email" name="email"class="form-control col-md-7 col-xs-12" placeholder="email del usuario"type="text" onkeyup="validacion('email')">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="velocidad">Rol *</label>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <select class="chosen-select form-control" id="rol" name="rol" onchange="validacion('rol')">
                            <option value=" ">Seleccione ----></option>
                            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_rol']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                <?php if (!(($_smarty_tpl->tpl_vars['datos']->value->nombre=="Administrador")||($_smarty_tpl->tpl_vars['datos']->value->nombre=="Cliente"))) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_rol;?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre;?>
</option>
                                <?php }?>
                            <?php } ?>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                            <a href="<?php echo base_url();?>
usuarios/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
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

                            var url = '<?php echo base_url();?>
clientes/validador';
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


                                var url = '<?php echo base_url();?>
clientes/validador';
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
        <div class="page-footer-inner"> 2016 &copy; Todos los derechos reservados por Master Techgology. Desarrollado por:
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



<!-- Mirrored from www.keenthemes.com/preview/metronic/theme/admin_1/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2016 19:39:07 GMT -->
</html>
<?php }} ?>
