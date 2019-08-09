<?php
    //creamos los directorios
    define('DirClass', DirRoot.'/class');
    define('DirContent', DirRoot.'/contents');
    define('DirInclude', DirRoot.'/includes');
    //inicializamos la bd
    require_once(DirClass.'/class-db.php');
    $db = new businessLayer();
    //abrimos la conexion a la base de datos
    $db->open();
?>