$(document).ready(function(){
        //agregar filas
        $('#AgregarFilas').click(function(){
                var contador = 0;
                $('#campo_repetir_lista').children().each(function (index){
                        contador++;
                        console.log(contador);
                });
                var nuevo_id = contador+1;
                $('#campo_1').clone().appendTo('#campo_repetir_lista').attr('id', 'campo_'+nuevo_id);
                //vemos el nuevo div y trataremos de cambiar su boton de eliminar
                $('#campo_'+nuevo_id).find('button').attr('onclick', 'EliminarFila(\'campo_'+nuevo_id+'\')');
                $('#campo_'+nuevo_id).find('button').removeClass('kt-hidden');
        });

        //boton de marcar como leido
        $('a[name="btnMarcarLeido"]').click(function(evento){
                var id_mensaje = $(this).data('id');
                var estado = $(this).data('status');
                console.log('ini-> marcar como leido id-'+id_mensaje);
                //hacemos ahora el trabajo del login
                accion = scripturl + '?route=admin&sa=markread',
                codigo = "",
                mensaje = "";
                var posting = $.get(accion, { message_id: id_mensaje, status: estado});
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
                        console.log('fin-> marcar como leido id-'+id_mensaje);
                });
        });
});

//textos animados
function textos_animados(){
	"use strict";
        var animateSpan	= jQuery('.arlo_tm_animation_text_word');	
        var textos = [(titulos_aleatorios).split(',')];
        console.log(textos[0]);
        animateSpan.typed({
                strings: textos[0],
                loop: true,
                startDelay: 1e3,
                backDelay: 2e3
        });
}

//eliminamos especificamente las filas de un campo que repetimos
function EliminarFila(campo_id){
        console.log('Eliminando fila...');
        $('#'+campo_id).remove();
}

//notificaciones que emitira el sistema
function Notificaciones(texto, tipoMensaje, reloadPage = false, redireccionar_url = '', tipoAlerta = "success") {
    //usamos el sweetAlertBoostrap --> https://sweetalert2.github.io/#examples
    if (tipoMensaje == 'OK') {
        console.log('tipo de mensaje OK, mostramos la NOTIFICACION OK');
        var btn_clase = 'btn btn-info btn-bold btn-elevate btn-sm';
        if (reloadPage) {
                Swal.fire({
                    title: "Mensaje del Sistema",
                    html: texto,
                    type: tipoAlerta,
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                    customClass: {
                            confirmButton: btn_clase,
                    },
                    buttonsStyling: false,
                    confirmButtonText: 'Aceptar',
                }).then((value)=>{
                    location.reload();
                });
        } else {
                Swal.fire({
                    title: "Mensaje del Sistema",
                    html: texto,
                    type: tipoAlerta,
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                    customClass: {
                            confirmButton: btn_clase,
                    },
                    buttonsStyling: false,
                    confirmButtonText: 'Aceptar',
                }).then((value)=>{
                    if (redireccionar_url != '')
                        window.location.href = redireccionar_url;
                });
        }
    } else {
        Swal.fire({
                html: texto, 
                title: "Mensaje del Sistema", 
                type: "error",
                customClass: {
                        confirmButton: 'btn btn-danger btn-sm',
                },
                buttonsStyling: false,
                confirmButtonText: 'Aceptar',
        });
    }
    /*notificacionTemplate = (codigo == 0) ? "lime" : "ruby";
        $.notific8(
                mensaje, 
                {
                        life: 5000, 
                        theme: notificacionTemplate, 
                        horizontalEdge:'top',
                        verticalEdge: 'right',
                        icon: false
                }
        );
        otro tipo de notificacion seria el toastr
        para cuando esta ok
                toastr.options.escapeHtml = true;
                toastr.success(texto, 'Mensaje del Sistema', {timeOut: 5000})
        para errores
                toastr.options.escapeHtml = true;
                toastr.error(texto, '<b>Mensaje del Sistema</b>', {timeOut: 5000})
        */
}