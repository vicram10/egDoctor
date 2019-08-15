$(document).ready(function(){
    //formulario de login
    $('#formLogin').submit(function(evento){
            evento.preventDefault();
            console.log('procesando el login del usuario');
            //hacemos ahora el trabajo del login
            var $form = $(this),
            accion = $form.attr('action'),
            codigo = "",
            mensaje = "";
            var posting = $.post(accion, $form.serialize());
            posting.done(function (data) {
            console.log(data);
            var respuesta = JSON.parse(data);
            codigo = respuesta['cod'];
            mensaje = respuesta['mensaje'];
            redireccionar = respuesta['redireccionar'];
            if (codigo == 0) {
                Notificaciones(mensaje, 'OK', false, redireccionar);
            } else {
                Notificaciones(mensaje, 'ERROR');
            }
            console.log('finalizamos la consulta para inicio de sesion');
        });
    });
});