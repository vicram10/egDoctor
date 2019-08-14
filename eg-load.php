<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    //redireccionamiento
    function load_redireccion($url = ''){
        global $rooturl;
        $redireccion = empty($url) ? $rooturl : $url;
        header('Location: '.$redireccion);
    }
    //leemos los parametros del sistema
    function load_leer_parametros(){
        global $db, $context, $rooturl, $scripturl, $themeurl, $webtitle, $websubtitle;
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
        //datos principales
        $webtitle = $context['parametros'][100]['valor'];
        $websubtitle = $context['parametros'][104]['valor'];
        //las url principales
        $rooturl = $context['parametros'][101]['valor'];
        $scripturl = $context['parametros'][102]['valor'];
        $themeurl = $context['parametros'][103]['valor'];
    }

    //incluimos los archivos de idiomas
    function load_archivos_idiomas(){
        include(DirContent.'/languages/errors.'. lang .'.php');
        include(DirContent.'/languages/principal.'.lang.'.php');
        include(DirContent.'/languages/admin.'.lang.'.php');
    }

    //para poder encriptar cualquier cosa
    function load_encriptar($texto){
        return hash('sha256', sha1($texto.'-$2y$10$tDXnwNB2BqfCZzt/r6oQbuRGtipTq.PBtk/7DFV9W2n.0ZEpqDm.W'));
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
        //url amigable
        $habilitar = true;
        if ($habilitar)
            ob_start('load_buffer');
    }

    //funcion principal para poder reescribir las url
    function load_buffer($buffer){
        global $scripturl, $rooturl, $context;
        $buffer = preg_replace("/index.php\?route=login/", 'usuario/iniciar', $buffer);
        $buffer = preg_replace("/index.php\?route=logout/", 'usuario/cerrar', $buffer);
        return $buffer;
    }