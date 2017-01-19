{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light bordered" id="form_wizard_1">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark bold uppercase">
                    BIENVENIDO AL SISTEMA DE GESTION DE PAGOS DE SERVICIO DE INTERNET
                </span>
            </div>
            {if $rol!="Suscriptor"}
                {if $facturas->count()>0}
                    <div class="actions">
                        <a href="{base_url()}facturas/listar"class="btn btn-danger"><i class="fa fa-warning"></i> Tiene {$facturas->count()} facturas pendientes</a>
                    </div>
                {/if}
            {/if}
        </div>
        <div class="portlet-body form">
            {if $rol == "Cliente"}
                <div class="alert alert-info text-justify">
                        <button class="close" data-close="alert"></button>
                        <strong>Información: </strong> Ahora puede cancelar sus facturas en la CoopMego con su número de cédula o ruc sin llenar la papeleta de depósito. <br/>
                        Puede revisar sus facturas pendientes y pagadas haciendo click en el botón <a href="{base_url()}facturas/listar"><strong>FACTURAS </strong></a>y a su vez descargar un comprobante de pago de las facturas que usted haya cancelado. 
                </div>  
            {/if}
             {if $rol == "Suscriptor"}
                <div class="alert alert-info text-center">
                        <button class="close" data-close="alert"></button>
                        <strong>Información: </strong> Revise nuestros diferentes planes de internet  haciendo click en el botón <a href="{base_url()}proformas"><strong>PROFORMAS</strong></a>
                </div>  
            {/if}
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"><i class="icon-screen-desktop"></i><strong> VISITA TAMBIÉN NUESTRAS TIENDAS TECNOLÓGICAS</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row widget-row">
                                <div class="col-md-6">
                                    <!-- BEGIN WIDGET THUMB -->
                                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                        <a href="https://www.facebook.com/indymaster/?fref=ts"> <h3 class="widget-thumb-heading text-center">Mastercom</h3></a>
                                        <img src="{base_url()}assets/layouts/layout/img/master.jpg" class="img-responsive">
                                    </div>
                                    <!-- END WIDGET THUMB -->
                                </div>
                                <div class="col-md-6">
                                    <!-- BEGIN WIDGET THUMB -->
                                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                        <a href="https://www.facebook.com/tropicalnetsantiago?fref=ts"> <h3 class="widget-thumb-heading text-center">TropicalNet</h3></a>
                                        <img src="{base_url()}assets/layouts/layout/img/tropicalnet.jpg" class="img-responsive">
                                    </div>
                                    <!-- END WIDGET THUMB -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"> <i class="icon-layers"></i><strong> CONOCE NUESTROS SERVICIOS</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row widget">
                                <div class="col-md-6">
                                    <!-- BEGIN WIDGET THUMB -->
                                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                        <a href="https://www.facebook.com/ferrimaster/?fref=ts"><h3 class="widget-thumb-heading text-center">Ferrimaster</h3></a>
                                        <img src="{base_url()}assets/layouts/layout/img/ferrimaster.jpg" class="img-responsive">
                                    </div>
                                    <!-- END WIDGET THUMB -->
                                </div>
                                <div class="col-md-6">
                                    <!-- BEGIN WIDGET THUMB -->
                                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                        <a href="https://www.facebook.com/indynet.net"><h3 class="widget-thumb-heading text-center">Indynet</h3></a>
                                        <img src="{base_url()}assets/layouts/layout/img/indynet.jpg" class="img-responsive">
                                    </div>
                                    <!-- END WIDGET THUMB -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{/block}