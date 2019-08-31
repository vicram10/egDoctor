<?php
if (!defined('eGeek')) die('Acceso prohibido');

//funcion para poder leer cabecera de un div portlet
function template_portlet_head($icon = '', $class_icon = '', $title = '', $class_title = ''){
    echo '
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon ', $class_icon ,'">
                <i class="', $icon ,'"></i>
            </span>
            <h3 class="kt-portlet__head-title ', $class_title ,'">
                ', $title ,'
            </h3>
        </div>
    </div>';
}

function template_portlet_footer($form = '', $align = 'kt-align-right', $url_cancel = '', $class_guardar = '', $class_cancel=''){
    echo '
    <div class="kt-portlet__foot kt-portlet__foot--sm ', $align ,'">
        <button id="btnGuardarForm" type="submit" form="', $form ,'" class="', $class_guardar ,'">
           <i class="flaticon2-accept"></i> ', btn_guardar ,'
        </button>
        <a href="',$url_cancel,'" class="', $class_cancel ,'">
           <i class="flaticon2-delete"></i> ', btn_cancelar ,'
        </a>
    </div>';
}