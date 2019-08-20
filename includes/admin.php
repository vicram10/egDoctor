<?php 
    if (!defined('eGeek')) die('Acceso Prohibido');
    //capturamos lo que viene
    $sa = !empty($_REQUEST['sa']) ? $_REQUEST['sa'] : 'main';
    //acciones a realizar dentro del panel de administracion
    $context['admin_menu'] = array(
        'main' => array(
            'menu' => label_centro_administracion,
            'page_title' => tablero_titulo,
            'page_description' => sprintf(tablero_descripcion, $user_settings['nombre']),
            'template' => 'admin',
            'include' => 'admin',
            'active' => false,
        ),
        'settings' => array(
            'menu' => admin_menu_configuraciones,
            'page_title' => configuraciones_titulo,
            'page_description' => configuraciones_descripcion,
            'template' => 'settings',
            'include' => 'settings',
            'active' => false,
        ),
        'postsettings' => array(
            'menu' => '',
            'page_title' => '',
            'page_description' => '',
            'template' => 'json',
            'include' => 'settings',
            'active' => false,
        ),
    );
    //guardamos en un vector el actual
    $context['admin_menu_active'] = $context['admin_menu'][$sa];
    $context['template'] = $context['admin_menu_active']['template'];
    //es un json lo que vamos a mostrar?
    if ($context['admin_menu_active']['template'] != 'json'){
        //validacion principal
        if (!$user_settings['conectado']){
            load_redireccion();
        }
        //templates
        $context['header_template'] = 'admin.header';
        $context['footer_template'] = 'admin.footer';
        //leemos el template acorde al parametro que viene
        $context['admin_menu'][$sa]['active'] = true;
        $context['page_title'] = $context['admin_menu_active']['page_title'];
        $context['page_description'] = $context['admin_menu_active']['page_description'];
        //cuantos mensajes tenemos
        $context['mensajes_no_leidos'] = user_cantidad_mensajes_recibidos('NO');
    }else{
        $load_header = false;
        $load_footer = false;
    }

    //vemos las subacciones?
    if ($sa != 'main'){
        include(DirInclude.'/'.$context['admin_menu_active']['include'].'.php');
    }
    