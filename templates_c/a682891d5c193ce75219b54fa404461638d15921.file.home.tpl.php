<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-01-27 18:14:42
         compiled from "/var/www/indynet/application/views/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47109346256a9383f107ac0-80542331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a682891d5c193ce75219b54fa404461638d15921' => 
    array (
      0 => '/var/www/indynet/application/views/templates/home.tpl',
      1 => 1453936460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47109346256a9383f107ac0-80542331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_56a9383f214a52_42087384',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a9383f214a52_42087384')) {function content_56a9383f214a52_42087384($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8" />
        <title>Metronic | Form Wizard</title>
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
                    <a href="index-2.html">
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
                                <span class="username"> Angel Eduardo Gualan Lozano</span>
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
                                    <a href="page_user_login_1.html">
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
                      
                        <li class="nav-item start ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="index-2.html" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Dashboard 1</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="dashboard_2.html" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title">Dashboard 2</span>
                                        <span class="badge badge-success">1</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="dashboard_3.html" class="nav-link ">
                                        <i class="icon-graph"></i>
                                        <span class="title">Dashboard 3</span>
                                        <span class="badge badge-danger">5</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Features</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">UI Features</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="ui_colors.html" class="nav-link ">
                                        <span class="title">Color Library</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_general.html" class="nav-link ">
                                        <span class="title">General Components</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_buttons.html" class="nav-link ">
                                        <span class="title">Buttons</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_confirmations.html" class="nav-link ">
                                        <span class="title">Popover Confirmations</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_icons.html" class="nav-link ">
                                        <span class="title">Font Icons</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_socicons.html" class="nav-link ">
                                        <span class="title">Social Icons</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_typography.html" class="nav-link ">
                                        <span class="title">Typography</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_tabs_accordions_navs.html" class="nav-link ">
                                        <span class="title">Tabs, Accordions & Navs</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_timeline.html" class="nav-link ">
                                        <span class="title">Timeline</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_tree.html" class="nav-link ">
                                        <span class="title">Tree View</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Page Progress Bar</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="ui_page_progress_style_1.html" class="nav-link "> Flash </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="ui_page_progress_style_2.html" class="nav-link "> Big Counter </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_blockui.html" class="nav-link ">
                                        <span class="title">Block UI</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_bootstrap_growl.html" class="nav-link ">
                                        <span class="title">Bootstrap Growl Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_notific8.html" class="nav-link ">
                                        <span class="title">Notific8 Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_toastr.html" class="nav-link ">
                                        <span class="title">Toastr Notifications</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_bootbox.html" class="nav-link ">
                                        <span class="title">Bootbox Dialogs</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_alerts_api.html" class="nav-link ">
                                        <span class="title">Metronic Alerts API</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_session_timeout.html" class="nav-link ">
                                        <span class="title">Session Timeout</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_idle_timeout.html" class="nav-link ">
                                        <span class="title">User Idle Timeout</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_modals.html" class="nav-link ">
                                        <span class="title">Modals</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_extended_modals.html" class="nav-link ">
                                        <span class="title">Extended Modals</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_tiles.html" class="nav-link ">
                                        <span class="title">Tiles</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_datepaginator.html" class="nav-link ">
                                        <span class="title">Date Paginator</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ui_nestable.html" class="nav-link ">
                                        <span class="title">Nestable List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Components</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="components_date_time_pickers.html" class="nav-link ">
                                        <span class="title">Date & Time Pickers</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_color_pickers.html" class="nav-link ">
                                        <span class="title">Color Pickers</span>
                                        <span class="badge badge-danger">2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_select2.html" class="nav-link ">
                                        <span class="title">Select2 Dropdowns</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_select.html" class="nav-link ">
                                        <span class="title">Bootstrap Select</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_multi_select.html" class="nav-link ">
                                        <span class="title">Multi Select</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                                        <span class="title">Select Splitter</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_typeahead.html" class="nav-link ">
                                        <span class="title">Typeahead Autocomplete</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_tagsinput.html" class="nav-link ">
                                        <span class="title">Bootstrap Tagsinput</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_switch.html" class="nav-link ">
                                        <span class="title">Bootstrap Switch</span>
                                        <span class="badge badge-success">6</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_maxlength.html" class="nav-link ">
                                        <span class="title">Bootstrap Maxlength</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_fileinput.html" class="nav-link ">
                                        <span class="title">Bootstrap File Input</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_bootstrap_touchspin.html" class="nav-link ">
                                        <span class="title">Bootstrap Touchspin</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_form_tools.html" class="nav-link ">
                                        <span class="title">Form Widgets & Tools</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_context_menu.html" class="nav-link ">
                                        <span class="title">Context Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_editors.html" class="nav-link ">
                                        <span class="title">Markdown & WYSIWYG Editors</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_code_editors.html" class="nav-link ">
                                        <span class="title">Code Editors</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_ion_sliders.html" class="nav-link ">
                                        <span class="title">Ion Range Sliders</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_noui_sliders.html" class="nav-link ">
                                        <span class="title">NoUI Range Sliders</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="components_knob_dials.html" class="nav-link ">
                                        <span class="title">Knob Circle Dials</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Form Stuff</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="form_controls.html" class="nav-link ">
                                        <span class="title">Bootstrap Form
                                            <br>Controls</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_controls_md.html" class="nav-link ">
                                        <span class="title">Material Design
                                            <br>Form Controls</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_validation.html" class="nav-link ">
                                        <span class="title">Form Validation</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_validation_states_md.html" class="nav-link ">
                                        <span class="title">Material Design
                                            <br>Form Validation States</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_validation_md.html" class="nav-link ">
                                        <span class="title">Material Design
                                            <br>Form Validation</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_layouts.html" class="nav-link ">
                                        <span class="title">Form Layouts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_input_mask.html" class="nav-link ">
                                        <span class="title">Form Input Mask</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_editable.html" class="nav-link ">
                                        <span class="title">Form X-editable</span>
                                    </a>
                                </li>
                                <li class="nav-item  active open">
                                    <a href="form_wizard.html" class="nav-link ">
                                        <span class="title">Form Wizard</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_icheck.html" class="nav-link ">
                                        <span class="title">iCheck Controls</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_image_crop.html" class="nav-link ">
                                        <span class="title">Image Cropping</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_fileupload.html" class="nav-link ">
                                        <span class="title">Multiple File Upload</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_dropzone.html" class="nav-link ">
                                        <span class="title">Dropzone File Upload</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bulb"></i>
                                <span class="title">Elements</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="elements_steps.html" class="nav-link ">
                                        <span class="title">Steps</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_lists.html" class="nav-link ">
                                        <span class="title">Lists</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_ribbons.html" class="nav-link ">
                                        <span class="title">Ribbons</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_overlay.html" class="nav-link ">
                                        <span class="title">Overlays</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_cards.html" class="nav-link ">
                                        <span class="title">User Cards</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Tables</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Static Tables</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="table_static_basic.html" class="nav-link "> Basic Tables </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_static_responsive.html" class="nav-link "> Responsive Tables </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_bootstrap_master.html" class="nav-link "> Bootstrap Table </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Datatables</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_colreorder.html" class="nav-link "> Colreorder Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_rowreorder.html" class="nav-link "> Rowreorder Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_fixedheader.html" class="nav-link "> FixedHeader Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_responsive.html" class="nav-link "> Responsive Extension </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="table_datatables_ajax.html" class="nav-link "> Ajax Datatables </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Charts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="charts_amcharts.html" class="nav-link ">
                                        <span class="title">amChart</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_flotcharts.html" class="nav-link ">
                                        <span class="title">Flot Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_flowchart.html" class="nav-link ">
                                        <span class="title">Flow Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_google.html" class="nav-link ">
                                        <span class="title">Google Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_echarts.html" class="nav-link ">
                                        <span class="title">eCharts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="charts_morris.html" class="nav-link ">
                                        <span class="title">Morris Charts</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">HighCharts</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Maps</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="maps_google.html" class="nav-link ">
                                        <span class="title">Google Maps</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="maps_vector.html" class="nav-link ">
                                        <span class="title">Vector Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Layouts</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Page Layouts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="layout_blank_page.html" class="nav-link ">
                                        <span class="title">Blank Page</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_classic_page_head.html" class="nav-link ">
                                        <span class="title">Classic Page Head</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_light_page_head.html" class="nav-link ">
                                        <span class="title">Light Page Head</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_content_grey.html" class="nav-link ">
                                        <span class="title">Grey Bg Content</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_search_on_header_1.html" class="nav-link ">
                                        <span class="title">Search Box On Header 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_search_on_header_2.html" class="nav-link ">
                                        <span class="title">Search Box On Header 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_language_bar.html" class="nav-link ">
                                        <span class="title">Header Language Bar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_footer_fixed.html" class="nav-link ">
                                        <span class="title">Fixed Footer</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_boxed_page.html" class="nav-link ">
                                        <span class="title">Boxed Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-feed"></i>
                                <span class="title">Sidebar Layouts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_menu_light.html" class="nav-link ">
                                        <span class="title">Light Sidebar Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_menu_hover.html" class="nav-link ">
                                        <span class="title">Hover Sidebar Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_search_1.html" class="nav-link ">
                                        <span class="title">Sidebar Search Option 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_search_2.html" class="nav-link ">
                                        <span class="title">Sidebar Search Option 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_toggler_on_sidebar.html" class="nav-link ">
                                        <span class="title">Sidebar Toggler On Sidebar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_reversed.html" class="nav-link ">
                                        <span class="title">Reversed Sidebar Page</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_fixed.html" class="nav-link ">
                                        <span class="title">Fixed Sidebar Layout</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_sidebar_closed.html" class="nav-link ">
                                        <span class="title">Closed Sidebar Layout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-paper-plane"></i>
                                <span class="title">Horizontal Menu</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="layout_mega_menu_light.html" class="nav-link ">
                                        <span class="title">Light Mega Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_mega_menu_dark.html" class="nav-link ">
                                        <span class="title">Dark Mega Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_full_width.html" class="nav-link ">
                                        <span class="title">Full Width Layout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class=" icon-wrench"></i>
                                <span class="title">Custom Layouts</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="layout_disabled_menu.html" class="nav-link ">
                                        <span class="title">Disabled Menu Links</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_full_height_portlet.html" class="nav-link ">
                                        <span class="title">Full Height Portlet</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="layout_full_height_content.html" class="nav-link ">
                                        <span class="title">Full Height Content</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Pages</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-basket"></i>
                                <span class="title">eCommerce</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="ecommerce_index.html" class="nav-link ">
                                        <i class="icon-home"></i>
                                        <span class="title">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ecommerce_orders.html" class="nav-link ">
                                        <i class="icon-basket"></i>
                                        <span class="title">Orders</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ecommerce_orders_view.html" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">Order View</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ecommerce_products.html" class="nav-link ">
                                        <i class="icon-graph"></i>
                                        <span class="title">Products</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="ecommerce_products_edit.html" class="nav-link ">
                                        <i class="icon-graph"></i>
                                        <span class="title">Product Edit</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">Apps</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="app_todo.html" class="nav-link ">
                                        <i class="icon-clock"></i>
                                        <span class="title">Todo 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="app_todo_2.html" class="nav-link ">
                                        <i class="icon-check"></i>
                                        <span class="title">Todo 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="app_inbox.html" class="nav-link ">
                                        <i class="icon-envelope"></i>
                                        <span class="title">Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="app_calendar.html" class="nav-link ">
                                        <i class="icon-calendar"></i>
                                        <span class="title">Calendar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="app_ticket.html" class="nav-link ">
                                        <i class="icon-notebook"></i>
                                        <span class="title">Support</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">User</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="page_user_profile_1.html" class="nav-link ">
                                        <i class="icon-user"></i>
                                        <span class="title">Profile 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_profile_1_account.html" class="nav-link ">
                                        <i class="icon-user-female"></i>
                                        <span class="title">Profile 1 Account</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_profile_1_help.html" class="nav-link ">
                                        <i class="icon-user-following"></i>
                                        <span class="title">Profile 1 Help</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_profile_2.html" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">Profile 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-notebook"></i>
                                        <span class="title">Login</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="page_user_login_1.html" class="nav-link " target="_blank"> Login Page 1 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_2.html" class="nav-link " target="_blank"> Login Page 2 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_3.html" class="nav-link " target="_blank"> Login Page 3 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_4.html" class="nav-link " target="_blank"> Login Page 4 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_5.html" class="nav-link " target="_blank"> Login Page 5 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_user_login_6.html" class="nav-link " target="_blank"> Login Page 6 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_lock_1.html" class="nav-link " target="_blank">
                                        <i class="icon-lock"></i>
                                        <span class="title">Lock Screen 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_user_lock_2.html" class="nav-link " target="_blank">
                                        <i class="icon-lock-open"></i>
                                        <span class="title">Lock Screen 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-social-dribbble"></i>
                                <span class="title">General</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="page_general_about.html" class="nav-link ">
                                        <i class="icon-info"></i>
                                        <span class="title">About</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_contact.html" class="nav-link ">
                                        <i class="icon-call-end"></i>
                                        <span class="title">Contact</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-notebook"></i>
                                        <span class="title">Portfolio</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="page_general_portfolio_1.html" class="nav-link "> Portfolio 1 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_portfolio_2.html" class="nav-link "> Portfolio 2 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_portfolio_3.html" class="nav-link "> Portfolio 3 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_portfolio_4.html" class="nav-link "> Portfolio 4 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-magnifier"></i>
                                        <span class="title">Search</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="page_general_search.html" class="nav-link "> Search 1 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_search_2.html" class="nav-link "> Search 2 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_search_3.html" class="nav-link "> Search 3 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_search_4.html" class="nav-link "> Search 4 </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="page_general_search_5.html" class="nav-link "> Search 5 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_pricing.html" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">Pricing</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_faq.html" class="nav-link ">
                                        <i class="icon-wrench"></i>
                                        <span class="title">FAQ</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_blog.html" class="nav-link ">
                                        <i class="icon-pencil"></i>
                                        <span class="title">Blog</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_blog_post.html" class="nav-link ">
                                        <i class="icon-note"></i>
                                        <span class="title">Blog Post</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_invoice.html" class="nav-link ">
                                        <i class="icon-envelope"></i>
                                        <span class="title">Invoice</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_general_invoice_2.html" class="nav-link ">
                                        <i class="icon-envelope"></i>
                                        <span class="title">Invoice 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">System</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                                        <span class="title">Coming Soon</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_404_1.html" class="nav-link ">
                                        <span class="title">404 Page 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_404_2.html" class="nav-link " target="_blank">
                                        <span class="title">404 Page 2</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_404_3.html" class="nav-link " target="_blank">
                                        <span class="title">404 Page 3</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_500_1.html" class="nav-link ">
                                        <span class="title">500 Page 1</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="page_system_500_2.html" class="nav-link " target="_blank">
                                        <span class="title">500 Page 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-folder"></i>
                                <span class="title">Multi Level Menu</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-settings"></i> Item 1
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="javascript:;" target="_blank" class="nav-link">
                                                <i class="icon-user"></i> Arrow Toggle
                                                <span class="arrow nav-toggle"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="icon-power"></i> Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="icon-paper-plane"></i> Sample Link 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">
                                                        <i class="icon-star"></i> Sample Link 1</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-camera"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-link"></i> Sample Link 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-pointer"></i> Sample Link 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" target="_blank" class="nav-link">
                                        <i class="icon-globe"></i> Arrow Toggle
                                        <span class="arrow nav-toggle"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-tag"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-pencil"></i> Sample Link 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="icon-graph"></i> Sample Link 1</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-bar-chart"></i> Item 3 </a>
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
                                        <span class="caption-subject font-dark bold uppercase"> Form Wizard -
                                            <span class="step-title"> Step 1 of 4 </span>
                                        </span>
                                    </div>
                                 
                                </div>
                                <div class="portlet-body form">
                                    <form class="form-horizontal" action="#" id="submit_form" method="POST">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                                <ul class="nav nav-pills nav-justified steps">
                                                    <li>
                                                        <a href="#tab1" data-toggle="tab" class="step">
                                                            <span class="number"> 1 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Account Setup </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                            <span class="number"> 2 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Profile Setup </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab" class="step active">
                                                            <span class="number"> 3 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Billing Setup </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab4" data-toggle="tab" class="step">
                                                            <span class="number"> 4 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Confirm </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-success"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="alert alert-danger display-none">
                                                        <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                    <div class="alert alert-success display-none">
                                                        <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                    <div class="tab-pane active" id="tab1">
                                                        <h3 class="block">Provide your account details</h3>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Username
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="username" />
                                                                <span class="help-block"> Provide your username </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Password
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="password" class="form-control" name="password" id="submit_form_password" />
                                                                <span class="help-block"> Provide your password. </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Confirm Password
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="password" class="form-control" name="rpassword" />
                                                                <span class="help-block"> Confirm your password </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Email
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="email" />
                                                                <span class="help-block"> Provide your email address </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">
                                                        <h3 class="block">Provide your profile details</h3>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Fullname
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="fullname" />
                                                                <span class="help-block"> Provide your fullname </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Phone Number
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="phone" />
                                                                <span class="help-block"> Provide your phone number </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Gender
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <div class="radio-list">
                                                                    <label>
                                                                        <input type="radio" name="gender" value="M" data-title="Male" /> Male </label>
                                                                    <label>
                                                                        <input type="radio" name="gender" value="F" data-title="Female" /> Female </label>
                                                                </div>
                                                                <div id="form_gender_error"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Address
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="address" />
                                                                <span class="help-block"> Provide your street address </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">City/Town
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="city" />
                                                                <span class="help-block"> Provide your city or town </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Country</label>
                                                            <div class="col-md-4">
                                                                <select name="country" id="country_list" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BA">Bosnia and Herzegowina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory</option>
                                                                    <option value="BN">Brunei Darussalam</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo</option>
                                                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="CI">Cote d'Ivoire</option>
                                                                    <option value="HR">Croatia (Hrvatska)</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories</option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HM">Heard and Mc Donald Islands</option>
                                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran (Islamic Republic of)</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                                    <option value="KR">Korea, Republic of</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macau</option>
                                                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia, Federated States of</option>
                                                                    <option value="MD">Moldova, Republic of</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="AN">Netherlands Antilles</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PW">Palau</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Reunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russian Federation</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint LUCIA</option>
                                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="ST">Sao Tome and Principe</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia (Slovak Republic)</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SH">St. Helena</option>
                                                                    <option value="PM">St. Pierre and Miquelon</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syrian Arab Republic</option>
                                                                    <option value="TW">Taiwan, Province of China</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom</option>
                                                                    <option value="US">United States</option>
                                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Viet Nam</option>
                                                                    <option value="VG">Virgin Islands (British)</option>
                                                                    <option value="VI">Virgin Islands (U.S.)</option>
                                                                    <option value="WF">Wallis and Futuna Islands</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Remarks</label>
                                                            <div class="col-md-4">
                                                                <textarea class="form-control" rows="3" name="remarks"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                        <h3 class="block">Provide your billing and credit card details</h3>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Card Holder Name
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="card_name" />
                                                                <span class="help-block"> </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Card Number
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="card_number" />
                                                                <span class="help-block"> </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">CVC
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="" class="form-control" name="card_cvc" />
                                                                <span class="help-block"> </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Expiration(MM/YYYY)
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" placeholder="MM/YYYY" maxlength="7" class="form-control" name="card_expiry_date" />
                                                                <span class="help-block"> e.g 11/2020 </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Payment Options
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <div class="checkbox-list">
                                                                    <label>
                                                                        <input type="checkbox" name="payment[]" value="1" data-title="Auto-Pay with this Credit Card." /> Auto-Pay with this Credit Card </label>
                                                                    <label>
                                                                        <input type="checkbox" name="payment[]" value="2" data-title="Email me monthly billing." /> Email me monthly billing </label>
                                                                </div>
                                                                <div id="form_payment_error"> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab4">
                                                        <h3 class="block">Confirm your account</h3>
                                                        <h4 class="form-section">Account</h4>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Username:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="username"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Email:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="email"> </p>
                                                            </div>
                                                        </div>
                                                        <h4 class="form-section">Profile</h4>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Fullname:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="fullname"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Gender:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="gender"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Phone:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="phone"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Address:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="address"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">City/Town:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="city"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Country:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="country"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Remarks:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="remarks"> </p>
                                                            </div>
                                                        </div>
                                                        <h4 class="form-section">Billing</h4>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Card Holder Name:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="card_name"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Card Number:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="card_number"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">CVC:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="card_cvc"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Expiration:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="card_expiry_date"> </p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Payment Options:</label>
                                                            <div class="col-md-4">
                                                                <p class="form-control-static" data-display="payment[]"> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn default button-previous">
                                                            <i class="fa fa-angle-left"></i> Back </a>
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn green button-submit"> Submit
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
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
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url();?>
/assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
         <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url();?>
assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url();?>
/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>
/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
  
    </body>



    <!-- Mirrored from www.keenthemes.com/preview/metronic/theme/admin_1/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jan 2016 19:39:07 GMT -->
</html>
<?php }} ?>
