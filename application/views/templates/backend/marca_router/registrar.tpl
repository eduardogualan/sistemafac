{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    REGISTRAR MARCA DE ROUTER
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            <form   onsubmit="return validar()"class="form-horizontal form-label-left" action="{base_url()}marcas-de-router/guardar" method="POST" autocomplete="off">
                <div class="form-group">
                    <div class="alert alert-danger text-center" style="display:none;" id="error">
                        <button class="close" data-close="alert"></button>
                        <strong>Advertencia: </strong>Debe completar todos los campos obligatorios
                    </div> 
                </div>
                {if $ci->session->flashdata('message')}
                    <div class="alert alert-danger text-center">
                        <button class="close" data-close="alert"></button>
                        <strong>Error al guardar: </strong>{$ci->session->flashdata('message')}
                    </div>  
                {/if}
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre *</label>
                    <div class="col-md-6 col-sm-6 col-xs-12 input-icon right">
                        <input id="nombre" name="nombre"class="form-control col-md-7 col-xs-12" placeholder="nombre de antena"type="text" onkeyup="validacion('nombre')">
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                            <a href="{base_url()}marcas-de-router/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                        </div>
                    </div>
                </div>  
            </form>
        </div>
    </div>
    <script>

        function requerido(valor) {
            if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
                return false;
            }
        }
        function validar() {
            var nombre = document.getElementById("nombre").value;
            var v1;
            v1 = validacion('nombre');
            if (requerido(nombre) == false) {
                $("#exito").hide();
                $("#error").show();
                return false;
            }
        }
        function validacion(campo) {
            //var a = 0;
            if (campo == 'nombre') {
                nombre = document.getElementById(campo).value;
                if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {
                    $("#glypcn" + campo).remove();
                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#' + campo).parent().children('span').text("campo obligatorio").show();
                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                    return false;
                } else {
                    var url = '{base_url()}marcas-de-router/validador';
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: 'texto=' + nombre,
                        dataType: "html",
                        error: function () {
                            //alert("error petición ajax");
                        },
                        success: function (data) {
                            if (data == "2") {
                                $("#glypcn" + campo).remove();
                                $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                                $('#' + campo).parent().children('span').hide();
                                $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback'></i>");
                                return true;

                            } else {
                                if (data == "1") {
                                    $("#glypcn" + campo).remove();
                                    $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                                    $('#' + campo).parent().children('span').text("ya existe un registro con este nombre").show();
                                    $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-remove form-control-feedback'></i>");
                                    return false;
                                }
                            }
                        }
                    });
                }
            }

        }

    </script>

{/block}