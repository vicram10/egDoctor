<?php
if (!defined('eGeek')) die ('Acceso prohibido');
//validacion principal
if (!$user_settings['conectado']){
    load_redireccion();
}

$context['footer_html'] .= '
<script type="text/javascript">
    var url_mensajes_recibidos = "'. $scripturl .'?route=admin&sa=messages-json";
</script>';