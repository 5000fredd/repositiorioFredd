/*=============================================
EDITAR CIUDAD
=============================================*/

$(".tablas").on("click", ".btnEditarCiudad", function(){

	var idCiudad = $(this).attr("idCiudad");
	
	var datos = new FormData();
    datos.append("idCiudad", idCiudad);

     $.ajax({

      url:"ajax/ciudad.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
          
           $("#idCiudad").val(respuesta["idCiudad"]);

           $("#ediCiudad").val(respuesta["ciuda"]);

           $("#ediDestino").val(respuesta["destino"]);

           $("#ediVehiculo").val(respuesta["vehiculo"]);

           $("#ediPlaca").val(respuesta["placa"]);

           $("#ediConductor").val(respuesta["conductor"]);

           $("#ediCi").val(respuesta["ci"]);

           $("#ediProcedencia").val(respuesta["procedencia"]);

           $("#ediPorte").val(respuesta["porte"]);

           $("#ediDim").val(respuesta["dim"]);

           $("#ediProveedor").val(respuesta["proveedor"]);

           $("#ediFechaS").val(respuesta["fechaS"]);

           $("#ediPrecinto").val(respuesta["precinto"]);

           $("#ediFactura").val(respuesta["factura"]);

           $("#ediCertificado").val(respuesta["certificado"]);

           $("#ediProducto").val(respuesta["producto"]);

           $("#ediBruto").val(respuesta["bruto"]);

           $("#ediTara").val(respuesta["tara"]);

           $("#ediNetoK").val(respuesta["netoK"]);

           $("#ediNetoQ").val(respuesta["netoQ"]);

           $("#ediNetoT").val(respuesta["netoT"]);

           $("#ediHumedad").val(respuesta["humedad"]);

           $("#ediImpureza").val(respuesta["impureza"]);

           $("#ediGerminado").val(respuesta["germinado"]);

           $("#ediNegra").val(respuesta["negra"]);

           $("#ediVerde").val(respuesta["verde"]);

           $("#ediPicado").val(respuesta["picado"]);

           $("#ediPartido").val(respuesta["partido"]);

           $("#ediPh").val(respuesta["ph"]);

           $("#ediObserva").val(respuesta["observa"]);

      }

  })

})

/*=============================================
IMPRIMIR 
=============================================*/

$(".tablas").on("click", ".btnImprimir", function(){

     var idCiudad = $(this).attr("idCiudad");

     window.open("extensiones/tcpdf/pdf/imprimirActa.php?idCiudad="+idCiudad, "_blank");

})
