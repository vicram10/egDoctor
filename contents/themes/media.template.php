<?php
if (!defined('eGeek')) die ('Acceso prohibido');

echo '
<div class="kt-portlet col-lg-8">
    ', template_portlet_head('socicon-youtube', 'text-info', label_media_titulo2, 'text-info') ,'
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">

            <!-- SUBIR IMAGEN DE PERFIL -->
            <form class="kt-form kt-form--label-right" action="', $scripturl ,'?route=admin&sa=media" id="dropzone-perfil" method="post" enctype="multipart/form-data">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-center">
                            ', label_media_perfil,'';
                            if (!empty($context['biblioteca'][$user_id]['perfil']['url'])){
                                echo '
                                <p class="mt-3">
                                    <img width="50" height="50" src="', $context['biblioteca'][$user_id]['perfil']['url'] ,'" alt="', $context['biblioteca'][$user_id]['perfil']['nombre'] ,'" />
                                </p>';
                            }
                        echo '
                        </label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <span class="imagen_perfil">
                                <label for="imagen_perfil"><i class="fa fa-address-card"></i> <span id="label_imagen_perfil">', media_subir ,'</span></label>
                                <input type="file" id="imagen_perfil" name="file" />
                                <input type="hidden" name="input_prefijo" value="perfil" accept="image/*" />
                                &nbsp;&nbsp;<button type="submit" class="btn btn-warning"><i class="flaticon-upload"></i> ', btn_agregar ,'</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /SUBIR IMAGEN DE PERFIL -->

        </div>
    </div>
</div>';