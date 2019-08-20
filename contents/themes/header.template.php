<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    echo '
    <!DOCTYPE html>
    <!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
    <!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
    <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="', $websubtitle ,'">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>', $webtitle ,' - ', $websubtitle ,'</title>

    <!-- STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="', $themeurl ,'/default/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="', $themeurl ,'/default/css/style.css" />
    <!-- /STYLES -->

    </head>

    <body>

    <!-- WRAPPER ALL -->
    <div class="arlo_tm_wrapper_all">
    
        <div id="arlo_tm_popup_blog">
            <div class="container">
                <div class="inner_popup scrollable"></div>
            </div>
            <span class="close"><a href="#"></a></span>
        </div>
        
        <!-- PRELOADER -->
        <div class="arlo_tm_preloader">
            <div class="spinner_wrap">
                <div class="spinner"></div>
            </div>
        </div>
        <!-- /PRELOADER -->
        
        <!-- MOBILE MENU -->
        <div class="arlo_tm_mobile_header_wrap">
            <div class="main_wrap">
                <div class="logo">
                    &nbsp;
                </div>
                <div class="arlo_tm_trigger">
                    <div class="hamburger hamburger--collapse-r">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arlo_tm_mobile_menu_wrap">
                <div class="mob_menu">
                    <ul class="anchor_nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /MOBILE MENU -->
        
        <!-- CONTENT -->
        <div class="arlo_tm_content">
        
            <!-- LEFTPART -->
            <div class="arlo_tm_leftpart_wrap">
                <div class="leftpart_inner">
                    <div class="logo_wrap">
                        &nbsp;
                    </div>
                    <div class="menu_list_wrap">
                        <ul class="anchor_nav">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                        </ul>
                    </div>
                    <div class="leftpart_bottom">
                        <div class="social_wrap">
                            <ul>
                                <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                <li><a href="#"><i class="xcon-linkedin"></i></a></li>
                                <li><a href="#"><i class="xcon-instagram"></i></a></li>
                                <li><a href="#"><i class="xcon-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <a class="arlo_tm_resize" href="#"><i class="xcon-angle-left"></i></a>
                </div>
            </div>
            <!-- /LEFTPART -->
            
            <!-- RIGHTPART -->
            <div class="arlo_tm_rightpart">
                <div class="rightpart_inner">';