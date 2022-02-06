document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale : 'es',
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
          },
          editable: true,    //para que aparacezca la mano en el cintillo
          

          //MOSTRANDO EL MODAL PARA REGISTRAR UN EVENTO
          dateClick: function(info,jsEvent,view){
            $('#txt_fecha').val();
            $('#registrarVacaciones').modal('show');
          },


          //URL DE EVENTOS REGISTRADOS EN LA BD
          events: "http://192.168.1.13/vacaciones/getAllVacaciones",


          //MOSTRANDO EL MODAL CON LOS DATOS DE LA BD PARA LA ACTUALIZACION
          eventClick: function (info) {
            let eventCalendar = info.event;  
            let new_fecha_inicio = moment(eventCalendar.start).format("YYYY-MM-DD HH:mm:ss");
            let new_fecha_fin =  moment(eventCalendar.end).format("YYYY-MM-DD HH:mm:ss");
            let eventComun = info.event.extendedProps; //CAMPOS EN ESPAÑOL
            $('#txt_id_vacaciones').val(eventCalendar.id);
            $('#txt_titulo').val(eventCalendar.title);
            $('#txt_descripcion').val(eventComun.descripcion);
            $('#txt_trabajador').val(eventComun.nombres);
            $('#txt_color').val(eventCalendar.backgroundColor);
            $('#txt_color_texto').val(eventCalendar.textColor);
            $('#txt_fecha_inicio').val(new_fecha_inicio.replace(" ", "T"));
            $('#txt_fecha_fin').val(new_fecha_fin.replace(" ", "T"));
            $('#modalVacaciones').modal('show');

            console.log('nueva fecha inicio' + new_fecha_inicio.replace(" ", "T"));
            console.log('nueva fecha fin' + new_fecha_fin.replace(" ", "T"));
            console.log('id:'+eventCalendar.id);
            console.log('titulo:'+eventCalendar.title);
            console.log('descripcion:'+eventComun.descripcion);
            console.log('id trabajador:'+eventComun.id_trabajador);
            console.log('nombre trabajador: '+eventComun.nombres);
            console.log('id estado:'+eventComun.id_estado);
            console.log('color:'+eventCalendar.backgroundColor);
            console.log('color texto:'+eventCalendar.textColor);
            console.log('fecha inicio:'+moment(eventCalendar.start).format("YYYY-MM-DD h:mm:ss a"));
            console.log('fecha fin:'+moment(eventCalendar.end).format("YYYY/MM/DD hh:mm"));
          }


        });
        calendar.render();

});