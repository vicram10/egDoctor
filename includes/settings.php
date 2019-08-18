<?php 
if (!defined('eGeek')) die('Acceso prohibido');
#ya enviamos el formulario?
if (!empty($_POST)){
    $continuamos = true;
    $json_response = array(
        'cod' => '0',
        'mensaje' => mensaje_guardado_correctamente,
    );

    //validamos que esta conectado
    if (!$user_settings['conectado']){
        $continuamos = false;
        $json_response = array(
            'cod' => '1',
            'mensaje' => error_no_conectado,
        );
    }
    #respuesta
    $context['json_response'] = $json_response;
}else{
    if (!$user_settings['conectado'])
        load_redireccion();
    //leemos un footer especial
    $context['footer_html'] .= '
    <script src="'. $themeurl .'/dashboard/js/enterprise/pages/crud/forms/widgets/form-repeater.js" type="text/javascript"></script>';
}