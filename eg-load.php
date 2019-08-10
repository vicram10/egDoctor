<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    //leemos los parametros del sistema
    function load_leer_parametros(){
        global $db, $context, $rooturl, $scripturl;
        $resultado = $db->query(
            "SELECT c.parametro_id, c.descripcion, c.valor
            FROM parametros c", 
            array()
        );
        $context['parametros'] = array();
        foreach($resultado as $idx => $value){
            $context['parametros'][$value['parametro_id']] = array(
                'descripcion' => $value['descripcion'],
                'valor' => $value['valor'],
            );
        }
        //las url principales
        $rooturl = $context['parametros'][101]['valor'];
        $scripturl = $context['parametros'][102]['valor'];
    }

    //incluimos los archivos de idiomas
    function load_archivos_idiomas(){
        include(DirContent.'/languages/errors.'. lang .'.php');
        include(DirContent.'/languages/principal.'.lang.'.php');
    }

    //leemos todo lo necesario para saber que archivos usar
    function load_main(){
        global $context, $route;
        //capturamos lo que viene en la url
        $route = !empty($_REQUEST['route']) ? $_REQUEST['route'] : '';
        if (empty($route)){
            $context['include'] = 'home';
        }else{
            $context['include'] = $route;
        }
    }