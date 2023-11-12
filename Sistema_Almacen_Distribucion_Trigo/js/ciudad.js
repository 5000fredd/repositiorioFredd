/*=============================================
VARIABLE LOCAL STORAGE
=============================================*/

if(localStorage.getItem("capturarRango") != null){

  $("#daterange-btn span").html(localStorage.getItem("capturarRango"));

}else{

  $("#daterange-btn span").html('<i class="fa fa-calendar"></i> Rango de fecha');

}

/*=============================================
CONVERTIDOR EN MAYUSCULAS EN LOS CAMPOS
=============================================*/

function mayus(e) {
    e.value = e.value.toUpperCase();
}

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

           $("#token").val(respuesta["token"]);

           $("#ediCiudad").html(respuesta["ciuda"]);
           $("#ediCiudad").val(respuesta["ciuda"]);

           $("#ediUsuario").val(respuesta["idUsuario"]);

           $("#ediDestino").html(respuesta["destino"]);
           $("#ediDestino").val(respuesta["destino"]);

           $("#ediVehiculo").val(respuesta["vehiculo"]);

           $("#ediPlaca").val(respuesta["placa"]);

           $("#ediConductor").val(respuesta["conductor"]);

           $("#ediCi").val(respuesta["ci"]);

           $("#ediProcedencia").val(respuesta["procedencia"]);

           $("#ediPorte").val(respuesta["porte"]);

           $("#ediDim").val(respuesta["dim"]);

           $("#ediProveedor").html(respuesta["proveedor"]);
           $("#ediProveedor").val(respuesta["proveedor"]);

           $("#ediFechaS").val(respuesta["fechaS"]);

           $("#ediPrecinto").val(respuesta["precinto"]);

           $("#ediFactura").val(respuesta["factura"]);

           $("#ediCertificado").val(respuesta["certificado"]);

           $("#ediProducto").html(respuesta["producto"]);
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
IMPRIMIR ACTA 1
=============================================*/

$(".tablas").on("click", ".btnImprimirActa", function(){

     var token = $(this).attr("token");

     window.open("extensiones/tcpdf/pdf/imprimirActa.php?token="+token, "_blank");

})

/*=============================================
IMPRIMIR ACTA 2 
=============================================*/

$(".tablas").on("click", ".btnImprimir", function(){

     var token = $(this).attr("token");

     window.open("extensiones/tcpdf/pdf/imprimir.php?token="+token, "_blank");

})

/*=============================================
IMPRIMIR ACTA DEFINITIVA 3
=============================================*/

$(".tablas").on("click", ".btnImprimirRecepcionD", function(){

     var token = $(this).attr("token");

     window.open("extensiones/tcpdf/pdf/recepcionDefinitivo.php?token="+token, "_blank");

})

/*=============================================
IMPRIMIR ACTA DEFINITIVA 4 
=============================================*/

$(".tablas").on("click", ".btnImprimirEntregaD", function(){

     var token = $(this).attr("token");

     window.open("extensiones/tcpdf/pdf/entregaDefinitivo.php?token="+token, "_blank");

})

/*=============================================
IMPRIMIR REPORTE POR FECHAS 
=============================================*/

// $(".tablas").on("click", ".btnreporteFecha", function(){

//      var fechaIn = $(this).attr("fechaIn");
//      var fechaFi = $(this).attr("fechaFi");

//      window.open("extensiones/tcpdf/pdf/reporte.php?fechaIn="+fechaIn+"fechaFi"+fechaFi, "_blank");

// })

/*=============================================
CONVERTIR DE PESO 
=============================================*/

function formula()
{  

/*=============================================
CONVERTIR DE PESO BRUTO kg A TARA kg
=============================================*/ 

  // const $total = document.getElementById('tara');

  // let subtotal = 0;

  // [ ...document.getElementsByClassName( "bruto" ) ].forEach( function ( element ) {
  //   if(element.value !== '') {
  //     subtotal = parseFloat(element.value) / 1000;
  //   }
  // });
  // $total.value = subtotal;

/*=============================================
CONVERTIR DE PESO BRUTO kg A NETO kg
=============================================*/

  // const $total2 = document.getElementById('netoK');

  // let subtotal2 = 0;

  // [ ...document.getElementsByClassName( "bruto" ) ].forEach( function ( element ) {

  //   if(element.value !== '') {
  //     subtotal2 = parseFloat(element.value) / 1000;
  //   }
  // });
  // $total2.value = subtotal2;

/*=============================================
CONVERTIR DE PESO BRUTO kg A NETO QQ
=============================================*/

  const $total3 = document.getElementById('netoQ');

  let subtotal3 = 0;

  [ ...document.getElementsByClassName( "netoK" ) ].forEach( function ( element ) {
    if(element.value !== '') {
      subtotal3 = parseFloat(element.value) / 100;
    }
  });
  $total3.value = subtotal3;

/*=============================================
CONVERTIR DE PESO BRUTO kg A NETO TM
=============================================*/

  const $total4 = document.getElementById('netoT');

  let subtotal4 = 0;

  [ ...document.getElementsByClassName( "netoK" ) ].forEach( function ( element ) {
    if(element.value !== '') {
      subtotal4 = parseFloat(element.value) / 1000;
    }
  });
  $total4.value = subtotal4;

}

/*=============================================
RANGO DE FECHAS
=============================================*/

$('#daterange-btn').daterangepicker(
  {
    ranges   : {
      // 'Hoy'  : [moment(), moment()],
      'Ayer'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Últimos 7 días' : [moment().subtract(6, 'days'), moment()],
      'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
      'Este mes'  : [moment().startOf('month'), moment().endOf('month')],
      'Último mes'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment(),
    endDate  : moment()
  },
  function (start, end) {
    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

    var fechaInicial = start.format('YYYY-MM-DD');

    var fechaFinal = end.format('YYYY-MM-DD');

    var capturarRango = $("#daterange-btn span").html();
   
    localStorage.setItem("capturarRango", capturarRango);

    window.location = "index.php?ruta=listado&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;

  }

)

/*=============================================
CANCELAR RANGO DE FECHAS
=============================================*/

$(".daterangepicker.opensleft .range_inputs .cancelBtn").on("click", function(){

  localStorage.removeItem("capturarRango");
  localStorage.clear();
  window.location = "listado";

})  

/*=============================================
CAPTURAR HOY
=============================================*/

$(".daterangepicker.opensleft .ranges li").on("click", function(){

  var textoHoy = $(this).attr("data-range-key");

  if(textoHoy == "Hoy"){

    var d = new Date();
    
    var dia = d.getDate();
    var mes = d.getMonth()+1;
    var año = d.getFullYear();

    if(mes < 10){

      var fechaInicial = año+"-0"+mes+"-"+dia;
      var fechaFinal = año+"-0"+mes+"-"+dia;

    }else if(dia < 10){

      var fechaInicial = año+"-"+mes+"-0"+dia;
      var fechaFinal = año+"-"+mes+"-0"+dia;

    }else if(mes <= 10 && dia <= 10){

      var fechaInicial = año+"-0"+mes+"-0"+dia;
      var fechaFinal = año+"-0"+mes+"-0"+dia;

    }else{

      var fechaInicial = año+"-"+mes+"-"+dia;
      var fechaFinal = año+"-"+mes+"-"+dia;

    } 

      localStorage.setItem("capturarRango", "Hoy");

      window.location = "index.php?ruta=listado&fechaInicial="+fechaInicial+"&fechaFinal="+fechaFinal;

  }

})

