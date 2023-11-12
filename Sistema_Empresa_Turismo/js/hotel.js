/*=============================================
EDITAR HOTEL
=============================================*/

$(".tablas").on("click", ".btnEditarHotel", function(){

	var idhotel = $(this).attr("idhotel");

	var datos = new FormData();
    datos.append("idhotel", idhotel);

    $.ajax({

      url:"ajax/hotel.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#idhotel").val(respuesta["idhotel"]);
	       $("#editarHotel").val(respuesta["nombreH"]);
	       $("#editarServicio").val(respuesta["servicioH"]);
	       $("#editarTipo").val(respuesta["tipoH"]);
	       $("#editarUbicacion").val(respuesta["ubicacionH"]);
	       $("#editarHabitacion").html(respuesta["tipo_de_habitacionH"]);
	       $("#editarHabitacion").val(respuesta["tipo_de_habitacionH"]);

	     }

  	})

})

/*=============================================
ELIMINAR HOTEL
=============================================*/
$(".tablas").on("click", ".btnEliminarHotel", function(){

	 var idhotel = $(this).attr("idhotel");

	 swal({
	 	title: '¿Está seguro de borrar el hotel?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar hotel!'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=hotel&idhotel="+idhotel;

	 	}

	 })

})