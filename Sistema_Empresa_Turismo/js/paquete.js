/*=============================================
EDITAR PAQUETE
=============================================*/

// $(".tablas").on("click", ".btnEditarPaquete", function(){

$(".tablas tbody").on("click", "button.btnEditarPaquete", function(){

	var cod_paquetes = $(this).attr("cod_paquetes");

	var datos = new FormData();
    datos.append("cod_paquetes", cod_paquetes);

    $.ajax({

      url:"ajax/paquete.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#cod_paquetes").val(respuesta["cod_paquetes"]);
	       $("#editarPaquete").val(respuesta["nombreP"]);
	       $("#editarActividades").val(respuesta["actividadesP"]);
	       $("#editarTransporte").val(respuesta["transporte"]);
	       $("#editarHorario").val(respuesta["horario_de_atencionP"]);
	       $("#editarPrecio").val(respuesta["precioP"]);
	       $("#editarUsuario").val(respuesta["cod_agente"]);

	        var datosHotel = new FormData();
          datosHotel.append("idhotel",respuesta["cod_hotel"]);

        $.ajax({

              url:"ajax/hotel.ajax.php",
              method: "POST",
              data: datosHotel,
              cache: false,
              contentType: false,
              processData: false,
              dataType:"json",
              success:function(respuesta){
                  
                  $("#editarHotel").val(respuesta["idhotel"]);
                  $("#editarHotel").html(respuesta["nombreH"]);

              }

          })

	     }

  	})

})

/*=============================================
ELIMINAR PAQUETE
=============================================*/
$(".tablas").on("click", ".btnEliminarPaquete", function(){

	 var cod_paquetes = $(this).attr("cod_paquetes");

	 swal({
	 	title: '¿Está seguro de borrar el paquete?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar paquete!'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=paquete&cod_paquetes="+cod_paquetes;

	 	}

	 })

})

