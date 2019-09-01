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
                        <label class="col-form-label col-lg-3 col-sm-12">', label_media_perfil ,'</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="file" name="file" />
                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" id="btnAgregarSucursal" class="btn blue" value="', btn_agregar ,'" />
                    </div>
                </div>
            </form>
            <!-- /SUBIR IMAGEN DE PERFIL -->

        </div>
    </div>
</div>';