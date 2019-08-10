<?php
    if (!defined('eGeek')) die('Acceso Prohibido');

    //vemos el template
    $context['template'] = 'login';
    $context['page_title'] = page_title_login;
    $context['header_template'] = 'login.header';
    $context['footer_template'] = 'login.footer';