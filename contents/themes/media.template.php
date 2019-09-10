<?php
if (!defined('eGeek')) die ('Acceso prohibido');

echo '
<div class="kt-portlet col-lg-8">
    ', template_portlet_head('socicon-youtube', 'text-info', label_media_titulo2, 'text-info') ,'
    <div class="kt-portlet__body">
        <div class="kt-portlet__content">

            <!-- SUBIR IMAGEN DE PERFIL -->
            <form class="kt-form kt-form--label-right border" action="', $scripturl ,'?route=admin&sa=media" id="dropzone-perfil" method="post" enctype="multipart/form-data">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-center">
                            ', label_media_perfil,'';
                            if (!empty($context['biblioteca']['perfil']['url'])){
                                echo '
                                <p class="mt-3">
                                    <img width="50" height="50" src="', $context['biblioteca']['perfil']['url'] ,'" alt="', $context['biblioteca']['perfil']['nombre'] ,'" />
                                </p>';
                            }
                        echo '
                        </label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <span class="imagen_perfil">
                                <input type="hidden" class="input_prefijo" name="input_prefijo" value="perfil" accept="image/*" />
                                <div class="upload-btn-wrapper">
                                    <span id="label_perfil" class="btn btn-success">', media_subir ,'</span>
                                    <input type="file" name="file" />
                                </div>
                                <button type="submit" class="btn btn-warning"><i class="flaticon-upload"></i> ', btn_agregar ,'</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /SUBIR IMAGEN DE PERFIL -->

            <!-- SUBIR IMAGEN DE LA PAGINA DE INICIO -->
            <form class="mt-3 kt-form kt-form--label-right border" action="', $scripturl ,'?route=admin&sa=media" id="dropzone-perfil" method="post" enctype="multipart/form-data">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-center">
                            ', label_media_portal,'';
                            if (!empty($context['biblioteca']['portal']['url'])){
                                echo '
                                <p class="mt-3">
                                    <img width="50" height="50" src="', $context['biblioteca']['portal']['url'] ,'" alt="', $context['biblioteca']['portal']['nombre'] ,'" />
                                </p>';
                            }
                        echo '
                        </label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <span class="imagen_perfil">
                                <input type="hidden" name="input_prefijo" value="portal" accept="image/*" />
                                <div class="upload-btn-wrapper">
                                    <span class="btn btn-success">', media_subir ,'</span>
                                    <input type="file" name="file" />
                                </div>
                                <button type="submit" class="btn btn-warning"><i class="flaticon-upload"></i> ', btn_agregar ,'</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /SUBIR IMAGEN DE LA PAGINA DE INICIO -->

            <!-- SUBIR IMAGEN DE LA PAGINA DE ACERCA DE -->
            <form class="mt-3 kt-form kt-form--label-right border" action="', $scripturl ,'?route=admin&sa=media" id="dropzone-perfil" method="post" enctype="multipart/form-data">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-center">
                            ', label_media_acerca_de,'';
                            if (!empty($context['biblioteca']['acerca-de']['url'])){
                                echo '
                                <p class="mt-3">
                                    <img width="50" height="50" src="', $context['biblioteca']['acerca-de']['url'] ,'" alt="', $context['biblioteca']['acerca-de']['nombre'] ,'" />
                                </p>';
                            }
                        echo '
                        </label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <span class="imagen_perfil">
                                <input type="hidden" name="input_prefijo" value="acerca-de" accept="image/*" />
                                <div class="upload-btn-wrapper">
                                    <span class="btn btn-success">', media_subir ,'</span>
                                    <input type="file" name="file" />
                                </div>
                                <button type="submit" class="btn btn-warning"><i class="flaticon-upload"></i> ', btn_agregar ,'</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /SUBIR IMAGEN DE LA PAGINA DE ACERCA DE -->

            <!-- SUBIR IMAGEN DE FONDO DEL PORTAL -->
            <form class="mt-3 kt-form kt-form--label-right border" action="', $scripturl ,'?route=admin&sa=media" id="dropzone-perfil" method="post" enctype="multipart/form-data">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12 text-center">
                            ', label_media_fondo,'';
                            if (!empty($context['biblioteca']['fondo']['url'])){
                                echo '
                                <p class="mt-3">
                                    <img width="50" height="50" src="', $context['biblioteca']['fondo']['url'] ,'" alt="', $context['biblioteca']['fondo']['nombre'] ,'" />
                                </p>';
                            }
                        echo '
                        </label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <span class="imagen_perfil">
                                <input type="hidden" name="input_prefijo" value="fondo" accept="image/*" />
                                <div class="upload-btn-wrapper">
                                    <span class="btn btn-success">', media_subir ,'</span>
                                    <input type="file" name="file" />
                                </div>
                                <button type="submit" class="btn btn-warning"><i class="flaticon-upload"></i> ', btn_agregar ,'</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /SUBIR IMAGEN DE FONDO DEL PORTAL -->

        </div>
    </div>
</div>';