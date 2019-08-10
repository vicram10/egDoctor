<?php 
    if (!defined('eGeek')) die('Acceso Prohibido');
    if (!$user_settings['conectado']){
        load_redireccion();
    }
    //templates
    $context['header_template'] = 'admin.header';
    $context['footer_template'] = 'admin.footer';
    $context['template'] = 'admin';
