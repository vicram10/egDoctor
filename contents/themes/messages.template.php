<?php
if (!defined('eGeek')) die ('Acceso prohibido');
//tenemos algun mensaje?
echo '
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped- table-bordered table-hover table-checkable dataTable dtr-inline" id="table_messages" role="grid" aria-describedby="kt_table_1_info" style="width: 1208px;">
            <thead>
                <tr class="row">
                    <td>Correo</td>
                </tr>
                <tr class="filter">
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <div id="kt_table_1_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
    </div>
</div>';