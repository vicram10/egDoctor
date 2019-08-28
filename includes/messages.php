<?php
if (!defined('eGeek')) die ('Acceso prohibido');
//validacion principal
if (!$user_settings['conectado']){
    load_redireccion();
}

//leemos los mensajes
$mensajes = $db->query(
    "SELECT c.id_mensaje, 
            c.nombre, 
            c.correo, 
            c.mensaje, 
            c.fecha_mensaje,
            c.marcar_leido
    FROM mensajes_recibidos c",
    array()
);
$context['mensajes_recibidos'] = array();
if (count($mensajes) > 0){
    foreach($mensajes as $key => $value){
        $context['mensajes_recibidos'][$value['id_mensaje']] = array(
            'nombre' => $value['nombre'],
            'correo' => $value['correo'],
            'mensaje' => htmlspecialchars($value['mensaje']),
            'fecha' => load_formato_fecha('blog', $value['fecha_mensaje']),
            'leido' => $value['marcar_leido'],
        );
    }
}