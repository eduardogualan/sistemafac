<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-02-22 13:28:42
         compiled from "/var/www/indynet/application/views/templates/backend/contrato_plan/principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169812886356cb521c620e59-51693326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b367da346f0c788761ca7435d55b7f3b9ca982b' => 
    array (
      0 => '/var/www/indynet/application/views/templates/backend/contrato_plan/principal.tpl',
      1 => 1456165717,
      2 => 'file',
    ),
    '3a948bff99bcb423f72864b9a192afeaf9c7151f' => 
    array (
      0 => '/var/www/indynet/application/views/templates/template_admin.tpl',
      1 => 1456007942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169812886356cb521c620e59-51693326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56cb521c7b6ee3_58681271',
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
<?php if ($_valid && !is_callable('content_56cb521c7b6ee3_58681271')) {function content_56cb521c7b6ee3_58681271($_smarty_tpl) {?><!DOCTYPE html>
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
/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
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
                                <li>
                                    <a href="app_calendar.html">
                                        <i class="icon-settings"></i> Configuración </a>
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
                                    <i class="icon-bulb"></i>
                                    <span class="title">ADMINISTRAR</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['antena']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
antena/listar" class="nav-link nav toggle">
                                            <i class="icon-wrench"></i>
                                            <span class="title">Antenas</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>

                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['router']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
marcas-de-router/listar" class="nav-link nav-toggle">
                                            <i class="icon-settings"></i>
                                            <span class="title"> Marcas de Router</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['nodo']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
nodo/listar" class="nav-link nav-toggle">
                                            <i class="icon-settings"></i>
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
                                            <i class="icon-settings"></i>
                                            <span class="title"> Usuarios</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
clientes/listar" class="nav-link nav-toggle">
                                            <i class="icon-settings"></i>
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
                                    <i class="icon-home"></i>
                                    <span class="title"> Contratar Planes</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                           
                            <li class="nav-item  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['facturacionOpen']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-bulb"></i>
                                    <span class="title">FACTURACIÓN</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cobrarPlanes']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
cobrar/plan" class="nav-link nav toggle">
                                            <i class="icon-wrench"></i>
                                            <span class="title">Cobrar Planes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>

                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['facturasPendientes']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
facturas-pendientes" class="nav-link nav-toggle">
                                            <i class="icon-settings"></i>
                                            <span class="title"> Facturas Pendientes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['facturasPagados']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                        <a href="<?php echo base_url();?>
facturas-pagadas" class="nav-link nav-toggle">
                                            <i class="icon-settings"></i>
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
                                    <i class="icon-home"></i>
                                    <span class="title"> Facturas</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['routerOpen']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                                <a href="<?php echo base_url();?>
router/listar" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
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
                    SISTEMA DE GESTION DE PAGOS DE SERVICIO DE INTERNET
                </span>
            </div>
        </div>
       <div class="portlet-body form">
            <?php  $_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['obj']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->key => $_smarty_tpl->tpl_vars['obj']->value) {
$_smarty_tpl->tpl_vars['obj']->_loop = true;
?>
            <form class="form-horizontal form-label-left"   method="POST" action="<?php echo base_url();?>
contratar-plan/modificar-registro/<?php echo $_smarty_tpl->tpl_vars['obj']->value->id_contrato;?>
" autocomplete="off">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->id_contrato;?>
" id="id_contrato">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->cedula_ruc;?>
" id="cedula_ruc" name="cedula_ruc">
                <div class="form-wizard">
                    <div class="form-body">
                        <?php if ($_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message')) {?>
                            <div class="alert alert-success text-center">
                                <button class="close" data-close="alert"></button>
                                <strong>Felicidades: </strong><?php echo $_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message');?>

                            </div>  
                        <?php }?>
                        <div id="bar" class="progress progress-striped" role="progressbar">
                            <div class="progress-bar progress-bar-success"> </div>
                        </div>
                        <div class="tab-content">
                            <div class=" text-center alert alert-danger display-none">
                                <button class="close" data-dismiss="alert"></button> 
                                <strong>Advertencia</strong> complete todos los campos obligatorios para poder continuar
                            </div>
                            <div >
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="provincia" class="form-control" name="provincia" >
                                            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaProvincia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_provincia;?>
" <?php if ($_smarty_tpl->tpl_vars['obj']->value->nombre_provincia==$_smarty_tpl->tpl_vars['datos']->value->nombre_provincia) {?><?php echo 'selected';?>
<?php }?>><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre_provincia;?>
</option>
                                            <?php } ?>
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
                                            <option value="$obj->id_canton"><?php echo $_smarty_tpl->tpl_vars['obj']->value->nombre_canton;?>
</option>    
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
                                            <option value="$obj->id_parroquia"><?php echo $_smarty_tpl->tpl_vars['obj']->value->nombre_parroquia;?>
</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="calles">Calles *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="calles"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->calles;?>
" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numeroCasa">Número de Casa *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="numeroCasa"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->numero_casa;?>
" type="text" maxlength="10">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="referenciaLugar">Referencia del Lugar
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="referenciaLugar"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->referencia;?>
" type="text">
                                    </div>
                                </div>

                            </div>
                                    <div >
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nodoEnlazado">Nodo Enlazado *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="nodoEnlazado" name="nodoEnlazado" >
                                            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaNodo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_nodoEnlazado;?>
" <?php if ($_smarty_tpl->tpl_vars['obj']->value->nombre_nodoEnlazado==$_smarty_tpl->tpl_vars['datos']->value->nombre_nodoEnlazado) {?><?php echo 'selected';?>
<?php }?> ><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre_nodoEnlazado;?>
</option>
                                            <?php } ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="antena">Antena Utilizada *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="antena" name="antena" >
                                            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaAntena']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_antena;?>
 <?php if ($_smarty_tpl->tpl_vars['obj']->value->nombre_antena==$_smarty_tpl->tpl_vars['datos']->value->nombre_antena) {?><?php echo 'selected';?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre_antena;?>
</option>
                                            <?php } ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="frecuencia">Frecuencia Utilizada *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="frecuencia" name="frecuencia">
                                            <option value="">Seleccione -------></option>
                                            <option value="2.4 GHZ"<?php if ($_smarty_tpl->tpl_vars['obj']->value->frecuencia=='2.4 GHZ') {?><?php echo 'selected';?>
<?php }?>>2.4 GHZ</option>
                                            <option value="5.8 GHZ"<?php if ($_smarty_tpl->tpl_vars['obj']->value->frecuencia=='5.8 GHZ') {?><?php echo 'selected';?>
<?php }?>>5.8 GHZ</option>

                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionIpWan">Dirección IP Wan *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="direccionIpWan" name="direccionIpWan"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->direccion_ipWan;?>
"type="text" onkeyup="validarIP('direccionIpWan')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="puerta_enlace">Puerta de Enlace *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="puerta_enlace" name="puerta_enlace"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->gateway;?>
"type="text" onkeyup="validarIP('puerta_enlace')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dns">DNS *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="dns" name="dns"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->dns;?>
"type="text" onkeyup="validarIP('dns')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subred">Subred </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="subred" name="subred"class="form-control col-md-7 col-xs-12"value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->subred;?>
"type="text" onkeyup="validarIP('subred')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['obj']->value->id_router=='') {?>
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
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['obj']->value->id_router!='') {?>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="marcaRouter">Marca de Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="marcaRouter" name="marcaRouter">
                                            <option value="">Seleccione -------></option>
                                            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaRouter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_marcaRouter;?>
" <?php if ($_smarty_tpl->tpl_vars['obj']->value->nombre_marcaRouter==$_smarty_tpl->tpl_vars['datos']->value->nombre_marcaRouter) {?><?php echo 'selected';?>
<?php }?>><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre_marcaRouter;?>
</option>
                                            <?php } ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionIpRouter">IP del Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="direccionIpRouter" name="direccionIpRouter"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->ip_router;?>
" type="text" onkeyup="validarIP(' . "'direccionIpRouter')" . ' " maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombrewifi">Nombre de Wifi *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="nombrewifi" name="nombrewifi"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->nombre_wifi;?>
" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseniawifi">Contraseña de Wifi *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="contraseniawifi" name="contraseniawifi"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->clave_wifi;?>
"type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                 <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuariorouter">Usuario de Acceso al Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="usuariorouter" name="usuariorouter"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->usuario_router;?>
" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseniarouter">Contraseña de Acceso al Router *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="contraseniarouter" name="contraseniarouter"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->clave_router;?>
" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                             <div >
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_plan">Tipo de Plan *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="tipoPlan" name="tipoPlan" >
                                                <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaTipoPlan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_tipoPlan;?>
" <?php if ($_smarty_tpl->tpl_vars['obj']->value->id_tipoPlan==$_smarty_tpl->tpl_vars['datos']->value->id_tipoPlan) {?><?php echo 'selected';?>
<?php }?>><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre;?>
</option>
                                                <?php } ?>
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
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->id_plan;?>
"><?php echo $_smarty_tpl->tpl_vars['obj']->value->velocidad;?>
<?php echo " ";?>
<?php echo $_smarty_tpl->tpl_vars['obj']->value->descripcion;?>
</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="CostoPlan">Valor Mensual *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <input id="CostoPlan" name="CostoPlan"class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->valor_mensual;?>
" type="text" readonly="readonly">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <label class="control-label"> $</label>
                                    </div>
                                </div>
                            </div>
                            <div >
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <div class=" text-center alert alert-info">
                                            <button class="close" data-dismiss="alert"></button> 
                                            <strong>Información</strong> Si no esta seguro de los datos ingresados puede revisar haciendo click en el botón "Anterior",
                                            para desplazar hacia atras o hacer click en el botón "Siguiente" para desplazar hacia delante.<br/>
                                            Si cree que los datos ingresados estan correctos precione el botón GUARDAR para registrar este contrato en el sistema
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit"class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button> &nbsp;
                    
                </div>
            </form>
          <?php } ?>
        </div>
       

    </div>


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
        <div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
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

</body>



<!-- Mirrored from www.keenthemes.com/preview/metronic/theme/admin_1/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2016 19:39:07 GMT -->
</html>
<?php }} ?>
