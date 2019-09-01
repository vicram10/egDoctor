<?php
if (!defined('eGeek')) die ('Acceso prohibido');

//ok ya enviamos para subir la imagen
if (!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = DirContent . '/upload/';
    $targetFile =  $targetPath. $_FILES['file']['name'];
    move_uploaded_file($tempFile,$targetFile);
}