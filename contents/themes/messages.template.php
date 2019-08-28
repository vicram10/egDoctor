<?php
if (!defined('eGeek')) die ('Acceso prohibido');
//tenemos algun mensaje?
echo '
<div class="kt-portlet col-lg-12">
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">';
        if (count($context['mensajes_recibidos']) > 0){
            echo '
            <!--begin: Datatable -->
            <table class="display table table-striped- table-bordered table-hover table-checkable">
                <thead>
                    <tr class="uppercase info">
                        <th>#</th>
                        <th>', col_nombre ,'</th>
                        <th>', col_correo ,'</th>
                        <th>', col_mensaje ,'</th>
                        <th>', col_fecha ,'</th>
                        <th>', col_leido ,'</th>
                    </tr>                        
                </thead>
                <tfoot>
                    <tr class="uppercase info">
                        <th>#</th>
                        <th>', col_nombre ,'</th>
                        <th>', col_correo ,'</th>
                        <th>', col_mensaje ,'</th>
                        <th>', col_fecha ,'</th>
                        <th>', col_leido ,'</th>
                    </tr>                        
                </tfoot>
                <tbody>';
                foreach($context['mensajes_recibidos'] as $key => $value){
                    echo '
                    <tr>
                        <td>', $key ,'</td>
                        <td>', $value['nombre'] ,'</td>
                        <td>', $value['correo'] ,'</td>
                        <td>', $value['mensaje'] ,'</td>
                        <td>', $value['fecha'] ,'</td>
                        <td>', $value['leido'] ,'</td>
                    </tr>';
                }
                echo '
                </tbody>
            </table>
            <!--end:: Datatable -->';
        }else{
            echo '
            <div class="alert alert-warning">
                ', mensaje_consulta_vacia ,'
            </div>';
        }
        echo '
        </div>
    </div>
</div>
';