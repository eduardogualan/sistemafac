<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-03-03 22:27:33
         compiled from "/var/www/indynet/application/views/templates/backend/contrato_plan/registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169917902156ad8874cdd4c6-15507436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aadc3ecadacabb800bfdaf70b42953a79576108' => 
    array (
      0 => '/var/www/indynet/application/views/templates/backend/contrato_plan/registrar.tpl',
      1 => 1457060904,
      2 => 'file',
    ),
    '3a948bff99bcb423f72864b9a192afeaf9c7151f' => 
    array (
      0 => '/var/www/indynet/application/views/templates/template_admin.tpl',
      1 => 1457051778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169917902156ad8874cdd4c6-15507436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56ad887611e0e6_92204542',
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
<?php if ($_valid && !is_callable('content_56ad887611e0e6_92204542')) {function content_56ad887611e0e6_92204542($_smarty_tpl) {?><!DOCTYPE html>
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
                    CONTRATAR PLAN
                    <span class="step-title"> Avance 1 de 4 </span>
                </span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['rol']->value=="Empleado") {?>
                <div class="actions">
                    <a href="<?php echo base_url();?>
clientes/registrar"class="btn btn-primary"><i class="fa fa-pencil"></i> CREAR CLIENTE</a>
                </div>
            <?php }?>
        </div>
        <div class="portlet-body form">
            <form name="formCP"class="form-horizontal form-label-left"  id="submit_form" method="POST" action="<?php echo base_url();?>
contratar-plan/guardar" autocomplete="off">
                <div class="form-wizard">
                    <div class="form-body">
                        <?php if ($_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message')) {?>
                            <div class="alert alert-success text-center">
                                <button class="close" data-close="alert"></button>
                                <strong>Felicidades: </strong><?php echo $_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message');?>

                            </div>  
                        <?php }?>
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
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cedula_ruc">Cédula o Ruc *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="country_list" class="form-control" name="cedula_ruc" onchange="CargarCliente()">
                                            <option value="">Seleccione -------></option>
                                            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Persona']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->cedula_ruc;?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value->cedula_ruc;?>
</option>
                                            <?php } ?>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div id="mostrarCliente">          
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="provincia" class="form-control" name="provincia" > 
                                            <option value="">Seleccione -------></option>
                                            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaProvincia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_provincia;?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre_provincia;?>
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
                                            
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="calles">Calles *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="calles"class="form-control col-md-7 col-xs-12" placeholder="ejemplo 10 de agosto y ramón pinto" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numeroCasa">Número de Casa *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="numeroCasa"class="form-control col-md-7 col-xs-12" placeholder="ejemplo 57 - 34" type="text" maxlength="10">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="referenciaLugar">Referencia del Lugar
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input  name="referenciaLugar"class="form-control col-md-7 col-xs-12" placeholder="ejemplo una cuadra antes del subcentro de salud" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nodoEnlazado">Nodo Enlazado *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="nodoEnlazado" name="nodoEnlazado" >
                                            <option value="">Seleccione -------></option>
                                            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaNodo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_nodoEnlazado;?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre_nodoEnlazado;?>
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
                                            <option value="">Seleccione -------></option>
                                            <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaAntena']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_antena;?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre_antena;?>
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
                                            <option value="2.4 GHZ">2.4 GHZ</option>
                                            <option value="5.8 GHZ">5.8 GHZ</option>

                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionIpWan">Dirección IP Wan *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="direccionIpWan" name="direccionIpWan"class="form-control col-md-7 col-xs-12" placeholder="ingrese la dirección ip wan"type="text" onkeyup="validarIP('direccionIpWan')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="puerta_enlace">Puerta de Enlace *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="puerta_enlace" name="puerta_enlace"class="form-control col-md-7 col-xs-12" placeholder="ingrese la puerta de enlace"type="text" onkeyup="validarIP('puerta_enlace')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dns">DNS *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="dns" name="dns"class="form-control col-md-7 col-xs-12" placeholder="ingrese el DNS"type="text" onkeyup="validarIP('dns')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subred">Subred </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                        <input id="subred" name="subred"class="form-control col-md-7 col-xs-12" placeholder="ingrese una subred"type="text" onkeyup="validarIP('subred')" maxlength="15">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
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
                            </div>
                             <div class="tab-pane" id="tab3">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha">Fecha de Inicio de Servicio *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="fecha"name="fecha" class="form-control col-md-7 col-xs-12 " type="date" value=""  />
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_plan">Tipo de Plan *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="chosen-select form-control" id="tipoPlan" name="tipoPlan" >
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
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <input type="hidden" id="CostoPlan" value="" name="CostoPlan">

                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valor_instalacion">Valor de Instalación *
                                        <span class="required"> </span>
                                    </label>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <input id="valor_instalacion" name="valor_instalacion"class="form-control col-md-7 col-xs-12" placeholder="valor de instalación"type="text" onkeypress="return SoloNumerosDecimales(event, '0.0', 6, 2);" onkeyup="MostrarOpcionesDePagos()">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <label class="control-label"> $</label>
                                    </div>
                                </div>
                                <div class="item form-group" id="OpcionDepagos">

                                </div>
                                <div id="valor_pagadoIntalacion">
                                    
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
                                                        <th>Cliente: </th>
                                                        <th><p class="form-control-static" data-display="cliente"> </p></th>
                                                    </tr>
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
                                                        <th><p class="form-control-static" data-display="costoPlan"> </p> $</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Valor de Instalación: </th>
                                                        <th><p class="form-control-static" data-display="valor_instalacion"> </p> $</th>
                                                    </tr>
                                                     <tr>
                                                        <th>Pago de Instalación: </th>
                                                        <th><p class="form-control-static" data-display="paga_instalacion"> </p></th>
                                                    </tr>
                                                     <tr>
                                                        <th>Recargo de Instalación: </th>
                                                        <th><p class="form-control-static" data-display="saldoPendiente"> </p> $</th>
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
                                    <i class="fa fa-angle-left"></i> Anterior </a>&nbsp;&nbsp;
                                <a href="javascript:;" class="btn btn-outline green button-next"> Siguiente
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <a href="<?php echo base_url();?>
contratar-plan/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                                <button type="submit" class="button-submit btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button> &nbsp;&nbsp; &nbsp;&nbsp;
                            </div>
                        </div>
                    </div> 
                    <div id="ajax_loader"><img id="loader_gif" src="loader.gif" class="display-none"/></div>
                </div>
            </form>
        </div>
    </div>
     <script src="<?php echo base_url();?>
/assets/global/plugins/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script>
        //cargar tipos d eplanes y costo
         $("document").ready(function() {
        $("#tipoPlan").load("<?php echo base_url();?>
contratar-plan/consultar-tipo-plan");
           //selecionar velocidad
        $("#tipoPlan").change(function() {
             var url = '<?php echo base_url();?>
contratar-plan/consultar-plan';
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
                var url = '<?php echo base_url();?>
contratar-plan/consultar-valor-mensual-plan';
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
    var url = '<?php echo base_url();?>
Jquery_control/CargarCanton';
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
    var url = '<?php echo base_url();?>
Jquery_control/CargarParroquias';
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
    
    
    //cargar cantones y parroquias
  function CargarCantones(){
  var idProvincia = $("#provincia").val();
    var url = '<?php echo base_url();?>
Jquery_control/CargarCanton';
     $.ajax({
        type: "POST",
        url: url,
        data:"idProvincia="+idProvincia,
        dataType: "html",
        success: function (data) {
        $("#Opcionescanton").html(data);
        }
    }); 
    
  }
  
  function CargarParroquias(){
    var idcanton = $("#canton").val();
    var url = '<?php echo base_url();?>
Jquery_control/CargarParroquias';
     $.ajax({
        type: "POST",
        url: url,
        data:"idcanton="+idcanton,
        dataType: "html",
        success: function (data) {
        $("#Opcionesparroquias").html(data);
        }
    }); 
  }

//mostrar opciones de pagos
$('#valor_instalacion').on('keyup', function(){
     var valor_instalacion = $("#valor_instalacion").val();
    var url = "<?php echo base_url();?>
contratar-plan/mostrar-opcion-pagos";
    $.ajax({
        type: "POST",
        url: url,
        data:"valor_instalacion="+valor_instalacion,
        dataType: "html",
        success: function (data) {
        $("#OpcionDepagos").html(data);
                       //alert(data);

        }
    }); 
    
 });
 //mostrar las tres opcionesde pagos
   function OpcionPago(){
    var valor = $("#paga_instalacion").val();
    var valorMensual = $("#CostoPlan").val();
    var valor_instalacion = $("#valor_instalacion").val();
    var url = "<?php echo base_url();?>
contratar-plan/valor-instalcion-pagar";
    $.ajax({
        type: "POST",
        url: url,
        data: {valor:valor, valor_instalacion:valor_instalacion, valorMensual: valorMensual},
        dataType: "html",
        success: function (data) {
        $("#valor_pagadoIntalacion").html(data);
        
        }
    });
    
  }
  
//calcular saldo pendiendte de pago de instalcion
    function calcularValorPagar(){
        var valor_instalacion = $("#valor_instalacion").val();
        var valor_pagado = $("#valorPagado").val();
        var total = $("#totalPagar").val();
       var ValorIns = parseFloat(valor_instalacion); // decimal = 1234.0987
       var ValorPagodo = parseFloat(valor_pagado); // decimal = 1234.0987
       var TotalPagar = parseFloat(total); // decimal = 1234.0987
     if(ValorIns<ValorPagodo){
        $('#valorPagado').parent().parent().attr("class", "form-group has-error");
        $('#valorPagado').parent().children('span').text("el valor pagado no puede ser mayor al valor de instalación").show();
        document.formCP.saldoPendiente.defaultValue = ""; 
        document.formCP.valorPagado.defaultValue = ""; 
        document.formCP.totalPagar.defaultValue = "";
        }else{
        var saldo = ValorIns - ValorPagodo;
       document.formCP.saldoPendiente.defaultValue = saldo;  
       var iva = $("#ivaPlan").val();
       var subtotal = $("#valordeTotalPlan").val();
       var recargo = $("#saldoPendiente").val();
       var ivaPlan = parseFloat(iva); 
       var subTotalPlan = parseFloat(subtotal); 
       var recargoPlan = parseFloat(recargo); 
        document.formCP.totalPagar.defaultValue = ivaPlan + subTotalPlan+recargoPlan;  
       $('#valorPagado').parent().parent().attr("class", "form-group has-success");
       $('#valorPagado').parent().children('span').hide();
     }
        
    }
         //seleccionar opciones de router
   $(document).ready(function(){
    $("input[name=gender]").click(function () {    
        var valor = $(this).val();
         var url = "<?php echo base_url();?>
contratar-plan/mostrar-campos-de-router";
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
//mostrar fecha
    $(function(){
	$("#fecha").datepicker({  maxDate: '0d'});
	
    });

function CargarCliente(){
    var url ="<?php echo base_url();?>
contratar-plan/cargar-cliente-combobox";
    var cedula_ruc = $("#country_list").val();
   // alert(url);
     $.ajax({
            type: "POST",
            url: url,
            data: 'cedula_ruc=' + cedula_ruc,
            dataType: "html",
            success: function (data) {
                $("#mostrarCliente").html(data);
            }
    });
}


$(document).ready(function(){
    $("#submit_form").submit(function(){
	$.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),		
            success:function(data){
                         //$("#form_wizard_1").html(data);
                         location.href="<?php echo base_url();?>
contratar-plan/acuerdo-contrato-pdf/"+data;
            }
        });
 
    });
    return false;
});
 
</script>
<script>
        
           function CalcularDescuentos() {
            var opcion = $("#opcionesDescuentos").val();
            var saldoP = $("#saldoPendiente").val();
            var costoPlan = $("#costoPlan").val();
            //alert(costoPlan);
            var desc = $("#DescuentoPlan").val();
            var iva = $("#ivaPlan").val();
            var saldoPendiente = parseFloat(saldoP);
            var costP = parseFloat(costoPlan);
            var descuento = parseFloat(desc);
            var ivaPlan = parseFloat(iva);
            if (opcion == "0") {
                //0%
                var descuento1 = costP * 0;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "15") {
                //15%
             var descuento1 = costP * 0.15;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "30") {
                //30 %
             var descuento1 = costP * 0.30;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);

            } else if (opcion == "50") {
                //50%
                   var descuento1 = costP * 0.50;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);

            } else if (opcion == "65") {
                  var descuento1 = costP * 0.65;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "80") {
                //80%
                  var descuento1 = costP * 0.80;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "90") {
                //90%
                var descuento1 = costP * 0.90;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "99") {
                //100%
                  var descuento1 = costP * 0.99;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            }else{
                 var descuento1 = costP * 0;
                var subtotal1 = costP - descuento1;
                var iva1 = subtotal1 * 0.12;
                var totalFinal1 = saldoPendiente + subtotal1 + iva1;
                document.formCP.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formCP.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formCP.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formCP.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            }
        }

        function redondiarDecimales(valor) {
            //return Math.round(valor);
            return Math.round((valor + 0.00001) * 100) / 100;
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
