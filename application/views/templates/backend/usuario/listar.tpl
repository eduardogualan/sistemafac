{extends file ="../../template_admin.tpl"}
{block name="contenido"}
    <div class="portlet light portlet-fit portlet-datatable bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark sbold uppercase">LISTAR USUARIOS DEL SISTEMA</span>
            </div>
            <div class="actions">
                <a href="{base_url()}usuarios/registrar"class="btn btn-primary"><i class="fa fa-pencil"></i> NUEVO</a>
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
                            <th> Cédula o Ruc </th>
                            <th> Usuario del Sistema </th>
                            <th> Rol </th>
                            <th> Estado </th>
                            <th> Último Acceso </th>
                            <th> Acción </th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$lista item=datos}
                            {if $datos->persona->rol->nombre != "Cliente"}
                                <tr>
                                    <td> {$datos->usuario} </td>
                                    <td> {$datos->persona->apellidos}{" "}{$datos->persona->nombres} </td>
                                    <td> {$datos->persona->rol->nombre} </td>
                                   
                                    {if $datos->estado == "1" && $datos->persona->rol->nombre !="Administrador"}
                                        <td>
                                            <a  href="#ventana2" class="btn btn-xs btn-success" data-toggle="modal" title="Desactivar Cuenta">Activo</a>
                                        <div class="modal fade" id="ventana2">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" arial-hidden="true">&times;;</button>
                                                        <h6 class="text-center text-danger"><strong>ESTA SEGURO QUE DESEA DESACTIVAR ESTA CUENTA?</strong></h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <div class="form-actions">
                                                                         <a href="{base_url()}usuarios/desactivar-cuenta/{$datos->id_cuenta}"class="btn btn-primary pull-left"><i class="fa fa-thumbs-up"></i> SI</a>
                                                                    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" ><i class="fa fa-close"></i> NO </button>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <h1> </h1>
                                                        <h1> </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       </td>
                                    {/if}
                                    {if $datos->estado == "1" && $datos->persona->rol->nombre =="Administrador"}
                                        <td>
                                            <a  href="#" class="btn btn-xs btn-success" data-toggle="modal">Activo</a>
                                        </td>
                                    {/if}
                                    
                                     
                                    {if $datos->estado == "0"}
                                        <td>
                                             <a  href="#ventana3" class="btn btn-xs btn-danger" data-toggle="modal" title="Activar Cuenta">Inactivo</a>
                                            <div class="modal fade" id="ventana3">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" arial-hidden="true">&times;;</button>
                                                        <h6 class="text-center text-danger"><strong>ESTA SEGURO QUE DESEA ACTIVAR ESTA CUENTA?</strong></h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <div class="form-actions"> 
                                                                    <a href="{base_url()}usuarios/activar-cuenta/{$datos->id_cuenta}"class="btn btn-primary pull-left"><i class="fa fa-thumbs-up"></i> SI</a>
                                                                    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" ><i class="fa fa-close"></i> NO </button>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <h1> </h1>
                                                        <h1> </h1>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                    {/if}
                                    <td> {$datos-> ultimo_acceso} </td>
                                    <td> 
                                        <a href="{base_url()}usuarios/modificar/{$datos->persona->id_persona}" class="btn btn-xs btn-success" title="Modificar"><i class="fa fa-pencil"></i></a>
                                        <a  href="#ventana1" class="btn btn-xs btn-warning" data-toggle="modal" title="Resetear Cuenta"><i class="fa fa-key"></i></a>
                                        <div class="modal fade" id="ventana1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" arial-hidden="true">&times;;</button>
                                                        <h6 class="text-center text-danger"><strong>ESTA SEGURO QUE DESEA RESETEAR LA CUENTA DE ESTE USUARIO?</strong></h6>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-3">
                                                                <div class="form-actions"> 
                                                                    <a href="{base_url()}usuarios/resetear-cuenta/{$datos->id_cuenta}"class="btn btn-primary pull-left"><i class="fa fa-thumbs-up"></i> SI</a>
                                                                    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal" ><i class="fa fa-close"></i> NO </button>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <h1> </h1>
                                                        <h1> </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {/if}
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{/block}