<?php 
if (!defined('eGeek')) die('Acceso prohibido');
echo '
<div class="kt-portlet col-lg-8">
    ', template_portlet_head('flaticon-user', '', configuraciones_titulo2, '') ,'
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">
            <form id="formConfiguraciones" name="formConfiguraciones" role="form" action="', $scripturl ,'?route=admin&sa=postsettings">
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        
                        <!-- Begin:: Acerca de... -->
                        <h3 class="kt-section__title">1. ', configuraciones_about ,':</h3>
                        <div class="kt-section__body">
                            
                            <div class="form-group row">
								<label class="col-lg-3 col-form-label">', label_nombre ,':</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="', label_nombre ,'" name="input_nombre" />
									<span class="form-text text-muted">', label_nombre_ayuda ,'</span>
								</div>
                            </div>

                            <div class="form-group row">
								<label class="col-lg-3 col-form-label">', label_sobre_mi ,':</label>
								<div class="col-lg-9">
                                    <textarea class="form-control" placeholder="', label_sobre_mi ,'" name="input_sobre_mi" rows="9"></textarea>
									<span class="form-text text-muted">', label_sobre_mi_ayuda ,'</span>
								</div>
                            </div>

                            <div class="form-group row">
								<label class="col-lg-3 col-form-label">', label_intereses ,':</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="', label_intereses ,'" name="input_interes" />
									<span class="form-text text-muted"></span>
								</div>
                            </div>

                        </div>
                        
                        <!-- end:: Acerca de... -->

                    </div>
                </div>
            </form>
        </div>
    </div>
    ', template_portlet_footer('formConfiguraciones', 'kt-align-left',$scripturl.'?route=admin&sa=settings', 'btn btn-success', 'btn btn-warning') ,'
</div>';