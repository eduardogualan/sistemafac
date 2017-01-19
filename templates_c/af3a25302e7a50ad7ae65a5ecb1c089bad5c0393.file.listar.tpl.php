<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-03-02 16:00:47
         compiled from "/var/www/indynet/application/views/templates/backend/cliente/listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36981661756aaf56d95abf1-85025796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3a25302e7a50ad7ae65a5ecb1c089bad5c0393' => 
    array (
      0 => '/var/www/indynet/application/views/templates/backend/cliente/listar.tpl',
      1 => 1456952441,
      2 => 'file',
    ),
    '3a948bff99bcb423f72864b9a192afeaf9c7151f' => 
    array (
      0 => '/var/www/indynet/application/views/templates/template_admin.tpl',
      1 => 1456877609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36981661756aaf56d95abf1-85025796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56aaf56daec4c7_66541993',
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
<?php if ($_valid && !is_callable('content_56aaf56daec4c7_66541993')) {function content_56aaf56daec4c7_66541993($_smarty_tpl) {?><!DOCTYPE html>
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
                                
    <div class="portlet light portlet-fit portlet-datatable bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark sbold uppercase">LISTAR CLIENTES</span>
            </div>
            <div class="actions">
                <a href="<?php echo base_url();?>
clientes/registrar"class="btn btn-primary"><i class="fa fa-pencil"></i> NUEVO</a>
                <div class="btn-group">
                    <a class="btn btn-warning" href="javascript:;" data-toggle="dropdown">
                        <i class="fa fa-share"></i>
                        <span class="hidden-xs"> Funciones </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right" id="sample_3_tools">
                        <li>
                            <a href="javascript:;" data-action="0" class="tool-action">
                                <i class="icon-printer"></i> Imprimir</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="1" class="tool-action">
                                <i class="fa fa-copy"></i> Copiar</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="2" class="tool-action">
                                <i class="fa fa-file-pdf-o"></i> PDF</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="3" class="tool-action">
                                <i class="fa fa-file-excel-o"></i> Excel</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="4" class="tool-action">
                                <i class="icon-cloud-upload"></i> CSV</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-container">
                <?php if ($_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message')) {?>
                    <div class="alert alert-success text-center">
                        <button class="close" data-close="alert"></button>
                        <strong>Felicidades: </strong><?php echo $_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message');?>

                    </div>  
                <?php }?>
                <table class="table table-striped table-bordered table-hover" id="sample_3">
                    <thead>
                        <tr>
                            <th>Cédula o Ruc </th>
                            <th>Cliente </th>
                            <th>Teléfono </th>
                            <th>Celular </th>
                            <th>Email </th>
                            <th>Ultimo Acceso </th>
                            <th> Acción </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['datos']->value->persona->rol->nombre=='Cliente') {?>
                                <tr>
                                    <td> <?php echo $_smarty_tpl->tpl_vars['datos']->value->persona->cedula_ruc;?>
 </td>
                                    <td> <?php echo $_smarty_tpl->tpl_vars['datos']->value->persona->apellidos;?>
<?php echo " ";?>
<?php echo $_smarty_tpl->tpl_vars['datos']->value->persona->nombres;?>
 </td>
                                    <td> <?php echo $_smarty_tpl->tpl_vars['datos']->value->persona->telefono;?>
 </td>
                                    <td> <?php echo $_smarty_tpl->tpl_vars['datos']->value->persona->celular;?>
 </td>
                                    <td> <?php echo $_smarty_tpl->tpl_vars['datos']->value->persona->email;?>
 </td>
                                    <td> <?php echo $_smarty_tpl->tpl_vars['datos']->value->ultimo_acceso;?>
 </td>
                                    <td> 
                                        <a href="<?php echo base_url();?>
clientes/modificar/<?php echo $_smarty_tpl->tpl_vars['datos']->value->persona->id_persona;?>
" class="btn btn-xs btn-success" title="Modificar"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo base_url();?>
usuarios/modificar/<?php echo $_smarty_tpl->tpl_vars['datos']->value->persona->id_persona;?>
" class="btn btn-xs btn-info" title="Cambiar Rol"><i class="fa fa-sign-out"></i></a>
                                        <a  href="#ventana1" class="btn btn-xs btn-warning" data-toggle="modal" title="Resetear Cuenta"><i class="fa fa-key"></i></a>
                                        <div class="modal fade" id="ventana1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" arial-hidden="true">&times;;</button>
                                                        <h6 class="text-center text-danger"><strong>ESTA SEGURO QUE DESEA RESETEAR LA CUENTA DE ESTE CLIENTE?</strong></h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <div class="form-actions"> 
                                                                    <a href="<?php echo base_url();?>
usuarios/resetear-cuenta-cliente/<?php echo $_smarty_tpl->tpl_vars['datos']->value->id_cuenta;?>
"class="btn btn-primary pull-left"><i class="fa fa-thumbs-up"></i> SI</a>
                                                                    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" ><i class="fa fa-close"></i> NO </button>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                       <h1> </h1>
                                                       <h1> </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php }?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
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
