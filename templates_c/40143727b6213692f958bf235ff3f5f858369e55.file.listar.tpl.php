<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-07-23 10:45:05
         compiled from "/home/jose/public_html/codeigniter3/application/views/templates/usuario/listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1311424066558995eff34f73-11779693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40143727b6213692f958bf235ff3f5f858369e55' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/usuario/listar.tpl',
      1 => 1435078407,
      2 => 'file',
    ),
    'dcdb047d9743165ad8e2fc186befed6ea6975f09' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/template.tpl',
      1 => 1437666293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1311424066558995eff34f73-11779693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_558995f0a7e575_74965111',
  'variables' => 
  array (
    'title' => 0,
    'ci' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558995f0a7e575_74965111')) {function content_558995f0a7e575_74965111($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/jose/public_html/codeigniter3/vendor/smarty/smarty/libs/plugins/function.counter.php';
?><!DOCTYPE html>
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
				<div class="panel-heading">Listado de usuarios</div>
				<div class="panel-body">
					<!--@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{ $error }</li>
								@endforeach
							</ul>
						</div>
					@endif-->

					<form class="form-horizontal" role="form" method="POST" action="">
                                            <div class="form-group">
							<label class="col-md-3 control-label">Buscar:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="texto" placeholder="Ingrese texto"/>
							</div>                                                        
                                                        <input type="button" class="btn btn-info" value="BUSCAR"/>
                                                        <a href="<?php echo base_url();?>
index.php/biblioteca/usuario/registrar" class="btn btn-info">Nuevo</a>
						</div>
					</form>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Lista</div>
                                            <div class="panel-body">
                                                <?php if ($_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message')) {?>
                                                    <div class="alert alert-info">
                                                        <strong><?php echo $_smarty_tpl->tpl_vars['ci']->value->session->flashdata('message');?>
</strong>
                                                    </div>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['lista']->value->count()>0) {?>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Nro</th><th>Cédula</th><th>Usuario</th><th>Rol</th><th>Estado</th><th>Acciones</th>
                                                        </tr> 
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                          
                                                            <tr>
                                                                <td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value->cedula;?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value->apellido_paterno;?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value->apellido_materno;?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre;?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value->rol->nombre;?>
</td>
                                                                <td><?php if ($_smarty_tpl->tpl_vars['datos']->value->cuenta->estado==true) {?>Activo<?php } else { ?>Desactivado<?php }?></td>
                                                                <td>
                                                                    <a href="<?php echo base_url();?>
index.php/biblioteca/usuario/editar/<?php echo $_smarty_tpl->tpl_vars['datos']->value->idpersona;?>
" class="btn btn-info">Modificar</a>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <?php } else { ?>
                                                    <h4>No existen datos que mostrar</h4>
                                                <?php }?>
                                            </div>
                                        </div>    
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
