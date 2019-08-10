<?php
    if (!defined('eGeek')) die('Acceso prohibido');
    //validamos logueo
    if (!$user_settings['conectado']){
        load_redireccion();
    }
    //matamos la session
    user_cerrar_sesion();
    //redireccionamos al inicio
    load_redireccion();