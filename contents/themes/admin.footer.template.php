<?php 
if (!defined('eGeek')) die('Acceso Prohibido');
//template
echo '
                                </div>
                                <!-- end:: Content -->

                            </div>
                            <!-- ./kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor -->
                        </div>
                        <!-- ./kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch -->
                    </div>
                    <!-- ./kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch -->

                </div><!-- ./kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper  -->
            </div><!-- ./kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page -->
        </div><!-- ./kt-grid kt-grid--hor kt-grid--root -->
        <!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>
		<!-- end::Global Config -->
		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="',$themeurl,'/dashboard/vendors/global/vendors.bundle.js" type="text/javascript"></script>
		<script src="',$themeurl,'/dashboard/js/enterprise/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->
		<!--begin::Page Vendors(used by this page) -->
		<script src=".',$themeurl,'/dashboard/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src=".',$themeurl,'/dashboard/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
		<!--end::Page Vendors -->
		<!--begin::Page Scripts(used by this page) -->
		<script src="',$themeurl,'/dashboard/js/enterprise/pages/dashboard.js" type="text/javascript"></script>
		<!--end::Page Scripts -->
    </body> 
</html>';