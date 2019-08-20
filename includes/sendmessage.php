<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    $load_header = false;
    $load_footer = false;
    $context['template'] = 'json';
    $continuamos = true;
    $json_response = array(
        'cod' => '0',
        'mensaje' => mensaje_enviado_correctamente,
    );
    if (!empty($_POST)){
        $input_nombre = !empty($_POST['input_nombre']) ? $_POST['input_nombre'] : '';
        $input_correo = !empty($_POST['input_correo']) ? $_POST['input_correo'] : '';
        $input_mensaje = !empty($_POST['input_mensaje']) ? $_POST['input_mensaje'] : '';
        if (empty($input_nombre) || empty($input_correo) || empty($input_mensaje)){
            $json_response = array(
                'cod' => '1',
                'mensaje' => sprintf(error_campos_obligatorios, label_tu_nombre.', '.label_tu_correo.', '.label_tu_mensaje),
            );
        }else{
            $msgError = '';
            //hacemos el insert en la base de datos
            $db->ejecutar("INSERT INTO mensajes_recibidos value (0, '$input_nombre', '$input_correo', '$input_mensaje', ". time() .", 'NO')");
            if (!empty($msgError)){
                $json_response = array(
                    'cod' => '1',
                    'mensaje' => $msgError,
                );
            }
        }
    }else{
        $json_response = array(
            'cod' => '1',
            'mensaje' => error_no_envio_mensaje,
        );
    }
    $context['json_response'] = $json_response;