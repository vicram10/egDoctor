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
    $input_nombre = !empty($_POST['input_nombre']) ? $_POST['input_nombre'] : '';
    $input_apellido = !empty($_POST['input_apellido']) ? $_POST['input_apellido'] : '';
    $breve_descripcion = !empty($_POST['input_sobre_mi']) ? $_POST['input_sobre_mi'] : '';
    $input_interes = !empty($_POST['input_interes']) ? $_POST['input_interes'] : '';
    $input_lugar_estudio = !empty($_POST['input_lugar_estudio']) ? $_POST['input_lugar_estudio'] : '';
    $facebook = !empty($_POST['input_facebook']) ? $_POST['input_facebook'] : '';
    $twitter = !empty($_POST['input_twitter']) ? $_POST['input_twitter'] : '';
    $instagram = !empty($_POST['input_instagram']) ? $_POST['input_instagram'] : '';
    $linkedin = !empty($_POST['input_linkedin']) ? $_POST['input_linkedin'] : '';

    $input_titulo_academico = null;
    if (!empty($_POST['input_titulo_academico'])){
        $input_titulo_academico = implode(',', $_POST['input_titulo_academico']);
    }
    $replace_string = str_replace(',', '', $input_titulo_academico);
    if ($replace_string == '')
        $input_titulo_academico = !empty($_POST['input_titulos_grabados']) ? $_POST['input_titulos_grabados'] : '';

    if (empty($input_nombre) || empty($input_apellido) || empty($breve_descripcion)){
        $continuamos = false;
        $json_response = array(
            'cod' => '1',
            'mensaje' => sprintf(error_campos_obligatorios, label_nombre.','.label_apellido.','.label_sobre_mi),
        );
    }

    //validaciones ok
    if ($continuamos){
        $msgError = "";
        //datos en un array
        $registros = array(
            'mi_nombre' => array(
                'valor' => $input_nombre,
            ),
            'mi_apellido' => array(
                'valor' => $input_apellido,
            ),
            'breve_descripcion' => array(
                'valor' => $breve_descripcion,
            ),
            'interes' => array(
                'valor' => $input_interes,
            ),
            'titulos_academicos' => array(
                'valor' => $input_titulo_academico,
            ),
            'lugar_estudio' => array(
                'valor' => $input_lugar_estudio,
            ),
            'facebook' => array(
                'valor' => $facebook,
            ),
            'twitter' => array(
                'valor' => $twitter,
            ),
            'instagram' => array(
                'valor' => $instagram,
            ),
            'linkedin' => array(
                'valor' => $linkedin,
            ),
        );
        //ok, actualizamos
        load_actualizacion_acerca_de($registros);
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
    //leemos un footer especial
    $context['footer_html'] .= '
    <script src="'. $themeurl .'/dashboard/js/enterprise/pages/crud/forms/widgets/form-repeater.js" type="text/javascript"></script>';
}