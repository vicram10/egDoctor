<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    $load_header = false;
    $load_footer = false;
    //queremos loguearnos?
    if (!empty($_POST)){ 
        do_login(); 
    }else{
        if ($user_settings['conectado'])
            load_redireccion();
        //vemos el template
        $context['template'] = 'login';
        $context['page_title'] = page_title_login;
    }

    //para loguearnos
    function do_login(){
        global $context, $user_settings, $rooturl;
        $continuamos = true;
        $json_response = array(
            'cod' =>'',
            'mensaje' => '',
            'redireccionar' => '',
        );
        //capturamos los valores
        $usuario = $_POST['input_user'];
        $password = $_POST['input_password'];
        if (empty($usuario) || empty($password)){
            $json_response['cod'] = '1';
            $json_response['mensaje'] = error_no_inicio;
            $continuamos = false;
        }
        //ok las validaciones
        if ($continuamos){
            $resp = user_iniciar_sesion($usuario, $password);
            $mensaje = explode('|', $resp);
            if ($mensaje[0] == 'OK'){
                $json_response['cod'] = '0';
                $json_response['mensaje'] = $mensaje[1];
                $json_response['redireccionar'] = $rooturl;
            }else{
                $json_response['cod'] = '1';
                $json_response['mensaje'] = $mensaje[1];
            }
        }
        //templates
        $context['template'] = 'json';
        $context['json_response'] = $json_response;
    }