<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-06-23 18:47:32
         compiled from "/home/jose/public_html/codeigniter3/application/views/templates/usuario/registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:893390732558997932b5062-11850750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bdeb3e40274fd8cd60c70c0fc2d8a3f1b40b2ff' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/usuario/registrar.tpl',
      1 => 1435081989,
      2 => 'file',
    ),
    'dcdb047d9743165ad8e2fc186befed6ea6975f09' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/template.tpl',
      1 => 1430845179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '893390732558997932b5062-11850750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_558997936a9c30_74616033',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558997936a9c30_74616033')) {function content_558997936a9c30_74616033($_smarty_tpl) {?><!DOCTYPE html>
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
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

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
					<li><a href="<?php echo base_url();?>
">Inicio</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<!--@if (Auth::guest())-->
						<li><a href="#">Login</a></li>
						<li><a href="#">Register</a></li>
					<!--@else-->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User name <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					<!--@endif-->
				</ul>
			</div>
		</div>
	</nav>
        
    <link href="<?php echo base_url();?>
jquery/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>
jquery/external/jquery/jquery.js"></script>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">Registro de Usuario</div>
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
index.php/biblioteca/usuario/guardar">
                                            <div class="form-group">
							<label class="col-md-3 control-label">Cédula:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="cedula" placeholder="Ingrese su cédula" />
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Apellido Paterno:</label>
							<div class="col-md-6">
                                                            <input class="form-control" name="apellidoP" placeholder="Ingrese el Apellido Paterno" id="apellidoP"/>
                                                            
							</div>     
                                            </div>
                                             <div class="form-group">
							<label class="col-md-3 control-label">Apellido Materno:</label>
							<div class="col-md-6">
                                                            <input class="form-control" name="apellidoM" placeholder="Ingrese el Apellido Materno" id="apellidoM"/>
                                                            
							</div>     
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Nombres:</label>
							<div class="col-md-6">
                                                            <input class="form-control" name="nombre" placeholder="Ingrese su Nombre" id="nombre"/>
                                                            
							</div>     
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Fecha de nacimiento:</label>
							<div class="col-md-6">
                                                            <input type="text" id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" placeholder="Ingrese la fecha de nacimiento"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Correo electrónico:</label>
							<div class="col-md-6">
                                                            <input type="email" class="form-control" name="correo" placeholder="Ingrese el correo electrónico" id="correo"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Programa:</label>
							<div class="col-md-6">
                                                            <!--<input type="number" min="2000" max="2050" class="form-control" name="anio" placeholder="Ingrese el año"/>-->
                                                            <input id="programa" name ="programa" type="text"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Rol:</label>
							<div class="col-md-6">
                                                            <select name="rol" id="rol">
                                                                <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->idrol;?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre;?>
</option>
                                                                <?php } ?>
                                                            </select>
							</div>                                                        
                                            </div>
                                             
                                            <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                                                            <input type="submit" class="btn btn-info" value="GUARDAR"/>

                                                            <a class="btn btn-info" href="<?php echo base_url();?>
index.php/biblioteca/usuario">CANCELAR</a>
							</div>
						</div>
					</form>
                                           
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url();?>
jquery/jquery-ui.js"></script>
<script>
    $( "#fecha_nacimiento" ).datepicker({
        dateFormat:'yy-mm-dd'
    });
    $( "#rol" ).selectmenu();
</script>

	

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
