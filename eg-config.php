<?php
    //creamos los directorios
    define('DirClass', DirRoot.'/class');
    define('DirContent', DirRoot.'/contents');
    define('DirInclude', DirRoot.'/includes');
    //incluimos el archivo principal
    include(DirRoot.'/eg-settings.php');
    //leemos el template
    include(DirRoot.'/template-loader.php');