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
    FROM mensajes_recibidos c
    ORDER BY c.marcar_leido ASC, c.id_mensaje",
    array(
        ':leido' => 'NO',
    )
);
$context['mensajes_leidos'] = false;
$context['mensajes_no_leidos'] = false;
$context['mensajes_recibidos'] = array();
if (count($mensajes) > 0){
    foreach($mensajes as $key => $value){
        $context['mensajes_recibidos'][$value['id_mensaje']] = array(
            'nombre' => $value['nombre'],
            'correo' => '<a href="mailto:'.$value['correo'].'"><i class="flaticon-multimedia btn-lg" data-skin="dark" data-toggle="kt-tooltip" data-placement="right" title="'. $value['correo'] .'"></i></a>',
            'mensaje' => htmlspecialchars($value['mensaje']),
            'fecha' => load_formato_fecha('blog', $value['fecha_mensaje']),
            'leido' => $value['marcar_leido'],
        );
        if ($value['marcar_leido'] == 'SI')
            $context['mensajes_leidos'] = true;
        if ($value['marcar_leido'] == 'NO')
            $context['mensajes_no_leidos'] = true;
    }
}