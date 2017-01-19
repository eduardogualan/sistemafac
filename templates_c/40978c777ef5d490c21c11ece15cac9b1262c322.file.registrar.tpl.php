<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-07-25 14:30:57
         compiled from "/home/jose/public_html/codeigniter3/application/views/templates/libro/registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4960283385564b69b726ad4-69256919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40978c777ef5d490c21c11ece15cac9b1262c322' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/libro/registrar.tpl',
      1 => 1434636955,
      2 => 'file',
    ),
    'dcdb047d9743165ad8e2fc186befed6ea6975f09' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/template.tpl',
      1 => 1437852651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4960283385564b69b726ad4-69256919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5564b69b8f1172_24531753',
  'variables' => 
  array (
    'title' => 0,
    'ci' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5564b69b8f1172_24531753')) {function content_5564b69b8f1172_24531753($_smarty_tpl) {?><!DOCTYPE html>
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
        
    <link href="<?php echo base_url();?>
jquery/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>
jquery/external/jquery/jquery.js"></script>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">registro de libros</div>
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
index.php/biblioteca/libro/guardar">
                                            <div class="form-group">
							<label class="col-md-3 control-label">Nro de inventario:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="nro_inv" placeholder="Ingrese el nro de inventario" value="<?php echo $_smarty_tpl->tpl_vars['nro_inv']->value;?>
" readonly="true"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Autor:</label>
							<div class="col-md-6">
                                                            <textarea class="form-control" name="autor" placeholder="Ingrese el nombre" id="autor"></textarea>
                                                            
							</div>     
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Título:</label>
							<div class="col-md-6">
                                                            <textarea class="form-control" name="titulo" placeholder="Ingrese el título" id="titulo"></textarea>
							</div>                                                        
                                                        
							
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">ISBN:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="isbn" placeholder="Ingrese el isbn"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Editorial:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="editorial" placeholder="Ingrese la editorial"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Año:</label>
							<div class="col-md-6">
                                                            <!--<input type="number" min="2000" max="2050" class="form-control" name="anio" placeholder="Ingrese el año"/>-->
                                                            <input id="anio" name ="anio" value="2015"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Precio:</label>
							<div class="col-md-6">
                                                            <input type="text"  class="form-control" name="precio" placeholder="Ingrese el precio"/>
							</div>                                                        
                                            </div>
                                             <div class="form-group">
							<label class="col-md-3 control-label">Temática:</label>
							<div class="col-md-6">
                                                            <select name="tematica" id="tematica">
                                                                <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->idtematica;?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value->codigo;?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre;?>
</option>
                                                                <?php } ?>
                                                            </select>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Resumén:</label>
							<div class="col-md-6">
                                                            <textarea class="form-control" name="resumen" placeholder="Ingrese el resumén" id="autor"></textarea>
                                                            
							</div>     
                                            </div>
                                            <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                                                            <input type="submit" class="btn btn-info" value="GUARDAR"/>

                                                            <a class="btn btn-info" href="<?php echo base_url();?>
index.php/biblioteca/libro">CANCELAR</a>
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
    $( "#anio" ).spinner({
      spin: function( event, ui ) {
        if ( ui.value > 2050 ) {
          $( this ).spinner( "value", 2015 );
          return false;
        } else if ( ui.value < 2015 ) {
          $( this ).spinner( "value", 2050 );
          return false;
        }
      }
    });
    $( "#tematica" ).selectmenu();
</script>

	

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
