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
        global $db, $context, $rooturl, $scripturl, $themeurl, $webtitle, $websubtitle, $rewriteurl;
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
        //las url principales, vamos a ver para usar de esa manera
        //(isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $rooturl = $context['parametros'][101]['valor'];
        $scripturl = $context['parametros'][102]['valor'];
        $themeurl = $context['parametros'][103]['valor'];
        //url amigable?
        $rewriteurl = !empty($context['parametros'][105]['valor']) ? true : false;
        //variables a usar
        $context['footer_html'] = '';
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

    //consultamos algunas tablas importantes y para uso en la web
    function load_datos_web(){
        global $context, $db;
        //vemos los datos de acerca de...
        $acerca_de = $db->query(
            "SELECT c.tipo_registro, c.valor_dato, c.fecha
            FROM acerca_de c", 
            array()
        );
        $context['acerca_de'] = array();
        foreach($acerca_de as $key => $value){
            $context['acerca_de'][$value['tipo_registro']] = array(
                'valor' => $value['valor_dato'],
                'fecha' => load_formato_fecha('fecha', $value['fecha']),
            );
        }
        if (!empty($context['acerca_de']['mi_nombre']['valor'])){
            $context['acerca_de']['nombre_completo']['valor'] = $context['acerca_de']['mi_nombre']['valor'].' '.$context['acerca_de']['mi_apellido']['valor'];
        }
    }

    //nos permite actualizar nuestra tabla principal parametros
    function load_actualizacion_parametros($registros){
        global $db, $msgError;
        foreach($registros as $key => $value){
            $valor_dato = $value['valor'];
            $db->ejecutar("UPDATE parametros SET valor = '$valor_dato' WHERE parametro_id = $key");
            if (!empty($msgError)){ return; }
        }
    }

    //nos permite actualizar nuestra tabla de acerca de
    function load_actualizacion_acerca_de($registros){
        global $db, $msgError;
        foreach($registros as $key => $value){
            $valor_dato = $value['valor'];
            $db->ejecutar("UPDATE acerca_de SET valor_dato = '$valor_dato', fecha = ". time() ." WHERE tipo_registro = '$key'");
            if (!empty($msgError)){ return; }
        }
    }

    //leemos todo lo necesario para saber que archivos usar
    function load_main(){
        global $context, $route, $rewriteurl;
        //capturamos lo que viene en la url
        $route = !empty($_REQUEST['route']) ? $_REQUEST['route'] : 'home';
        $context['include'] = $route;
        //si la pagina principal decimos que no esta habilitado
        if (empty($context['parametros'][106]['valor']) && in_array($route, array('home'))){
            $context['include'] = 'maintenance';
        }
        //url amigable
        if ($rewriteurl)
            ob_start('load_buffer');
    }

    //funcion principal para poder reescribir las url
    function load_buffer($buffer){
        global $scripturl, $rooturl, $context;
        $buffer = preg_replace("/index.php\?route=login/", 'usuario/iniciar', $buffer);
        $buffer = preg_replace("/index.php\?route=logout/", 'usuario/cerrar', $buffer);
        return $buffer;
    }

    //darle formato al time()
    function load_formato_fecha($tipo, $date){
        $return = "";
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        //decimos la region de la fecha..
        setlocale(LC_ALL, 'es-ES'); 
        //devuelve 21/05/2012
        switch($tipo){
            case "blog":
                $return = strftime('%B %d, %Y',$date);
                break;
            case "mes_dia":
                $return = $meses[strftime('%m',$date)-1].' '.strftime('%d',$date);
                break;
            case "hora":
                $return = strftime('%H:%M',$date);      
                break;
            case "year":
                $return = strftime('%Y',$date);     
                break;  
            case "fecha_hora":
                $return = strftime('%d-%m-%y %H:%M', $date);
                break;
            case "fecha":
                $return = strftime('%d/%m/%Y',$date);
                break;
            case "dia":
                $return = strftime('%d',$date);
                break;
            case "mes_letra":
                $return = $meses[strftime('%m',$date)-1];
                break;
            case "periodo_letra":
                $return = $meses[strftime('%m',$date)-1].'/'.strftime('%Y',$date);
                break;
            case "periodo":
                $return = strftime('%m%Y',$date);
                break;
        }
        return $return;
    }

    //para leer un directorio y sus subdirectorios/archivos
    function load_leer_biblioteca(){
        global $rooturl, $context;
        $actual_directorio = opendir(DirContent . '/upload/');
        while($archivo = readdir($actual_directorio)){
            if ($archivo != '.' && $archivo != '..' && $archivo != 'index.php'){
                $identificador = explode('_', $archivo);
                $context['biblioteca'][$identificador[0]] = array(
                    'nombre' => $archivo,
                    'url' => $rooturl.'contents/upload/'.$archivo,
                );
            }
        }
        return isset($context['biblioteca']) ? $context['biblioteca'] : array();//salto error en la mackbook en esta linea
    }