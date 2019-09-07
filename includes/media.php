<?php
if (!defined('eGeek')) die ('Acceso prohibido');

//debe estar logueado
if (!$user_settings['conectado']){
    load_redireccion();
}

//ok ya enviamos para subir la imagen
if (!empty($_FILES)) {
    $input_prefijo = $_POST['input_prefijo'];
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = DirContent . '/upload/'.$user_id.'_';
    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $targetFile =  $targetPath. $input_prefijo.'_imagen.'.$ext;
    #BORRAMOS EL ARCHIVO ANTES DE VOLVER A COLOCAR OTRO
    if (!empty($context['biblioteca'][$user_id]['perfil']['archivo'])){
        @unlink($context['biblioteca'][$user_id]['perfil']['archivo']);
    }
    #/BORRAMOS EL ARCHIVO
    move_uploaded_file($tempFile,$targetFile);
    //redireccionamos
    load_redireccion($scripturl . '?route=admin&sa=media');
}