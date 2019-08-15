<?php 
if (!defined('eGeek')) die('Acceso Prohibido');
//template
echo '
<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head>
        <!--begin::Base Path (base relative path for assets of this page) -->
        <base href="', $themeurl ,'/dashboard/">
        <!--end::Base Path -->
        <meta charset="utf-8" />
        <title>', $context['page_title'] ,'</title>
        <meta name="description" content="', $context['page_description'] ,'">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    "families": ["Poppins:300,400,500,600,700", "Asap+Condensed:500"]
                },
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Fonts -->
        <!--begin::Page Vendors Styles(used by this page) -->
        <link href="', $themeurl ,'/dashboard/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles -->
        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="', $themeurl ,'/dashboard/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="', $themeurl ,'/dashboard/css/enterprise/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->
        <!--begin::Layout Skins(used by all pages) -->
        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="', $themeurl ,'/default/images/logo.png" type="image/png" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
        
        <!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<div class="dropdown">
					<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<i class="flaticon2-layers"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md">
						<ul class="kt-nav kt-nav--bold kt-nav--md-space kt-margin-t-20 kt-margin-b-20">
							<li class="kt-nav__item">
								<a class="kt-nav__link active" href="', $rooturl ,'">
									<span class="kt-nav__link-icon"><i class="flaticon-home"></i></span>
									<span class="kt-nav__link-text">', label_pagina_inicio ,'</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
			</div>
		</div>
		<!-- end:: Header Mobile -->

        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-header__top">
                            <div class="kt-container ">
                            
								<!-- begin:: Brand -->
								<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
									<div class="kt-header__brand-nav">
										<div class="dropdown">
											<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												', label_escritorio ,'
											</button>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md">
												<ul class="kt-nav kt-nav--bold kt-nav--md-space kt-margin-t-20 kt-margin-b-20">
													<li class="kt-nav__item">
														<a class="kt-nav__link active" href="', $rooturl ,'">
															<span class="kt-nav__link-icon"><i class="flaticon-home"></i></span>
															<span class="kt-nav__link-text">', label_pagina_inicio ,'</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
                                <!-- end:: Brand -->

                                <!-- begin:: Header Topbar -->
                                <div class="kt-header__topbar kt-grid__item kt-grid__item--fluid">
                                    <!--begin: User bar -->
                                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                            <span class="kt-hidden kt-header__topbar-welcome">', label_hola ,',</span>
                                            <span class="kt-hidden kt-header__topbar-username">', $user_settings['nombre'] ,'</span>
                                            <img class="kt-hidden-" alt="Pic" src="', $user_settings['imagen'] ,'" />
                                            <span class="kt-header__topbar-icon kt-header__topbar-icon--brand kt-hidden"><b>S</b></span>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

											<!--begin: Head -->
											<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
												<div class="kt-user-card__avatar">
                                                    <img class="kt-hidden-" alt="Pic" src="', $user_settings['imagen'] ,'" />
                                                    
													<!--use below badge element instead the user avatar to display username\'s first letter(remove kt-hidden class to display it) -->
													<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
												</div>
												<div class="kt-user-card__name">
													', $user_settings['nombre'] ,'
												</div>
												<div class="kt-user-card__badge">
													<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
												</div>
                                            </div>
                                            <!-- end:: Head -->

                                        </div>

                                    </div>
                                    <!-- end:: User bar -->

                                </div>
                                <!-- end:: Header Topbar -->
							</div>
                        </div>
                        
                        <div class="kt-header__bottom">
							<div class="kt-container ">

								<!-- begin: Header Menu -->
								<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
								<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
									<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
										<ul class="kt-menu__nav ">
											<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="', $scripturl ,'?route=admin" class="kt-menu__link "><span class="kt-menu__link-text">', label_centro_administracion ,'</span></a></li>
										</ul>
									</div>
								</div>

								<!-- end: Header Menu -->
							</div>
						</div>

					</div>
                    <!-- end:: Header -->
                    
                    <div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
					    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                            
                                <!-- begin:: Content Head -->
                                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                                    <div class="kt-container ">
                                        <div class="kt-subheader__main">
                                            <h3 class="kt-subheader__title">', $context['page_title'] ,'</h3>
                                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                                            <span class="kt-subheader__desc">', strtoupper( sprintf(label_descripcion_corto, $context['admin_menu_active']['template'], $context['admin_menu_active']['include']) ) ,'</span>
                                        </div>
                                        <div class="kt-subheader__toolbar">
                                        </div>
                                    </div>
                                </div>
                                <!-- end:: Content Head -->

                                <!-- begin:: Content -->
                                <div class="kt-container  kt-grid__item kt-grid__item--fluid">';