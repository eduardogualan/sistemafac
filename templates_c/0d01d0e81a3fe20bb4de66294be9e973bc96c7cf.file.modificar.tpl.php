<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-05-29 13:03:43
         compiled from "/home/jose/public_html/codeigniter3/application/views/templates/libro/modificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4765332495568a9ff2ad448-07262182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d01d0e81a3fe20bb4de66294be9e973bc96c7cf' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/libro/modificar.tpl',
      1 => 1432922318,
      2 => 'file',
    ),
    'dcdb047d9743165ad8e2fc186befed6ea6975f09' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/template.tpl',
      1 => 1430845179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4765332495568a9ff2ad448-07262182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5568a9ffc7c222_10052678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5568a9ffc7c222_10052678')) {function content_5568a9ffc7c222_10052678($_smarty_tpl) {?><!DOCTYPE html>
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
index.php/biblioteca/libro/modifcar/<?php echo $_smarty_tpl->tpl_vars['obj']->value->idlibro;?>
">
                                            <div class="form-group">
							<label class="col-md-3 control-label">Nro de inventario:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="nro_inv" placeholder="Ingrese el nro de inventario" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->nro_inv;?>
" readonly="true"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Autor:</label>
							<div class="col-md-6">
                                                            <textarea class="form-control" name="autor" placeholder="Ingrese el autor" id="autor" ><?php echo $_smarty_tpl->tpl_vars['obj']->value->autor;?>
</textarea>
                                                            
							</div>     
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Título:</label>
							<div class="col-md-6">
                                                            <textarea class="form-control" name="titulo" placeholder="Ingrese el título" id="titulo"><?php echo $_smarty_tpl->tpl_vars['obj']->value->titulo;?>
</textarea>
							</div>                                                        
                                                        
							
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">ISBN:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="isbn" placeholder="Ingrese el isbn" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->isbn;?>
"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Editorial:</label>
							<div class="col-md-6">
                                                            <input type="text" class="form-control" name="editorial" placeholder="Ingrese la editorial" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->editorial;?>
"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Año:</label>
							<div class="col-md-6">
                                                            <input type="number" min="2000" max="2050" class="form-control" name="anio" placeholder="Ingrese el año" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->anio;?>
"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Precio:</label>
							<div class="col-md-6">
                                                            <input type="text"  class="form-control" name="precio" placeholder="Ingrese el precio" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->precio;?>
"/>
							</div>                                                        
                                            </div>
                                             <div class="form-group">
							<label class="col-md-3 control-label">Temática:</label>
							<div class="col-md-6">
                                                            <select name="tematica">
                                                                <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['obj']->value->tematica->idtematica==$_smarty_tpl->tpl_vars['datos']->value->idtematica) {?>                                                                        
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->idtematica;?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['datos']->value->codigo;?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre;?>
</option>
                                                                    <?php } else { ?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value->idtematica;?>
" ><?php echo $_smarty_tpl->tpl_vars['datos']->value->codigo;?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value->nombre;?>
</option>
                                                                    <?php }?>
                                                                <?php } ?>
                                                            </select>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Resumén:</label>
							<div class="col-md-6">
                                                            <textarea class="form-control" name="resumen" placeholder="Ingrese el resumén" id="autor"><?php echo $_smarty_tpl->tpl_vars['obj']->value->resumen;?>
</textarea>
                                                            
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

	

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
