<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    //datos del usuario
    function user_obtener_datos(){
        global $session_id, $user_id, $user_settings, $themeurl;
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
            'id' => !empty($_SESSION[$session_id.'_usuario_id']) ? $_SESSION[$session_id.'_usuario_id'] : '',
            'usuario' => !empty($_SESSION[$session_id.'_usuario']) ? $_SESSION[$session_id.'_usuario'] : '',
            'nombre' => !empty($_SESSION[$session_id.'_nombre']) ? $_SESSION[$session_id.'_nombre'] : label_visitante,
            'perfil' => !empty($_SESSION[$session_id.'_perfil']) ? $_SESSION[$session_id.'_perfil'] : '',
            'perfil_id' => !empty($_SESSION[$session_id.'_perfil_id']) ? (int) $_SESSION[$session_id.'_perfil_id'] : 0,
            'imagen' => !empty($_SESSION[$session_id.'_imagen']) ? (int) $_SESSION[$session_id.'_imagen'] : $themeurl.'/default/images/default-avatar.jpg',
            'conectado' => !empty($_SESSION[$session_id.'_conectado']) ? $_SESSION[$session_id.'_conectado'] : false,
            'es_administrador' => !empty($_SESSION[$session_id.'_es_administrador']) ? $_SESSION[$session_id.'_es_administrador'] : false,
        );
        $user_id = $user_settings['id'];
    }

    function user_iniciar_sesion($usuario, $password){
        global $session_id, $db, $context;
        $mensaje_retorno = "";
        //hacemos la encriptacion del password para poder hacer las verificaciones
        $password_hash = load_encriptar($password);
        //hacemos la consulta a la base de datos
        $consulta_usuario = $db->query(
            "SELECT c.*, p.descripcion
            FROM usuario c, usuario_perfil p
            WHERE c.perfil_id = p.perfil_id
            AND c.usuario = :usuario AND c.password = :pass", 
            array(
                ':usuario' => $usuario, 
                ':pass' => $password_hash,
            )
        );
        if (count($consulta_usuario) > 0){
            //analizamos el estado del usuario
            if (!in_array($consulta_usuario[0]['estado'], array('PENDIENTE', 'BLOQUEADO'))){
                //guardamos los valores en la sesion
                $_SESSION[$session_id.'_usuario_id'] = $consulta_usuario[0]['usuario_id'];
                $_SESSION[$session_id.'_usuario'] = $consulta_usuario[0]['usuario'];
                $_SESSION[$session_id.'_nombre'] = $consulta_usuario[0]['nombre_usuario'];
                $_SESSION[$session_id.'_perfil_id'] = $consulta_usuario[0]['perfil_id'];
                $_SESSION[$session_id.'_perfil'] = $consulta_usuario[0]['descripcion'];
                $_SESSION[$session_id.'_imagen'] = !empty($context['biblioteca'][$consulta_usuario[0]['usuario_id']]['perfil']['url']) ? $context['biblioteca'][$consulta_usuario[0]['usuario_id']]['perfil']['url'] : '' ;
                $_SESSION[$session_id.'_conectado'] = true;
                $_SESSION[$session_id.'_es_administrador'] = $consulta_usuario[0]['perfil_id'] == 1 ? true : false;
                $mensaje_retorno = 'OK|'.mensaje_iniciado_correctamente;
            }else{
                $mensaje_retorno = 'NOOK|'.sprintf(error_usuario_no_activo, $usuario, '<span class="text-uppercase badge badge-danger">'.$consulta_usuario[0]['estado'].'</span>');
            }
        }else{
            $mensaje_retorno = 'NOOK|'.error_no_inicio;
        }
        return $mensaje_retorno;
    }

    //para saber la cantidad de mensajes recibidos
    function user_cantidad_mensajes_recibidos($marcar_leido = 'NO'){
        global $db;
        $consulta = $db->query(
            "SELECT count(1) cantidad FROM mensajes_recibidos WHERE marcar_leido = '$marcar_leido' OR '$marcar_leido' = 'TODO'",
            array()
        );
        return !empty($consulta) ? (int) $consulta[0]['cantidad'] : 0; 
    }

    //metodo para poder cerrar la sesion del usuario
    function user_cerrar_sesion(){
        global $generico;
        //matamos la sesion del usuario
        session_destroy();
    }