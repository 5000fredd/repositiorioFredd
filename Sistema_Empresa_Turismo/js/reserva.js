/*=============================================
EDITAR RESERVA
=============================================*/

$(".tablas tbody").on("click", "button.btnEditarReserva", function(){

	var cod_reserva = $(this).attr("cod_reserva");

	var datos = new FormData();
    datos.append("cod_reserva", cod_reserva);

    $.ajax({

      url:"ajax/reserva.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	   $("#cod_reserva").val(respuesta["cod_reserva"]);
	       $("#editarInicio").val(respuesta["fechaInicio"]);
	       $("#editarFin").val(respuesta["fechaFin"]);
	       $("#editarUsuario").val(respuesta["cod_usuario"]);

	        var datosPaquete = new FormData();
            datosPaquete.append("cod_paquetes",respuesta["idpaquetes"]);

        $.ajax({

              url:"ajax/paquete.ajax.php",
              method: "POST",
              data: datosPaquete,
              cache: false,
              contentType: false,
              processData: false,
              dataType:"json",
              success:function(respuesta){
                  
                  $("#editarPaquete").val(respuesta["cod_paquetes"]);
                  $("#editarPaquete").html(respuesta["nombreP"]);

              }

          })

	     }

  	})

})

/*=============================================
ELIMINAR RESERVA
=============================================*/
$(".tablas").on("click", ".btnEliminarReserva", function(){

	 var cod_reserva = $(this).attr("cod_reserva");

	 swal({
	 	title: '¿Está seguro de borrar la reserva?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar reserva!'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=reserva&cod_reserva="+cod_reserva;

	 	}

	 })

})

