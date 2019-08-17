<?php
if (!defined('eGeek')) die('Acceso Prohibido');
echo '
<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>

		<meta charset="utf-8" />
        <title>', $context['page_title'] ,'</title>
		<meta name="description" content="', $context['page_description'] ,'">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
        <link href="', $themeurl ,'/default/css/error.css" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="', $themeurl ,'/dashboard/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="', $themeurl ,'/dashboard/css/enterprise/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->
        
		<link rel="shortcut icon" href="', $themeurl ,'/default/images/logo.png" type="image/png" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    
        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid  kt-error-v5">
                <div class="kt-error_container">
                    <span class="kt-error_title">
                        <h1>', $webtitle ,'</h1>
                    </span>
                    <p class="kt-error_subtitle">
                        ', label_mantenimiento_titulo ,'
                    </p>
                    <p class="kt-error_description">
                        ', label_mantenimiento_descripcion ,'
                        <br/><br/>';
                        if ($user_settings['conectado']){
                            echo '
                            <a href="', $scripturl ,'?route=admin" class="btn btn-elevate btn-info btn-sm btn-upper text-white btn-bold">
                               <i class="flaticon-cogwheel-1"></i> ', label_centro_administracion ,'
                            </a>';
                        }else{
                            echo '
                            <a href="', $scripturl ,'?route=login" class="btn btn-elevate btn-sm btn-upper btn-warning btn-bold">
                                <i class="flaticon-lock"></i> ', page_title_login ,'
                            </a>';
                        }
                    echo '
                    </p>
                </div>
            </div>
        </div>

        <!-- end:: Page -->

    </body>
    <!-- end::Body -->

</html>';