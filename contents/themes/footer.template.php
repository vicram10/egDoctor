<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    echo '
                </div>

            </div>
            <!-- /RIGHTPART -->

            <a class="arlo_tm_totop" href="#"></a> 

        </div> 
        <!-- /Content -->

    </div>
    <!-- / WRAPPER ALL -->

    <!-- SCRIPTS -->
    <script type="text/javascript">
        var titulos_aleatorios = "', !empty($context['acerca_de']['titulos_academicos']['valor']) ? $context['acerca_de']['titulos_academicos']['valor'] : '' ,'";
        var background_image = "', !empty($context['biblioteca']['fondo']['url']) ? $context['biblioteca']['fondo']['url'] : $themeurl.'/default/images/hero/2.jpg' ,'";
    </script>
    <script src="', $themeurl ,'/default/js/jquery.js"></script>
    <!--[if lt IE 9]> <script type="text/javascript" src="', $themeurl ,'/default/js/modernizr.custom.js"></script> <![endif]-->
    <!--[if lt IE 10]> <script type="text/javascript" src="', $themeurl ,'/default/js/ie8.js"></script> <![endif]-->	
    <script src="', $themeurl ,'/default/js/plugins.js"></script>
    <script src="', $themeurl ,'/default/js/init.js"></script>
    <script src="',$themeurl,'/default/js/forms.js" type="text/javascript"></script>
    <script src="',$themeurl,'/default/js/principal.js" type="text/javascript"></script>
    <script src="',$themeurl,'/default/js/sweetalert.min.js" type="text/javascript"></script>
    <!-- /SCRIPTS -->
    </body>
    </html>';