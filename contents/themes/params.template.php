<?php
if (!defined('eGeek')) die('Acceso prohibido');
echo '
<div class="kt-portlet col-lg-8">
    ', template_portlet_head('flaticon-user', '', configuraciones_titulo2, '') ,'
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">
            <form class="kt-form" id="formParams" name="formParams" role="form" action="', $scripturl ,'?route=admin&sa=postparams">
                <div class="kt-portlet__body">

                    <div class="kt-section kt-section--first">
                        
                        <!-- Begin:: Parametros... -->
                        <div class="kt-section__body">
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">', label_titulo_web ,':</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="', label_titulo_web ,'" name="input_titulo_web" value="', !empty($context['parametros'][100]['valor']) ? $context['parametros'][100]['valor'] : '' ,'"/>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">', label_subtitulo_web ,':</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="', label_subtitulo_web ,'" name="input_subtitulo_web" value="', !empty($context['parametros'][104]['valor']) ? $context['parametros'][104]['valor'] : '' ,'"/>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">', label_enlaces_permanentes ,':</label>
                                <div class="col-lg-9">
                                    ', label_si ,' &nbsp;<input type="radio" name="input_enlace" value="1"', !empty($context['parametros'][105]['valor']) ? ' checked' : '' ,'/>
                                    &nbsp;&nbsp;
                                    ', label_no ,' &nbsp;<input type="radio" name="input_enlace" value="0"', empty($context['parametros'][105]['valor']) ? ' checked' : '' ,'/>
                                    <span class="form-text text-muted">', label_enlaces_permanentes_ayuda ,'</span>
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">', label_habilitar_pagina ,':</label>
                                <div class="col-lg-9">
                                    ', label_si ,' &nbsp;<input type="radio" name="input_habilitar" value="1"', !empty($context['parametros'][106]['valor']) ? ' checked' : '' ,'/>
                                    &nbsp;&nbsp;
                                    ', label_no ,' &nbsp;<input type="radio" name="input_habilitar" value="0"', empty($context['parametros'][106]['valor']) ? ' checked' : '' ,'/>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End:: Parametros... -->
                </div>

            </form>
        </div>
    </div>
    ', template_portlet_footer('formParams', 'kt-align-left',$scripturl.'?route=admin&sa=params', 'btn btn-info', 'btn btn-danger') ,'
</div>';