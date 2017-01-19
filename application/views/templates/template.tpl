<!DOCTYPE html>
<html lang="es">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8" />
        <title>{$titulo|default:'Indynet'}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!--favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="{base_url()}assets/layouts/layout/img/indynet.ico">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="{base_url()}assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{base_url()}assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{base_url()}assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{base_url()}/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{base_url()}assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{base_url()}assets/pages/css/login-3.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
           <!-- ESPACIO QUE QUEDE CENTRADO-->
        </div>
        
        <!-- BEGIN LOGIN -->
        <div class="content">
            {block name="contenido"}{/block}
        </div>
        <!-- BEGIN CORE PLUGINS -->
       <script src="{base_url()}/assets/global/plugins/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="{base_url()}assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{base_url()}assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="{base_url()}assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="{base_url()}assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="{base_url()}assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="{base_url()}assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="{base_url()}assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{base_url()}assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="{base_url()}assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="{base_url()}assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{base_url()}assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{base_url()}assets/pages/scripts/login.min.js" type="text/javascript"></script>
         <script src="{base_url()}assets/validar/validar.js"></script>
        <script src="{base_url()}assets/validar/validarIdentidad.js"></script>
  
    </body>
</html>