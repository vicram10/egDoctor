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

    //capturamos los valores
    $input_titulo_web = !empty($_POST['input_titulo_web']) ? $_POST['input_titulo_web'] : '';
    $input_subtitulo_web = !empty($_POST['input_subtitulo_web']) ? $_POST['input_subtitulo_web'] : ''; 
    $enlaces_permanentes = !empty($_POST['input_enlace']) ? (int) $_POST['input_enlace'] : 0;
    $input_habilitar = !empty($_POST['input_habilitar']) ? (int) $_POST['input_habilitar'] : 0;

    if (empty($input_titulo_web) || empty($input_subtitulo_web) ){
        $continuamos = false;
        $json_response = array(
            'cod' => '1',
            'mensaje' => sprintf(error_campos_obligatorios, label_titulo_web),
        );
    }

    //validaciones ok
    if ($continuamos){
        $msgError = "";
        //datos en un array
        $registros = array(
            100 => array(
                'valor' => $input_titulo_web,
            ),
            104 => array(
                'valor' => $input_subtitulo_web,
            ),
            105 => array(
                'valor' => $enlaces_permanentes,
            ),
            106 => array(
                'valor' => $input_habilitar,
            ),
        );
        //ok, actualizamos
        load_actualizacion_parametros($registros);
        //ocurrio algun error?
        if (!empty($msgError)){
            $json_response = array(
                'cod' => '1',
                'mensaje' => $msgError,
            );
        }
    }

    #respuesta
    $context['json_response'] = $json_response;
}else{
    if (!$user_settings['conectado'])
        load_redireccion();
}