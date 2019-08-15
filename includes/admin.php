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
            'page_title' => label_centro_administracion,
            'page_description' => sprintf(tablero_descripcion, $user_settings['nombre']),
            'template' => 'admin',
            'include' => 'admin',
        ),
    );
    //leemos el template acorde al parametro que viene
    $context['admin_menu_active'] = $context['admin_menu'][$sa];
    $context['template'] = $context['admin_menu'][$sa]['template'];
    $context['page_title'] = $context['admin_menu'][$sa]['page_title'];
    $context['page_description'] = $context['admin_menu'][$sa]['page_description'];

    //vemos las subacciones?
    if ($sa != 'main'){
        include(DirInclude.'/'.$context['admin_menu'][$sa]['include']);
    }