{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light portlet-fit portlet-datatable bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark sbold uppercase">LISTAR FACTURAS</span>
            </div>
            <div class="actions">
                <div class="btn-group">
                    <a class="btn btn-warning" href="javascript:;" data-toggle="dropdown">
                        <i class="fa fa-share"></i>
                        <span class="hidden-xs"> Funciones </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu pull-right" id="sample_3_tools">
                        <li>
                            <a href="javascript:;" data-action="0" class="tool-action">
                                <i class="icon-printer"></i> Imprimir</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="1" class="tool-action">
                                <i class="fa fa-copy"></i> Copiar</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="2" class="tool-action">
                                <i class="fa fa-file-pdf-o"></i> PDF</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="3" class="tool-action">
                                <i class="fa fa-file-excel-o"></i> Excel</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-action="4" class="tool-action">
                                <i class="icon-cloud-upload"></i> CSV</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-container">
                {if $ci->session->flashdata('message')}
                    <div class="alert alert-success text-center">
                        <button class="close" data-close="alert"></button>
                         <strong>Felicidades: </strong>{$ci->session->flashdata('message')}
                    </div>  
                {/if}
                <table class="table table-striped table-bordered table-hover" id="sample_3">
                    <thead>
                        <tr>
                            <th> Nro. de Factura</th>
                            <th> Estado de Factura</th>
                            <th>Periodo De Consumo</th>
                            <th>Valor Total</th>
                            <th> Fecha de Pago </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$lista item=datos}
                        <tr>
                            <td>{$datos->numeroFactura}</td>
                            {if $datos->estado == "Pendiente"}
                                    <td>
                                        <a class="btn btn-xs btn-danger" title="">Pendiente</a>
                                    </td>
                            {/if}
                            {if $datos->estado == "Pagado"}
                                    <td>
                                        <a href="{base_url()}facturas/generar-pdf/{$datos->id_detalleMensualidad}" class="btn btn-xs btn-success" title="Descargar Comprovante">Pagado</a>
                                    </td>
                            {/if}
                            <td><strong>Desde: </strong>{" "}{$datos->fecha_venta}{"  "}<strong>Hasta: </strong>{"  "}{$datos->fecha_vencimiento}</td>
                            <td>{'$ '}{$datos->total_venta}</td>
                            {if $datos->estado == "Pendiente"}
                                    <td>S/F</td>
                            {/if}
                            {if $datos->estado == "Pagado"}
                                     <td>{$datos->fecha_pagado}</td>
                            {/if}
                          
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{/block}