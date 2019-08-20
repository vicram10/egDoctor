<?php
    //definiciones o constantes
    define('lang', 'spanish');
    //definicion de base de datos
    define('db_user', 'root');
    define('db_password', '');
    define('db_connection', 'mysql:host=localhost;dbname=egDoctor');
    //inicializamos la bd
    include(DirClass.'/class-db.php');
    $db = new businessLayer();
    //abrimos la conexion a la base de datos
    $db->open();
    //variables globales
    $msgError = '';
    $webtitle = '';
    $websubtitle = '';
    $rooturl = '';
    $scripturl = '';
    $themeurl = '';
    $rewriteurl = false;
    $context = array();
    $route = '';
    $load_header = true;
    $load_footer = true;
    $session_id = ''; 
    $user_id = 0; 
    $user_settings = array();
    //archivos importantes
    include(DirRoot.'/eg-load.php');
    include(DirRoot.'/eg-template.php');
    include(DirClass.'/class-user.php');
    //leemos los archivos de idiomas
    load_archivos_idiomas();
    //leemos los parametros del sistema
    load_leer_parametros();
    //leemos los datos del usuario
    user_obtener_datos();
    //datos importantes de la web
    load_datos_web();
    //capturamos los valores que vienen por parametro para saber que archivo incluimos y que template
    load_main();