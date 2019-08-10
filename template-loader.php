<?php
    if (!defined('eGeek')) die('Acceso Prohibido');

    //incluimos el archivo principal 
    include(DirInclude.'/'.$context['include'].'.php');
    
    //leemos el header?
    if ($load_header){ 
        $template_header = !empty($context['header_template']) ? $context['header_template'] : 'header';
        include(DirContent.'/themes/'. $template_header .'.template.php'); 
    }
    
    //template a mostrar
    include(DirContent.'/themes/'.$context['template'].'.template.php');
    
    //tenemos footer?
    if ($load_footer){
        $template_footer = !empty($context['footer_template']) ? $context['footer_template'] : 'footer';
        include(DirContent.'/themes/'. $template_footer .'.template.php'); 
    }