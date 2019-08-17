<?php 
    if (!defined('eGeek')) die('Acceso Prohibido');
    //template
    echo '
    <div class="kt-portlet col-lg-12">
    ', template_portlet_head('flaticon-user', '', label_centro_informacion, '') ,'
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">
            ', sprintf(tablero_descripcion, $user_settings['nombre']) ,'
        </div>
    </div>
</div>';