<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    //comenzamos
    if (!$user_settings['conectado']){
        echo '
        <a href="', $scripturl ,'?route=login">Login</a>';
    }else{
        echo '
        <a href="', $scripturl ,'?route=admin">Admin</a>
        <a href="', $scripturl ,'?route=logout">Logout</a>';
    }
    echo '<br/>';
    var_dump($user_settings);