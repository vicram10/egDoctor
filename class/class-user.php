<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    
    //datos del usuario
    function user_obtener_datos(){
        global $session_id, $user_id, $user_settings;
        //iniciamos la sesion
        session_start();
        //calculamos el id unico por visitante/usuario
        if (!isset($_SESSION['valor_sesion_usuario'])){
            $_SESSION['valor_sesion_usuario'] = password_hash( session_id() . time() . mt_rand(), PASSWORD_BCRYPT);
        }
        //le asignamos al id del usuario
        $session_id = $_SESSION['valor_sesion_usuario'];
        //variable que contiene los datos del usuario que inicio sesion
        $user_settings += array(
            'id' => !empty($_SESSION[$session_id.'_id_usuario']) ? $_SESSION[$session_id.'_id_usuario'] : '',
            'usuario' => !empty($_SESSION[$session_id.'_usuario']) ? $_SESSION[$session_id.'_usuario'] : '',
            'nombre' => !empty($_SESSION[$session_id.'_nombre']) ? $_SESSION[$session_id.'_nombre'] : label_visitante,
            'perfil' => !empty($_SESSION[$session_id.'_perfil']) ? $_SESSION[$session_id.'_perfil'] : '',
            'id_perfil' => !empty($_SESSION[$session_id.'_id_perfil']) ? (int) $_SESSION[$session_id.'_id_perfil'] : 0,
            'conectado' => !empty($_SESSION[$session_id.'_conectado']) ? $_SESSION[$session_id.'_conectado'] : false,
            'es_administrador' => !empty($_SESSION[$session_id.'_es_administrador']) ? $_SESSION[$session_id.'_es_administrador'] : false,
        );
        $user_id = $user_settings['id'];
    }

    //metodo para poder cerrar la sesion del usuario
    function user_cerrar_sesion(){
        global $generico;
        //matamos la sesion del usuario
        session_destroy();
    }