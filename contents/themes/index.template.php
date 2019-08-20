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
    
    <!-- ABOUT -->
    <div class="arlo_tm_section relative" id="about">
        <div class="arlo_tm_about_wrapper_all">
            <div class="container">
                <div class="arlo_tm_title_holder">
                    <h3>About Me</h3>
                    <span>Main informations about me</span>
                </div>
                <div class="arlo_tm_about_wrap">
                    <div class="author_wrap">
                        <div class="leftbox">
                            <div class="about_image_wrap parallax" data-relative-input="true">
                                <div class="image layer" data-depth="0.1">
                                    <img src="img/about/550x640.jpg" alt="" />
                                    <div class="inner" data-img-url="', $themeurl ,'/images/about/1.jpg"></div>
                                </div>
                                <div class="border layer" data-depth="0.2">
                                    <img src="', $themeurl ,'/images/about/550x640.jpg" alt="" />
                                    <div class="inner"></div>
                                </div>
                            </div>

                        </div>
                        <div class="rightbox">
                            <div class="arlo_tm_mini_title_holder">
                                <h4>I\'m Alan Michaelis and <span class="arlo_tm_animation_text_word"></span></h4>
                            </div>
                            <div class="definition">
                                <p>Hi! My name is <strong>Alan Michaelis</strong>. I am a Web Developer, and I\'m very passionate and dedicated to my work. With 20 years experience as a professional Web developer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration to concept and execution, but I find the most satisfaction in seeing the finished product do everything for you that it was created to do.</p>
                            </div>
                            <div class="about_short_contact_wrap">
                                <ul>
                                    <li>
                                        <span><label>Birthday:</label> 01.07.1990</span>
                                    </li>
                                    <li>
                                        <span><label>Age:</label> 28</span>
                                    </li>
                                    <li>
                                        <span><label>City:</label> New York, USA</span>
                                    </li>
                                    <li>
                                        <span><label>Interests:</label> Soccer, UFC</span>
                                    </li>
                                    <li>
                                        <span><label>Study:</label> Chicago University</span>
                                    </li>
                                    <li>
                                        <span><label>Degree:</label> Master</span>
                                    </li>	
                                    <li>
                                        <span><label>Website:</label> <a href="#">www.mywebsite.com</a></span>
                                    </li>
                                    <li>
                                        <span><label>Mail:</label> <a href="mailto:example@gmail.com">mymail&#64;gmail.com</a></span>
                                    </li>
                                    <li>
                                        <span><label>Phone:</label> <a href="#">+77 022 177 05 05</a></span>
                                    </li>
                                    <li>
                                        <span><label>Twitter:</label> <a href="#">&#64;myusername</a></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="buttons_wrap">
                                <ul>
                                    <li>
                                        <a href="index.html"><span>Download CV</span></a>
                                    </li>
                                    <li class="anchor">
                                        <a href="#contact"><span>Send Message</span></a>
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
                    <p>
                        2019 &copy;&nbsp;', $webtitle ,'&nbsp;v.', label_version ,'&nbsp;<a href="http://www.egeek.com.py" target="_blank" class="kt-link">eGeek</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /CONTACT & FOOTER -->';