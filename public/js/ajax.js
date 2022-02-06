window.addEventListener('DOMContentLoaded', () => {


    //LOGEO DE USUARIO VIA AJAX
    $('#btn-login').click(function () {
        let datos = $('#frmAjaxLogin').serialize();
        $.ajax({
            type: 'POST',
            url: 'Login',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'BIENVENID@',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboard"; //CAMBIAR POR "PROFILE"
                    });
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Sus credenciales estan incorrectas!!!!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "index";
                    });
                }
            }
        })
        return false;
    });


    /*ACTULIZAR DATOS VACACIONES VIA AJAX*/
    $('#btn-actualizar-vacaciones').click(function () {
        let datos = $('#frmAjaxActualizarVacaciones').serialize();
        $.ajax({
            type: 'POST',
            url: 'actualizarVacaciones',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Datos Actualizados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboard"; //CAMBIAR POR "PROFILE"
                    });
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Actualizados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboard";
                    });
                }
            }
        })
        return false;
    });


    //GUARDAR DATOS VACACIONES VIA AJAX
    $('#btn-registrar-vacaciones').click(function () {
        let datos = $('#frmAjaxRegistrarVacaciones').serialize();
        $.ajax({
            type: 'POST',
            url: 'insertVacaciones',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Datos Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboard"; //CAMBIAR POR "PROFILE"
                    });
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboard";
                    });
                }
            }
        })
        return false;
    });


    //GUARDAR DATOS AREAS VIA AJAX
    $('#btn-registrar-area').click(function () {
        let datos = $('#frmAjaxRegistrarArea').serialize();
        $.ajax({
            type: 'POST',
            url: 'insertNewArea',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Datos Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Area"; //CAMBIAR POR "PROFILE"
                    });
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Area";
                    });
                }
            }
        })
        return false;
    });



    /*GUARDAR DATOS TRABAJADOR VIA AJAX*/
    $('#btn-registrar-trabajador').click(function () {
        let datos = $('#frmAjaxRegistrarTrabajador').serialize();
        $.ajax({
            type: 'POST',
            url: 'insertTrabajador',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Datos Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Trabajador"; //CAMBIAR POR "PROFILE"
                    });
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Trabajador";
                    });
                }
            }
        })
        return false;
    });



    /*ACTUALIZAR TRABAJADOR VIA AJAX */
    $('#btn-actualizar-trabajador').click(function () {
        let datos = $('#frmAjaxActualizarTrabajador').serialize();
        $.ajax({
            type: 'POST',
            url: 'actualizarTrabajador',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Datos Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Trabajador"; //CAMBIAR POR "PROFILE"
                    });
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Datos No Guardados Correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Trabajador";
                    });
                }
            }
        })
        return false;
    });
});