{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    COBRAR Plan
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            <div class="row">

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Factura</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <span class="profile-picture">
                                    <img class="editable img-responsive" src="{base_url()}/assets/layouts/layout/img/logologin.png" />
                                </span>
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-right"><strong>Master Technology Cia. Ltda. </strong></h4>
                                <h4 class="text-right"><strong>RUC: 1791918886001 </strong></h4>
                                <h4 class="text-right">Proveedores de internet</h4>
                                <h4 class="text-right">Cableado estructurado</h4>
                                <h4 class="text-right">Redes LAN y WAM</h4>

                            </div>

                            <div class="col-md-12">
                                <form id="formContr" class="form-horizontal form-label-left" action="" method="POST" autocomplete="off">
                                    <div class="form-group">
                                        <div class="alert alert-danger text-center" style="display:none;" id="error">
                                            <button class="close" data-close="alert"></button>
                                            <strong>Advertencia: </strong>Debe ingresar el número de cédula o ruc 
                                        </div> 
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="velocidad">Cédula o Ruc *</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                                            <input id="cedula_ruc" name="cedula_ruc"class="form-control col-md-7 col-xs-12" placeholder="cédula o ruc"type="text" onkeypress="return Solo_numeros(event)" onkeyup="validacion('cedula_ruc')" maxlength="13">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <button type="button" onclick="validar()"class="btn btn-primary"><i class="fa fa-search"></i> CARGAR FACTURA</button>
                                        </div>
                                    </div>
                                    <div id="respuesta">
                                         
                                    </div>  
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<script type="text/javascript">
     function validar() {
           var v1;
            v1 = validacion('cedula_ruc');
            if (v1 === false) {
                $("#exito").hide();
                $("#error").show();
                return false;
            }else{
                CargarFactura();
              
            }
        }
   function CargarFactura(){
       var valor = $('#cedula_ruc').val();
       var url = '{base_url()}cobrar/imprimirfactura';
       //alert();
       $.ajax({
           type: 'POST',
           url: url,
           data: 'valor=' + valor,
           success: function (data){
               $("#respuesta").html(data);
            }
        });
    } 
    function validacion(campo) {
        if (campo == 'cedula_ruc') {
                cedula_ruc = document.getElementById(campo).value;
                if (cedula_ruc == null || cedula_ruc.length == 0 || /^\s+$/.test(cedula_ruc)) {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                    return false;
                } else {
                    if (cedula_ruc.length <= 10) {
                        if (ValidarCedula(cedula_ruc) == false) {
                            //alert("cedula incorrecto")
                            $("#glypcn" + campo).remove();
                            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#' + campo).parent().children('span').text("cédula incorrecto").show();
                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                            return false;
                        } else {
                            $("#glypcn" + campo).remove();
                            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                            $('#' + campo).parent().children('span').hide();
                            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                            //CargarFactura();
                            return true;
                        }
                    } else {
                        if (cedula_ruc.length <= 13) {
                            if (ValidarRuc(cedula_ruc) == false) {
                                //alert("ruc incorrecto");
                                $("#glypcn" + campo).remove();
                                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                                $('#' + campo).parent().children('span').text("ruc incorrecto").show();
                                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                                return false;
                            } else {
                                $("#glypcn" + campo).remove();
                                $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                $('#' + campo).parent().children('span').hide();
                                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                //CargarFactura();
                                return true;
                            }
                        }
                    }
                }

            }
    }
    
    function GuardarPagos() {
            var v1;
            v1 = validacion('cedula_ruc');
            if (v1 === false) {
                $("#exito").hide();
                $("#error").show();
                return false;
            }else{
                ProcesoGuardarPagos();
            }
    }
    function ProcesoGuardarPagos(){
       var valor = $('#cedula_ruc').val();
       var url = '{base_url()}cobrar/ConfirmarPagoFactura';
       //alert();
       $.ajax({
           type: 'POST',
           url: url,
           data: 'valor=' + valor,
           success: function (data){
               $("#respuesta").html(data);
            }
        });
    }

</script>
{/block}