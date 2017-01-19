<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-02-06 23:42:34
         compiled from "/var/www/indynet/application/views/templates/backend/principal/registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103473391356a95476bd7251-81203636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f63dbd7ac0d8b76cfb08bcb8d1bc658f02275eb9' => 
    array (
      0 => '/var/www/indynet/application/views/templates/backend/principal/registrar.tpl',
      1 => 1454820088,
      2 => 'file',
    ),
    '3a948bff99bcb423f72864b9a192afeaf9c7151f' => 
    array (
      0 => '/var/www/indynet/application/views/templates/template_admin.tpl',
      1 => 1454778831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103473391356a95476bd7251-81203636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56a95476e5f114_19683052',
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
    'cliente' => 0,
    'contratoPlan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a95476e5f114_19683052')) {function content_56a95476e5f114_19683052($_smarty_tpl) {?><!DOCTYPE html>
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
                                <span class="username"><?php echo $_smarty_tpl->tpl_vars['ci']->value->session->userdata('nombre');?>
</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="app_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="app_inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox
                                        <span class="badge badge-danger"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="app_todo.html">
                                        <i class="icon-rocket"></i> My Tasks
                                        <span class="badge badge-success"> 7 </span>
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="page_user_lock_1.html">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>
salir">
                                        <i class="icon-key"></i> Log Out </a>
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
                        
                        <li class="nav-item <?php echo (($tmp = @$_smarty_tpl->tpl_vars['contratoPlan']->value)===null||$tmp==='' ? " " : $tmp);?>
">
                            <a href="<?php echo base_url();?>
contratar-plan/listar" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title"> Contratar Planes</span>
                                <span class="selected"></span>
                            </a>
                        </li>


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
            <div class="caption col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <span class="caption-subject font-dark bold uppercase">
                    DETALLE DE PAGOS
                </span>
            </div>
        </div>
        <div class="portlet-body form" id="respuesta">
            <form id="formDet" name="formDet"class="form-horizontal form-label-left" action="<?php echo base_url();?>
contratar-plan/guardar-factura-primer-mes" method="POST" autocomplete="off">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="alert alert-danger text-center" style="display:none;" id="error">
                                <button class="close" data-close="alert"></button>
                                <strong>Advertencia: </strong>Debe completar todos los campos obligatorios
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="opcionesDescuentos" class="control-label col-xs-6"><strong>Pocentajes de Descuento</strong> *</label>
                            <div class="col-xs-6">
                                <select id="opcionesDescuentos" name="opcionesDescuentos" class="form-control chosen-select" onchange="validacion('opcionesDescuentos'),CalcularDescuentos();">
                                    <option value="">Seleccione---------></option>
                                    <option value="0">De 1 a 3 días 0%</option>
                                    <option value="15">De 4 a 5 días 15%</option>
                                    <option value="30">De 6 a 10 días 30%</option>
                                    <option value="50">De 11 a 15 días 50%</option>
                                    <option value="65">De 16 a 20 días 65%</option>
                                    <option value="80">De 21 a 25 días 80%</option>
                                    <option value="90">De 26 a 28 días 90%</option>
                                    <option value="99">De 29 a 30 días 99%</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="conceptoDesc">Observaciones</label>
                            <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                <textarea id="conceptoDesc" class="form-control" name="conceptoDesc" rows="3"  ></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <h4><strong>Detalle a Pagar el Primer Mes</strong></h4>

                        <div class="table-scrollable">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th> Detalles</th>
                                        <th> Valores a Pagar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Saldo Pendiente de Instalación</td>
                                        <td> <input type="text" id="saldoPendiente"class="form-control col-md-7 col-xs-12"name="saldoPendiente" value="54.33" readonly="readonly"></td>  
                                    </tr>
                                    <tr>
                                        <td>Valor del Plan Contratado</td>
                                        <td> <input type="text" id="valorPlan"class="form-control col-md-7 col-xs-12"name="valorPlan" value="30" readonly="readonly"></td>
                                    </tr>
                                    <tr>
                                        <td>Descuento del Plan</td>
                                        <td> <input type="text" id="DescuentoPlan"class="form-control col-md-7 col-xs-12"name="DescuentoPlan" value="00" readonly="readonly"></td>
                                    </tr>
                                    <tr>
                                        <td>SubTotal del Plan</td>
                                        <td> <input type="text" id="valordeTotalPlan"class="form-control col-md-7 col-xs-12"name="valorTotalPlan" value="30" readonly="readonly"></td>
                                    </tr>
                                    <tr>
                                        <td>IVA del Plan</td>
                                        <td> <input type="text" id="ivaPlan"class="form-control col-md-7 col-xs-12"name="ivaPlan" value="3.6" readonly="readonly"></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total a Pagar</strong></td>
                                        <td> <input type="text" id="totalPagar"class="form-control col-md-7 col-xs-12"name="totalPagar" value="87.93" readonly="readonly"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 ><strong>Detalle a Pagar Mensual</strong></h4>
                        <div class="table-scrollable">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th> Desde</th>
                                        <th> Hasta </th>
                                        <th> Valor del Plan </th>
                                        <th> Iva </th>
                                        <th> Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 10-01-2016 </td>
                                        <td> 30-12-56 </td>
                                        <td> $ 24 </td>
                                        <td> $ 4.40 </td>
                                        <td> $ 27.40 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-actions">
                            <input type="hidden" name="idContratoPlan" value="39">
                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
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
            var desc = document.getElementById("opcionesDescuentos").value;
            //var observ = document.getElementById("conceptoDesc").value;
            var v1 = validacion('opcionesDescuentos');
            // var v2 = validacion('conceptoDesc');
            if (requerido(desc) == false || v1 === false) {
                $("#exito").hide();
                $("#error").show();
                return false;
            } else {
                enviarFactura();
            }
        }

        function validacion(campo) {
            if (campo === 'opcionesDescuentos') {
                indice = document.getElementById(campo).selectedIndex;
                if (indice == null || indice == 0) {
                    $('#' + campo).parent().parent().attr("class", "form-group has-error");
                    return false;
                } else {
                    $('#' + campo).parent().parent().attr("class", "form-group has-success");
                    return true;
                }
            }

        }

        function CalcularDescuentos() {
            var opcion = $("#opcionesDescuentos").val();
            var saldoP = $("#saldoPendiente").val();
            var costoPlan = $("#valorPlan").val();
            var desc = $("#DescuentoPlan").val();
            var iva = $("#ivaPlan").val();
            var saldoPendiente = parseFloat(saldoP);
            var costP = parseFloat(costoPlan);
            var descuento = parseFloat(desc);
            var ivaPlan = parseFloat(iva);
            if (opcion == "0") {
                //0%
                var descuento1 = costP * 0;
                var subtotal1 = costP - redondiarDecimales(descuento1);
                var iva1 = redondiarDecimales(subtotal1) * 0.12;
                var totalFinal1 = saldoPendiente + redondiarDecimales(subtotal1) + redondiarDecimales(iva1);
                document.formDet.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formDet.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formDet.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formDet.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "15") {
                //15%
                var descuento1 = costP * 0.15;
                var subtotal1 = costP - redondiarDecimales(descuento1);
                var iva1 = redondiarDecimales(subtotal1) * 0.12;
                var totalFinal1 = saldoPendiente + redondiarDecimales(subtotal1) + redondiarDecimales(iva1);
                document.formDet.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formDet.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formDet.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formDet.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "30") {
                //30 %
                var descuento1 = costP * 0.30;
                var subtotal1 = costP - redondiarDecimales(descuento1);
                var iva1 = redondiarDecimales(subtotal1) * 0.12;
                var totalFinal1 = saldoPendiente + redondiarDecimales(subtotal1) + redondiarDecimales(iva1);
                document.formDet.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formDet.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formDet.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formDet.totalPagar.defaultValue = redondiarDecimales(totalFinal1);

            } else if (opcion == "50") {
                //50%
                var descuento1 = costP * 0.50;
                var subtotal1 = costP - redondiarDecimales(descuento1);
                var iva1 = redondiarDecimales(subtotal1) * 0.12;
                var totalFinal1 = saldoPendiente + redondiarDecimales(subtotal1) + redondiarDecimales(iva1);
                document.formDet.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formDet.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formDet.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formDet.totalPagar.defaultValue = redondiarDecimales(totalFinal1);

            } else if (opcion == "65") {
                //65%
                var descuento1 = costP * 0.65;
                var subtotal1 = costP - redondiarDecimales(descuento1);
                var iva1 = redondiarDecimales(subtotal1) * 0.12;
                var totalFinal1 = saldoPendiente + redondiarDecimales(subtotal1) + redondiarDecimales(iva1);
                document.formDet.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formDet.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formDet.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formDet.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "80") {
                //80%
                var descuento1 = costP * 0.80;
                var subtotal1 = costP - redondiarDecimales(descuento1);
                var iva1 = redondiarDecimales(subtotal1) * 0.12;
                var totalFinal1 = saldoPendiente + redondiarDecimales(subtotal1) + redondiarDecimales(iva1);
                document.formDet.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formDet.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formDet.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formDet.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "90") {
                //90%
                var descuento1 = costP * 0.90;
                var subtotal1 = costP - redondiarDecimales(descuento1);
                var iva1 = redondiarDecimales(subtotal1) * 0.12;
                var totalFinal1 = saldoPendiente + redondiarDecimales(subtotal1) + redondiarDecimales(iva1);
                document.formDet.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formDet.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formDet.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formDet.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else if (opcion == "99") {
                //100%
                var descuento1 = costP * 0.99;
                var subtotal1 = costP - redondiarDecimales(descuento1);
                var iva1 = redondiarDecimales(subtotal1) * 0.12;
                var totalFinal1 = saldoPendiente + redondiarDecimales(subtotal1) + redondiarDecimales(iva1);
                document.formDet.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formDet.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formDet.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formDet.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            } else {
                var descuento1 = costP * 0;
                var subtotal1 = costP - redondiarDecimales(descuento1);
                var iva1 = redondiarDecimales(subtotal1) * 0.12;
                var totalFinal1 = saldoPendiente + redondiarDecimales(subtotal1) + redondiarDecimales(iva1);
                document.formDet.DescuentoPlan.defaultValue = redondiarDecimales(descuento1);
                document.formDet.valordeTotalPlan.defaultValue = redondiarDecimales(subtotal1);
                document.formDet.ivaPlan.defaultValue = redondiarDecimales(iva1);
                document.formDet.totalPagar.defaultValue = redondiarDecimales(totalFinal1);
            }
        }

        function redondiarDecimales(valor) {
            //return Math.round(valor);
            return Math.round((valor + 0.00001) * 100) / 100;
        }

        function enviarFactura() {
            var url = "<?php echo base_url();?>
contratar-plan/guardar-factura-primer-mes"; // El script a dónde se realizará la petición.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#formDet").serialize(), // Adjuntar los campos del formulario enviado.
                success: function (data)
                {
                    $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                    location.href = "<?php echo base_url();?>
contratar-plan/listar";
                }
            });

            return false;
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
