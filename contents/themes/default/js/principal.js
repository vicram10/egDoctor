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