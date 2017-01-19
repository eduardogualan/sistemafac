{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light portlet-fit portlet-datatable bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark sbold uppercase">LISTAR ROUTER</span>
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
                            <th>Marca</th>
                            <th>Nombre Wifi</th>
                            <th>Clave Wifi </th>
                            <th>Usuario del Router</th>
                            <th>Clave del Router</th>
                            <th>Ip Router</th>
                            <th>Lugar</th>
                            <th> Acción </th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$lista item=datos}
                            <tr>
                                {if $datos->id_router!=''}
                                    <td> {$datos->nombre_marcaRouter} </td>
                                    <td> {$datos->nombre_wifi} </td>
                                    <td> {$datos->clave_wifi}</td>
                                    <td>{$datos->usuario_router} </td>
                                    <td>{$datos->clave_router} </td>
                                    <td>{$datos->ip_router} </td>
                                    <td>{$datos->nombre_canton}{" - "}{$datos->nombre_parroquia} </td>
                                    <td> 
                                        <a href="{base_url()}router/modificar/{$datos->id_router}" class="btn btn-xs btn-success" title="Modificar"><i class="fa fa-pencil"></i></a>
                                    </td>
                                {/if}
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{/block}