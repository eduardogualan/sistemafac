{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    PROFORMAS EN LÍNEA
                </span>
            </div>
        </div>
        <div class="portlet-body form">
            <div  class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="flexslider">
                        <ul class="slides">
                            {foreach from=$lista_tipoPlan item=datos}
                            <li>
                                <div class="pricing-content-1" >
                                    <div class="price-column-container border-active" style="background: #22313F; color: #FFFFFF">
                                        <div class="price-table-head bg-primary">
                                            <h5 class="no-margin"><strong>{$datos->nombre}</strong></h5>
                                        </div>
                                        <div class="arrow-down border-top-blue"></div>
                                        <div class="price-table-pricing">
                                            <h3>
                                                <span class="price-sign"><strong>$</strong></span><strong>{$datos->valor_mensual}</strong></h3>
                                                <p><strong>Mensuales + IVA</strong></p>
                                            <p><strong>Ancho de Banda: {$datos->velocidad}{" "}{$datos->descripcion}</strong></p>
                                            <p><strong>Soporte Técnico: 24/7</strong></p>
                                            <p><strong>Conexión: Modo Inalámbrico</strong></p>
                                            <a href="{base_url()}proformas-imprimir/{$datos->id_plan}" class="price-ribbon "title="Imprimir Proforma"><i class="fa fa-file-pdf-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {/foreach}
                        </ul>
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
  <script src="{base_url()}/assets/global/plugins/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	$(window).load(function(){
		$(".flexslider").flexslider();
	});
</script>
{/block}