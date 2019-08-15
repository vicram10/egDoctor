<?php 
if (!defined('eGeek')) die('Acceso prohibido');
#ya enviamos el formulario?
if (isset($_POST)){
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
}