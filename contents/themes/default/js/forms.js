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
    //formulario de configuraciones
    $('#formConfiguraciones').submit(function(evento){
        evento.preventDefault();
        console.log('procesando el guardado de las configuraciones realizadas');
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
            if (codigo == 0) {
                Notificaciones(mensaje, 'OK', true);
            } else {
                Notificaciones(mensaje, 'ERROR');
            }
            console.log('finalizamos el guardado de las configuraciones realizadas');
        });
    });

    $('#contact_form').submit(function(evento){
        evento.preventDefault();
        console.log('enviando mensaje...');
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
            if (codigo == 0) {
                Notificaciones(mensaje, 'OK', true);
            } else {
                Notificaciones(mensaje, 'ERROR');
            }
            console.log('finalizamos el envio de mensaje...');
        });
    });

    $('#enviar_mensaje').click(function(e){
        e.preventDefault();
        $('#contact_form').submit();
    });
});