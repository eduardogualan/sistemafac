<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-07-25 14:29:05
         compiled from "/home/jose/public_html/codeigniter3/application/views/templates/tematica/modificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1590077470555dfc014b5267-27844385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5520e04ac6099d4207eda96426f54569df6bb642' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/tematica/modificar.tpl',
      1 => 1432223008,
      2 => 'file',
    ),
    'dcdb047d9743165ad8e2fc186befed6ea6975f09' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/template.tpl',
      1 => 1437852520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1590077470555dfc014b5267-27844385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_555dfc016398f0_84770796',
  'variables' => 
  array (
    'title' => 0,
    'ci' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555dfc016398f0_84770796')) {function content_555dfc016398f0_84770796($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'Sistema de bibliotecas' : $tmp);?>
</title>

	<link href="<?php echo base_url();?>
assets/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
                                    <?php if ($_smarty_tpl->tpl_vars['ci']->value->auth->is_logged()==false) {?>
					<li><a href="<?php echo base_url();?>
">Inicio</a></li>
                                    <?php } else { ?>
                                        <li><a href="<?php echo base_url();?>
index.php/biblioteca/principal">Inicio</a></li>
                                    <?php }?>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<!--@if (Auth::guest())-->
                                        <?php if ($_smarty_tpl->tpl_vars['ci']->value->auth->is_logged()==false) {?>
                                            <li><a href="<?php echo base_url();?>
index.php/biblioteca/auth">Inicio de sesión</a></li>
                                        <?php } else { ?>
                                            <li><a href="<?php echo base_url();?>
index.php/biblioteca/auth/logout">Cerrar sesión</a></li>
                                        <?php }?>
						
						<!--<li><a href="#">Register</a></li>-->
					<!--@else-->
                                        <?php if ($_smarty_tpl->tpl_vars['ci']->value->auth->is_logged()==true) {?>
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['ci']->value->auth->sacarRolCedula($_smarty_tpl->tpl_vars['ci']->value->session->userdata('usuario'))=='bibliotecario') {?>
                                            <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administración<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo base_url();?>
index.php/biblioteca/tematica">Temática</a></li>
                                                        <li><a href="<?php echo base_url();?>
index.php/biblioteca/usuario">Usuarios</a></li>
                                                        <li><a href="<?php echo base_url();?>
index.php/biblioteca/libro">Libros</a></li>
                                                        <li><a href="<?php echo base_url();?>
index.php/biblioteca/pedido">Pedido</a></li>
						</ul>
                                            </li>
                                            <?php } else { ?>
                                                menu del usuario
                                            <?php }?>
                                        <?php }?>
					<!--@endif-->
				</ul>
			</div>
		</div>
	</nav>
        
   
    
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">Editar temáticas</div>
				<div class="panel-body">
                                   <?php if (validation_errors()!='') {?>
					<div class="alert alert-danger">
                                            <strong>Whoops!</strong> Tiene un error en sus entradas.<br><br>
                                            <ul>								
                                                <li><?php echo validation_errors();?>
</li>							
                                            </ul>
					</div>
                                   
                                    <?php }?>
					<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url();?>
index.php/biblioteca/tematica/modificar/<?php echo $_smarty_tpl->tpl_vars['obj']->value->idtematica;?>
">
                                            <div class="form-group">
							<label class="col-md-3 control-label">Nombre:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->nombre;?>
"/>
							</div>                                                        
                                                        
							
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Código:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="codigo" placeholder="Ingrese el código" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->codigo;?>
"/>
							</div>                                                        
                                                        
							
                                            </div>
                                            <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                                                            <input type="submit" class="btn btn-info" value="EDITAR"/>

                                                            <a class="btn btn-info" href="<?php echo base_url();?>
index.php/biblioteca/tematica">CANCELAR</a>
							</div>
						</div>
					</form>
                                           
				</div>
			</div>
		</div>
	</div>
</div>

	

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
