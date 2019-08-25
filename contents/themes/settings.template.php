<?php 
if (!defined('eGeek')) die('Acceso prohibido');
echo '
<div class="kt-portlet col-lg-8">
    ', template_portlet_head('flaticon-user', '', configuraciones_titulo2, '') ,'
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">
            <form class="kt-form" id="formConfiguraciones" name="formConfiguraciones" role="form" action="', $scripturl ,'?route=admin&sa=postsettings">
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        
                        <!-- Begin:: Acerca de... -->
                        <h3 class="kt-section__title">1. ', configuraciones_about ,':</h3>
                        <div class="kt-section__body">
                            
                            <div class="form-group row">
								<label class="col-lg-3 col-form-label">', label_nombre ,':</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="', label_nombre ,'" name="input_nombre" value="', !empty($context['acerca_de']['mi_apellido']['valor']) ? $context['acerca_de']['mi_nombre']['valor'] : '' ,'"/>
									<span class="form-text text-muted">', label_nombre_ayuda ,'</span>
								</div>
                            </div>

                            <div class="form-group row">
								<label class="col-lg-3 col-form-label">', label_apellido ,':</label>
								<div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="', label_apellido ,'" name="input_apellido" value="', !empty($context['acerca_de']['mi_apellido']['valor']) ? $context['acerca_de']['mi_apellido']['valor'] : '' ,'"/>
									<span class="form-text text-muted">', label_apellido_ayuda ,'</span>
								</div>
                            </div>

                            <div class="form-group row">
								<label class="col-lg-3 col-form-label">', label_sobre_mi ,':</label>
								<div class="col-lg-9">
                                    <textarea class="form-control" placeholder="', label_sobre_mi ,'" name="input_sobre_mi" rows="9">', !empty($context['acerca_de']['mi_apellido']['valor']) ? $context['acerca_de']['breve_descripcion']['valor'] : '' ,'</textarea>
									<span class="form-text text-muted">', label_sobre_mi_ayuda ,'</span>
								</div>
                            </div>

                            <div class="form-group row">
								<label class="col-lg-3 col-form-label">', label_intereses ,':</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="', label_intereses ,'" name="input_interes" value="', !empty($context['acerca_de']['interes']['valor']) ? $context['acerca_de']['interes']['valor'] : '' ,'" />
									<span class="form-text text-muted">', label_intereses_ayuda ,'</span>
								</div>
                            </div>
                            
                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>';
                            if (!empty($context['acerca_de']['titulos_academicos']['valor'])){
                                echo '
                                <div class="mb-5">
                                    <div class="form-group form-group-last row" id="campo_repetir">
                                        <label class="col-lg-2 col-form-label">', label_titulos_academicos ,':</label> 
                                        <input type="text" class="form-control text-muted" placeholder="', label_titulo ,'" disabled value="', $context['acerca_de']['titulos_academicos']['valor'] ,'"/> 
                                        <input type="hidden" name="input_titulos_grabados" value="', $context['acerca_de']['titulos_academicos']['valor'] ,'"/>
                                    </div>
                                </div>';
                            }
                            echo  '
                            <div id="campo_repetir">
                                <div class="form-group form-group-last row" id="campo_repetir">
                                    <label class="col-lg-2 col-form-label">', label_titulos_academicos ,':</label>
                                    
                                    <div id="campo_repetir_lista" class="col-lg-10">
                                        
                                        <div id="campo_1" class="form-group row align-items-center">     
                                            <div class="col-md-8">
                                                <div class="kt-form__group--inline">
                                                    <div class="kt-form__control">
                                                        <input type="text" class="form-control" placeholder="', label_titulo ,'" name="input_titulo_academico[]"/> 
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn-sm btn btn-label-danger btn-bold kt-hidden">
                                                    <i class="la la-trash-o"></i>
                                                    ', btn_borrar ,'
                                                </button>
                                            </div>
                                        </div>

                                    </div>                 
                                </div>

                                <div class="form-group form-group-last row">
                                    <label class="col-lg-2 col-form-label"></label>
                                    <div class="col-lg-4">
                                        <a href="javascript:;" class="btn btn-bold btn-sm btn-label-brand" id="AgregarFilas">
                                            <i class="la la-plus"></i> ', btn_agregar ,'
                                        </a>
                                    </div>                                        
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">', label_lugar_estudio ,':</label>
								<div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="', label_lugar_estudio ,'" name="input_lugar_estudio" value="', !empty($context['acerca_de']['lugar_estudio']['valor']) ? $context['acerca_de']['lugar_estudio']['valor'] : '' ,'"/>
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