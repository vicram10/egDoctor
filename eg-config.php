<?php
    //creamos los directorios
    define('DirClass', DirRoot.'/class');
    define('DirContent', DirRoot.'/contents');
    define('DirInclude', DirRoot.'/includes');
    //inicializamos la bd
    include(DirClass.'/class-db.php');
    $db = new businessLayer();
    //abrimos la conexion a la base de datos
    $db->open();
    //incluimos el archivo principal
    include(DirRoot.'/eg-settings.php');
    //leemos el template
    include(DirRoot.'/template-loader.php');