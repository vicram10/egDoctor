<?php 
    if (!defined('eGeek')) die('Acceso Prohibido');
    if (!$user_settings['conectado']){
        load_redireccion();
    }
    //templates
    $context['header_template'] = 'admin.header';
    $context['footer_template'] = 'admin.footer';
    //capturamos lo que viene
    $sa = !empty($_REQUEST['sa']) ? $_REQUEST['sa'] : 'main';
    //acciones a realizar dentro del panel de administracion
    $context['admin_menu'] = array(
        'main' => array(
            'page_title' => tablero_titulo,
            'page_description' => tablero_descripcion,
            'template' => 'admin',
            'include' => '',
        ),
    );
    //leemos el template acorde al parametro que viene
    $context['template'] = $context['admin_menu'][$sa]['template'];
    if ($sa != 'main'){
        include(DirInclude.'/'.$context['admin_menu'][$sa]['include']);
    }