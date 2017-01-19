<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-05-05 12:05:46
         compiled from "/home/jose/public_html/codeigniter3/application/views/templates/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142911285755423ddfc00ba1-30394959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcdb047d9743165ad8e2fc186befed6ea6975f09' => 
    array (
      0 => '/home/jose/public_html/codeigniter3/application/views/templates/template.tpl',
      1 => 1430845179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142911285755423ddfc00ba1-30394959',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_55423ddfccc5f7_94561524',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55423ddfccc5f7_94561524')) {function content_55423ddfccc5f7_94561524($_smarty_tpl) {?><!DOCTYPE html>
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
        
	

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
