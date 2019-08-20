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
                            <div class="main" data-img-url="img/about/1.jpg"></div>
                        </div>
                        <div class="name_holder">
                            <h3>Alan <span>Michaelis</span></h3>
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
    
    <!-- CONTACT & FOOTER -->
    <div class="arlo_tm_section" id="contact">
        <div class="container">
            <div class="arlo_tm_title_holder contact">
                <h3>Contact Me</h3>
                <span>Get in touch with me</span>
            </div>
        </div>
        <div class="arlo_tm_footer_contact_wrapper_all">
            <div class="arlo_tm_contact_wrap_all">
                <div class="container">
                    <div class="leftbox">
                        <div class="arlo_tm_mini_title_holder contact">
                            <h4>Get in Touch</h4>
                        </div>
                        <div class="short_info_wrap">
                            <ul>
                                <li><p><label>Address:</label><span>123 Qwerty Avenue NYC, USA</span></p></li>
                                <li><p><label>Email:</label><span><a href="mailto:example@gmail.com">example@gmail.com</a></span></p></li>
                                <li><p><label>Phone:</label><span>+77 022 177 05 05</span></p></li>
                                <li><p><label>Website:</label><span><a href="mailto:example@gmail.com">www.yourdomain.com</a></span></p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rightbox">
                        <div class="arlo_tm_contact_wrap">
                            <div class="main_input_wrap">
                                <form action="/" method="post" class="contact_form" id="contact_form">
                                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                    <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                    <div class="wrap">
                                        <input id="name" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="wrap">
                                        <input id="email" type="text" placeholder="Your Email">
                                    </div>
                                    <div class="wrap">
                                        <textarea id="message" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="arlo_tm_button">
                                        <a id="send_message" href="#"><span>Send Message</span></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arlo_tm_footer_wrap">
                <div class="container">
                    <p>&copy; Copyright 2019. All Rights are Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /CONTACT & FOOTER -->';