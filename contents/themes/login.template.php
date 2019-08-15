<?php
    if (!defined('eGeek')) die('Acceso Prohibido');
    //template
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>', $context['page_title'] ,' - ', $webtitle ,' - ', $websubtitle ,'</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="', $themeurl ,'/default/css/principal.css">
    </head>
    <body>
        <div class="col-lg-12 p-0">
            <div class="col-lg-6 p-0 float-left">
                <img src="', $themeurl ,'/default/images/dr-background.jpg" class="img-fluid img-height-full"/>
            </div>
            <div class="col-lg-6 p-0 float-left">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center mb-4" style="color:#0073AA;">
                                <img src="', $themeurl ,'/default/images/logo.png" class="text-center mb-4" />
                            </h2>
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <!-- form card login -->
                                    <div class="card rounded-0">
                                        <div class="card-header">
                                            <h3 class="mb-0">', page_title_login ,'</h3>
                                        </div>
                                        <div class="card-body">
                                            <form class="form" role="form" autocomplete="off" id="formLogin" method="POST" action="', $scripturl ,'?route=login">
                                                <div class="form-group">
                                                    <label for="input_user">', label_usuario ,'</label>
                                                    <input type="text" class="form-control form-control-lg rounded-0" name="input_user" id="input_user" required="" />
                                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label>', label_password ,'</label>
                                                    <input type="password" class="form-control form-control-lg rounded-0" id="input_password" name="input_password" required="" autocomplete="new-password">
                                                    <div class="invalid-feedback">Enter your password too!</div>
                                                </div>
                                                <button type="submit" class="btn btn-warning btn-md float-right" id="btnLogin">
                                                    <i class="fa fa-lock"></i>&nbsp;&nbsp;', btn_iniciar ,'
                                                </button>
                                            </form>
                                        </div>
                                        <!--/card-block-->
                                    </div>
                                    <!-- /form card login -->
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <!--/col-->
                    </div>
                    <!--/row-->
                </div>
                <!--/container-->
            </div><!-- /p-2 bd-highlight -->
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="', $themeurl ,'/default/js/principal.js"></script> 
        <script src="', $themeurl ,'/default/js/forms.js"></script> 
        <script src="', $themeurl ,'/default/js/sweetalert.min.js"></script>
    </body>
    </html>';