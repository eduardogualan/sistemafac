<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-07-09 10:46:25
         compiled from "/home/jose/public_html/codeigniter3/application/views/templates/pedido/registrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1127667525558d8d0fd64dd3-92430996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc80a0d6c92262d3ec5cd4c2f679ffa25f5f4b2e' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/pedido/registrar.tpl',
      1 => 1436454184,
      2 => 'file',
    ),
    'dcdb047d9743165ad8e2fc186befed6ea6975f09' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/template.tpl',
      1 => 1430845179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1127667525558d8d0fd64dd3-92430996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_558d8d100bfbf3_74159249',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558d8d100bfbf3_74159249')) {function content_558d8d100bfbf3_74159249($_smarty_tpl) {?><!DOCTYPE html>
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
    <script>
        $(document).ready(function() {
           $('#btn_buscar').click(function (){
               var txto = $('#cedula').val();               
               var url='<?php echo base_url();?>
index.php/biblioteca/pedido/buscarPersona';
               if(txto.length > 0 && txto != null && txto.length == 10){
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: 'cedula='+txto,
                        dataType: 'json',
                        success: function (data) {
                            //alert(data.persona);
                            $('#usuario').val(data.persona);
                            $('#msg').val(data.mensaje);
                            if('No esta habilitado'==data.mensaje){
                                $('#btn_buscarL').attr("disabled","true");
                                $('#btn_guardar').css('display','none');
                            }else{
                                $('#btn_buscarL').removeAttr("disabled");
                                $('#btn_guardar').css('display','block');
                            }
                        }
                    });
                }else{
                    alert("Verifique que el numero de cédula no este vacío y tenga 10 caracteres");
                }
           });
        });   
    </script>
    <script>
        $(document).ready(function() {
           $('#btn_buscarL').click(function (){
               var criterio = $('#criterio').val();
               var txto = $('#textoL').val();               
               var url='<?php echo base_url();?>
index.php/biblioteca/pedido/buscarLibro';
               //alert(criterio);
               $.ajax({
                    type: 'POST',
                    url: url,
                    data: 'criterio='+criterio+'&texto='+txto,
                    dataType: 'html',
                    success: function (data) {                            
                        $('#tabla tbody').html(data);                            
                    }
               });
                
           });
        });   
    </script>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">Registrar pedido</div>
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
index.php/biblioteca/pedido/guardar">
                                            <div class="form-group">
							<label class="col-md-3 control-label">Cédula:</label>
							<div class="col-md-6">
                                                            <input id="cedula" type="text" class="form-control" name="cedula" placeholder="Ingrese su cédula" />
							</div> 
                                                        <input id="btn_buscar" type="button" class="btn btn-info" value="BUSCAR"/>
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Usuario:</label>
							<div class="col-md-6">
                                                            <input class="form-control" id="usuario" name="usuario" placeholder="Ingrese el Apellido Paterno" readonly="true"/>
                                                            
							</div>     
                                            </div>
                                             <div class="form-group">
							<label class="col-md-3 control-label">Mensaje:</label>
							<div class="col-md-6">
                                                            <input class="form-control" name="msg" placeholder="Ingrese el Apellido Materno" id="msg" readonly="true"/>
                                                            
							</div>     
                                            </div>
                                            
                                            <div class="form-group">
							<label class="col-md-3 control-label">Fecha de entrega:</label>
							<div class="col-md-6">
                                                            <input type="text" id="fecha_entrega" class="form-control" name="fecha_entrega" placeholder="Ingrese la fecha de entrega"/>
							</div>                                                        
                                            </div>
                                            <div class="form-group">
							<label class="col-md-3 control-label">Buscar:</label>
                                                        <div class="col-md-2">
                                                            <select id="criterio">
                                                                <option value="nro_inv">Nro inventario</option>
                                                                <option value="titulo">Título</option>
                                                            </select>
                                                        </div>                                                        
							<div class="col-md-4">
                                                            <input type="text" class="form-control" name="textoL" id="textoL" placeholder="Ingrese texto"/>
							</div>                                                        
                                                        
                                                        <input type="button" id="btn_buscarL" class="btn btn-info" value="BUSCAR"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3">Tabla de documentos</label>
                                                <table id="tabla" class="table table-responsive">
                                                    <thead>
                                                        <tr><th>Nro</th><th>Autor</th><th>Título</th><th>Estado</th><th>Acciones</th></tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>
                                           <div class="form-group">
                                               <label id="msg_error" class="label label-danger">Recuerde: Maximo 3 documentos</label>
                                               <label class="col-md-3">Tabla de documentos encontrados</label>
                                                <table id="tablaS" class="table table-responsive">
                                                    <thead>
                                                        <tr><th>Nro</th><th>Autor</th><th>Título</th><th>Fecha préstamo</th><th>Fecha entrega</th><th>Acciones</th></tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>
                                             
                                            <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                                                            <input id="btn_guardar" type="submit" class="btn btn-info" value="GUARDAR"/>

                                                            <a class="btn btn-info" href="<?php echo base_url();?>
index.php/biblioteca/pedido">CANCELAR</a>
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
    $( "#fecha_entrega" ).datepicker({
        dateFormat:'yy-mm-dd',
         minDate: 0
    });
    $( "#criterio" ).selectmenu();
</script>

	

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
