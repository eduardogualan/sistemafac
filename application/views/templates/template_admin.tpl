<!DOCTYPE html>
<html lang="es">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8" />
        <title>{$titulo}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!--favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="{base_url()}assets/layouts/layout/img/indynet.ico">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="{base_url()}assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{base_url()}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{base_url()}assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{base_url()}assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{base_url()}assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{base_url()}assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{base_url()}assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{base_url()}assets/pages/css/pricing.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <link href="{base_url()}assets/slider/css/flexslider.css" rel="stylesheet" type="text/css"/>
        <!--DATE PICKER PERSONALIZADO -->
        <link rel="stylesheet" type="text/css" href="{base_url()}assets/calendario/css/calendario.css">
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{base_url()}/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{base_url()}/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
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
                    <a href="{base_url()}home">
                        <img src="{base_url()}/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
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
                                <span class="username"><strong>Hola </strong>{$ci->utilidades->Usuario('nombre')}</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="{base_url()}usuario/perfil">
                                        <i class="icon-user"></i> Perfil </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="{base_url()}salir">
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

                        <li class="nav-item {$home|default:" "}">
                            <a href="{base_url()}home" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title"> Home</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        {if $rol=="Administrador"}
                            <li class="nav-item  {$AdministrarOpen|default:" "}">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-bank"></i>
                                    <span class="title">ADMINISTRAR</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item {$cliente|default:" "}">
                                        <a href="{base_url()}clientes/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-street-view"></i>
                                            <span class="title"> Clientes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item {$usuario|default:" "}">
                                        <a href="{base_url()}usuarios/listar" class="nav-link nav-toggle">
                                            <i class="icon-users"></i>
                                            <span class="title"> Usuarios</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item  {$antena|default:" "}">
                                        <a href="{base_url()}antena/listar" class="nav-link nav toggle">
                                            <i class="fa fa-forumbee"></i>
                                            <span class="title">Antenas</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>

                                    <li class="nav-item {$router|default:" "}">
                                        <a href="{base_url()}marcas-de-router/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-signal"></i>
                                            <span class="title"> Marcas de Router</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item {$nodo|default:" "}">
                                        <a href="{base_url()}nodo/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-tencent-weibo"></i>
                                            <span class="title"> Nodos</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item {$tPlan|default:" "}">
                                        <a href="{base_url()}tipos-de-planes/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-gears"></i>
                                            <span class="title"> Tipos de Planes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item {$plan|default:" "} ">
                                        <a href="{base_url()}planes/listar" class="nav-link nav-toggle">
                                            <i class="fa fa-certificate"></i>
                                            <span class="title"> Planes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        {/if}
                        {if !(($rol == "Suscriptor") || ($rol == "Cliente"))}
                            <li class="nav-item {$contratoPlan|default:" "}">
                                <a href="{base_url()}contratar-plan/listar" class="nav-link nav-toggle">
                                    <i class="fa fa-feed"></i>
                                    <span class="title"> Contratar Planes</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                           
                            <li class="nav-item  {$facturacionOpen|default:" "}">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-credit-card"></i>
                                    <span class="title">FACTURACIÓN</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  {$cobrarPlanes|default:" "}">
                                        <a href="{base_url()}cobrar/plan" class="nav-link nav toggle">
                                            <i class="fa fa-money"></i>
                                            <span class="title">Cobrar Planes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>

                                    <li class="nav-item {$facturasPendientes|default:" "}">
                                        <a href="{base_url()}facturas-pendientes" class="nav-link nav-toggle">
                                            <i class="fa fa-list"></i>
                                            <span class="title"> Facturas Pendientes</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item {$facturasPagados|default:" "}">
                                        <a href="{base_url()}facturas-pagadas" class="nav-link nav-toggle">
                                            <i class="fa fa-list-alt"></i>
                                            <span class="title"> Facturas Pagadas</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        {/if}
                        {if $rol !="Suscriptor"}
                            <li class="nav-item {$facturasOpen|default:" "}">
                                <a href="{base_url()}facturas/listar" class="nav-link nav-toggle">
                                    <i class="fa fa-sticky-note-o"></i>
                                    <span class="title"> Facturas</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item {$routerOpen|default:" "}">
                                <a href="{base_url()}router/listar" class="nav-link nav-toggle">
                                    <i class="fa fa-wifi"></i>
                                    <span class="title"> Router</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        {/if}
                        {if $rol == "Suscriptor"}
                            <li class="nav-item {$ProformasOpen|default:" "}">
                                <a href="{base_url()}proformas" class="nav-link nav-toggle">
                                    <i class="fa fa-clone"></i>
                                    <span class="title"> Proformas</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        {/if}


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
                        {block name="contenido"}{/block}
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
    <script src="{base_url()}/assets/global/plugins/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{base_url()}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{base_url()}assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="{base_url()}assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="{base_url()}assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="{base_url()}assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{base_url()}/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <script src="{base_url()}assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{base_url()}/assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{base_url()}assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!--DATEPICKER PRSONALIZADO -->
    <script type="text/javascript" src="{base_url()}assets/calendario/js/calendario.js"></script>
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{base_url()}/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="{base_url()}/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <script src="{base_url()}assets/validar/validar.js"></script>
    <script src="{base_url()}assets/validar/validarIdentidad.js"></script>
    <script src="{base_url()}assets/slider/js/jquery.flexslider.js"></script>

</body>
</html>
