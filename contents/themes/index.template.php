<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    echo '
    <!-- BEGIN HOME -->
    <div class="arlo_tm_section" id="home">
        <div class="arlo_tm_hero_header_wrap">
            <div class="arlo_tm_universal_box_wrap">
                <div class="bg_wrap">
                    <div class="overlay_image hero jarallax" data-speed="0.1"></div>
                    <div class="overlay_color hero"></div>
                </div>
                <div class="content hero">
                    <div class="inner_content">
                        <div class="image_wrap">
                            <img src="', $themeurl ,'/default/images/about/600x600.jpg" alt="" />
                            <div class="main" data-img-url="', $themeurl ,'/default/images/about/1.jpg"></div>
                        </div>
                        <div class="name_holder">
                            <h3>', $context['acerca_de']['mi_nombre']['valor']  ,' <span>', $context['acerca_de']['mi_apellido']['valor'] ,'</span></h3>
                        </div>
                        <div class="text_typing">
                            <p>I\'m a <span class="arlo_tm_animation_text_word"></span></p>
                        </div>
                    </div>
                </div>
                <div class="arlo_tm_arrow_wrap bounce anchor">
                    <a href="#about"><i class="xcon-angle-double-down"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /HOME -->
    
    <!-- ABOUT -->
    <div class="arlo_tm_section relative" id="about">
        <div class="arlo_tm_about_wrapper_all">
            <div class="container">
                <div class="arlo_tm_title_holder">
                    <h3>', label_about2 ,'</h3>
                    <span>', label_about_descripcion ,'</span>
                </div>
                <div class="arlo_tm_about_wrap">
                    <div class="author_wrap">
                        <div class="leftbox">
                            <div class="about_image_wrap parallax" data-relative-input="true">
                                <div class="image layer" data-depth="0.1">
                                    <img src="', $themeurl ,'/default/images/about/550x640.jpg" alt="" />
                                    <div class="inner" data-img-url="', $themeurl ,'/default/images/about/1.jpg"></div>
                                </div>
                                <div class="border layer" data-depth="0.2">
                                    <img src="', $themeurl ,'/default/images/about/550x640.jpg" alt="" />
                                    <div class="inner"></div>
                                </div>
                            </div>

                        </div>
                        <div class="rightbox">
                            <div class="arlo_tm_mini_title_holder">
                                <h4>', label_hola2 ,' ', $context['acerca_de']['nombre_completo']['valor'] ,' (<span class="arlo_tm_animation_text_word"></span>)</h4>
                            </div>
                            <div class="definition">
                                <p>', sprintf(label_presentacion_about, $context['acerca_de']['nombre_completo']['valor']
,$context['acerca_de']['breve_descripcion']['valor']) ,'</p>
                            </div>
                            <div class="about_short_contact_wrap">
                                <ul>
                                    <li>
                                        <span><label>', label_intereses ,':</label> ', !empty($context['acerca_de']['interes']['valor']) ? $context['acerca_de']['interes']['valor'] : '' ,'</span>
                                    </li>
                                    <li>
                                        <span><label>', label_estudios ,':</label> Chicago University</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ABOUT -->

    <!-- CONTACT & FOOTER -->
    <div class="arlo_tm_section" id="contact">
        <div class="container">
            <div class="arlo_tm_title_holder contact">
                <h3>', label_contacto ,'</h3>
                <span>', label_contacto2 ,'</span>
            </div>
        </div>
        <div class="arlo_tm_footer_contact_wrapper_all">
            <div class="arlo_tm_contact_wrap_all">
                <div class="container">
                    <div class="leftbox">
                        <div class="arlo_tm_mini_title_holder contact">
                            <h4>', label_contacto3 ,'</h4>
                        </div>
                    </div>
                    <div class="rightbox">
                        <div class="arlo_tm_contact_wrap">
                            <div class="main_input_wrap">
                                <form action="', $scripturl ,'?route=sendmessage" method="post" class="contact_form" id="contact_form">
                                    <div class="wrap">
                                        <input id="name" type="text" placeholder="', label_tu_nombre ,'" name="input_nombre" />
                                    </div>
                                    <div class="wrap">
                                        <input id="email" type="email" placeholder="', label_tu_correo ,'" name="input_correo"/>
                                    </div>
                                    <div class="wrap">
                                        <textarea id="message" placeholder="', label_tu_mensaje ,'" name="input_mensaje"></textarea>
                                    </div>
                                    <div class="arlo_tm_button">
                                        <a id="enviar_mensaje" href="#"><span>', btn_enviar_mensaje ,'</span></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arlo_tm_footer_wrap">
                <div class="container">
                    <p>
                        2019 &copy;&nbsp;', $webtitle ,'&nbsp;v.', label_version ,'&nbsp;<a href="http://www.egeek.com.py" target="_blank" class="kt-link">eGeek</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /CONTACT & FOOTER -->';