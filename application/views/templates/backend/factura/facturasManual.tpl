{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    CREAR FACTURAS
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            {foreach  from = $listaF item=obj}
                <form  name="formCP"onsubmit="return validar()"class="form-horizontal form-label-left" action="{base_url()}facturas/crear-manualmente/guardar" method="POST" autocomplete="off">
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
                    <input type="hidden" name="id_contrato" value="{$obj->id_contrato}">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha_inicio">Desde:
                            <span class="required"> </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fecha_inicio"name="fecha_inicio" class="form-control col-md-7 col-xs-12 " type="date" value=""  />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha_vencimiento">Hasta:
                            <span class="required"> </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fecha_vencimiento"name="fecha_vencimiento" class="form-control col-md-7 col-xs-12 " type="date" value=""  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="table-scrollable">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Cliente:</th>
                                            <th colspan="3">{$obj->apellidos}{" "}{$obj->nombres}</th>
                                        </tr>
                                        <tr>
                                            <th>Lugar de Servicio:</th>
                                            <th colspan="3">{$obj->nombre_canton}{" - "}{$obj->nombre_parroquia}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Valor Mensual</strong></td>
                                            <td><input type="text" id="costoPlan"class="form-control col-md-7 col-xs-12"name="costoPlan" value="{$obj->valor_mensual}" readonly="readonly"></td>
                                        </tr>
                                        <tr>
                                            <td ><strong>Subtotal</strong></td>
                                            <td><input type="text" id="valordeTotalPlan"class="form-control col-md-7 col-xs-12"name="valorTotalPlan" value="{$obj->valor_mensual}" readonly="readonly"></td>
                                        </tr>
                                        <tr>
                                            <td ><strong>Iva</strong></td>
                                            <td><input type="text" id="ivaPlan"class="form-control col-md-7 col-xs-12"name="ivaPlan" value="{$ci->utilidades->RedondearDecimales($obj->valor_mensual*0.12)}" readonly="readonly"></td>
                                        </tr> 

                                        <tr>
                                            <td><strong>TOTAL</strong></td>
                                            <td><input type="text" id="totalPagar"class="form-control col-md-7 col-xs-12"name="totalPagar" value="{$ci->utilidades->RedondearDecimales(($obj->valor_mensual*0.12)+$obj->valor_mensual)}" readonly="readonly"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-save"></i> GUARDAR </button>
                                <a href="{base_url()}contratar-plan/listar"class="btn btn-danger pull-right"><i class="fa fa-close"></i> CANCELAR</a>
                            </div>
                        </div>
                    </div>  
                </form>
            {/foreach}
        </div>
    </div>
<script>
                //mostrar fecha
    $(function(){
	$("#fecha_inicio").datepicker({  maxDate: '0d'});
	
    });
</script>
{/block}