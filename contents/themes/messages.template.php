<?php
if (!defined('eGeek')) die ('Acceso prohibido');
//tenemos algun mensaje?
echo '
<div class="kt-portlet col-lg-12">
    ', template_portlet_head('flaticon-mail', 'text-danger', label_mensajes_no_leidos, 'text-danger') ,'
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">';
        if ($context['mensajes_no_leidos']){
            echo '
            <!--begin: Datatable -->
            <table class="display table table-striped- table-bordered table-hover table-checkable">
                <thead>
                    <tr class="uppercase kt-shape-font-color-3  kt-shape-bg-color-3">
                        <th>#</th>
                        <th>&nbsp;</th>
                        <th>', col_nombre ,'</th>
                        <th>', col_correo ,'</th>
                        <th>', col_mensaje ,'</th>
                        <th>', col_fecha ,'</th>
                        <th>', col_leido ,'</th>
                    </tr>                        
                </thead>
                <tfoot>
                    <tr class="uppercase kt-shape-font-color-3  kt-shape-bg-color-3">
                        <th>#</th>
                        <th>&nbsp;</th>
                        <th>', col_nombre ,'</th>
                        <th>', col_correo ,'</th>
                        <th>', col_mensaje ,'</th>
                        <th>', col_fecha ,'</th>
                        <th>', col_leido ,'</th>
                    </tr>                        
                </tfoot>
                <tbody>';
                foreach($context['mensajes_recibidos'] as $key => $value){
                    if ($value['leido'] == 'NO'){
                        echo '
                        <tr ', $value['leido'] == 'NO' ? 'class="kt-shape-font-color-1  kt-shape-bg-color-1"' : '' ,'>
                            <td>', $key ,'</td>
                            <td class="text-center">
                                <a href="javascript:;" name="btnMarcarLeido" class="btn btn-info btn-sm" data-id="', $key ,'" data-status="SI" data-toggle="kt-tooltip" data-placement="right" title="', label_marcar_leido ,'" data-skin="dark">
                                    <i class="flaticon-multimedia"></i>
                                </a>
                            </td>
                            <td>', $value['nombre'] ,'</td>
                            <td>', $value['correo'] ,'</td>
                            <td>', $value['mensaje'] ,'</td>
                            <td>', $value['fecha'] ,'</td>
                            <td>', $value['leido'] == 'SI' ? '<span class="badge badge-success">'. $value['leido'] .'</span>' : '<span class="badge badge-warning">'. $value['leido'] .'</span>' ,'</td>
                        </tr>';
                    }
                }
                echo '
                </tbody>
            </table>
            <!--end:: Datatable -->';
        }else{
            echo '
            <div class="alert alert-warning">
                ', mensaje_no_existe_no_leidos ,'
            </div>';
        }
        echo '
        </div>
    </div>
</div>';
//mensajes leidos
echo '
<div class="kt-portlet col-lg-12">
    ', template_portlet_head('flaticon-envelope', 'text-success', label_mensajes_leidos, 'text-success') ,'
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">';
        if ($context['mensajes_leidos']){
            echo '
            <!--begin: Mensajes Leidos -->
            <table class="display table table-striped- table-bordered table-hover table-checkable">
                <thead>
                    <tr class="uppercase kt-shape-font-color-3  kt-shape-bg-color-3">
                        <th>#</th>
                        <th>&nbsp;</th>
                        <th>', col_nombre ,'</th>
                        <th>', col_correo ,'</th>
                        <th>', col_mensaje ,'</th>
                        <th>', col_fecha ,'</th>
                        <th>', col_leido ,'</th>
                    </tr>                        
                </thead>
                <tfoot>
                    <tr class="uppercase kt-shape-font-color-3  kt-shape-bg-color-3">
                        <th>#</th>
                        <th>&nbsp;</th>
                        <th>', col_nombre ,'</th>
                        <th>', col_correo ,'</th>
                        <th>', col_mensaje ,'</th>
                        <th>', col_fecha ,'</th>
                        <th>', col_leido ,'</th>
                    </tr>                        
                </tfoot>
                <tbody>';
                foreach($context['mensajes_recibidos'] as $key => $value){
                    if ($value['leido'] == 'SI'){
                        echo '
                        <tr ', $value['leido'] == 'NO' ? 'class="kt-shape-font-color-1  kt-shape-bg-color-1"' : '' ,'>
                            <td>', $key ,'</td>
                            <td class="text-center">
                                <a href="javascript:;" name="btnMarcarLeido" class="btn btn-danger btn-sm" data-id="', $key ,'" data-status="NO" data-toggle="kt-tooltip" data-placement="right" title="', label_marcar_no_leido ,'" data-skin="dark">
                                    <i class="flaticon-multimedia"></i>
                                </a>
                            </td>
                            <td>', $value['nombre'] ,'</td>
                            <td>', $value['correo'] ,'</td>
                            <td>', $value['mensaje'] ,'</td>
                            <td>', $value['fecha'] ,'</td>
                            <td>', $value['leido'] == 'SI' ? '<span class="badge badge-success">'. $value['leido'] .'</span>' : '<span class="badge badge-warning">'. $value['leido'] .'</span>' ,'</td>
                        </tr>';
                    }
                }
                echo '
                </tbody>
            </table>
            <!--end:: Mensajes Leidos -->';
        }else{
            echo '
            <div class="alert alert-warning">
                ', mensaje_no_existe_leidos ,'
            </div>';
        }
        echo '
        </div>
    </div>
</div>';