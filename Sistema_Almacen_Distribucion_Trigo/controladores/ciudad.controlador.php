<?php

class ControladorCiudad{

	/*=============================================
	CREAR CIUDAD
	=============================================*/

	static public function ctrCrearCiudad(){

		if(isset($_POST["nueCiudad"])){

			if( $_POST["nueCiudad"]){

				$tabla = "ciudad";

				$token = crypt($_POST["idCiudad"]);

				$datos = array("token" => $token,
							   "ciuda" => $_POST["nueCiudad"],
							   "idUsuario" => $_POST["nueUsuario"],
							   "destino" => $_POST["nueDestino"],
							   "vehiculo" => $_POST["nueVehiculo"],
							   "placa" => $_POST["nuePlaca"], 
							   "conductor" => $_POST["nueConductor"],
							   "ci" => $_POST["nueCi"],
							   "procedencia" => $_POST["nueProcedencia"],
							   "porte" => $_POST["nuePorte"],
							   "dim" => $_POST["nueDim"],
							   "proveedor" => $_POST["nueProveedor"],
							   "fechaS" => $_POST["nueFechaS"],
							   "precinto" => $_POST["nuePrecinto"],
							   "factura" => $_POST["nueFactura"],
							   "certificado" => $_POST["nueCertificado"],
							   "producto" => $_POST["nueProducto"],
							   "bruto" => $_POST["nueBruto"],
							   "tara" => $_POST["nueTara"],
							   "netoK" => $_POST["nueNetoK"],
							   "netoQ" => $_POST["nueNetoQ"],
							   "netoT" => $_POST["nueNetoT"],
							   "humedad" => $_POST["nueHumedad"],
							   "impureza" => $_POST["nueImpureza"],
							   "germinado" => $_POST["nueGerminado"],
							   "negra" => $_POST["nueNegra"],
							   "verde" => $_POST["nueVerde"],
							   "picado" => $_POST["nuePicado"],
							   "partido" => $_POST["nuePartido"],
							   "ph" => $_POST["nuePh"],
							   "observa" => $_POST["nueObserva"]);

				$respuesta = ModeloCiudad::mdlIngresarCiudad($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El acta ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "ciudad";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La acta no puede ir con los campos vacios o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "ciudad";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR CIUDAD
	=============================================*/

	static public function ctrMostrarCiudad($item, $valor){

		$tabla = "ciudad";

		$respuesta = ModeloCiudad::mdlMostrarCiudad($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	EDITAR CIUDAD
	=============================================*/

	static public function ctrEditarCiudad(){

		if(isset($_POST["ediCiudad"])){

			if( $_POST["ediCiudad"]){

				$tabla = "ciudad";

				// $token = md5($_POST["idCiudad"]);
				$token = crypt($_POST["idCiudad"]);
				
				$datos = array(
							   "idCiudad" => $_POST["idCiudad"],
							   "token" => $_POST["token"],
							   "ciuda" => $_POST["ediCiudad"],
							   "idUsuario" => $_POST["ediUsuario"],
							   "destino" => $_POST["ediDestino"],
							   "vehiculo" => $_POST["ediVehiculo"],
							   "placa" => $_POST["ediPlaca"],
							   "conductor" => $_POST["ediConductor"],
							   "ci" => $_POST["ediCi"],
							   "procedencia" => $_POST["ediProcedencia"],
							   "porte" => $_POST["ediPorte"],
							   "dim" => $_POST["ediDim"],
							   "proveedor" => $_POST["ediProveedor"],
							   "fechaS" => $_POST["ediFechaS"],
							   "precinto" => $_POST["ediPrecinto"],
							   "factura" => $_POST["ediFactura"],
							   "certificado" => $_POST["ediCertificado"],
							   "producto" => $_POST["ediProducto"],
							   "bruto" => $_POST["ediBruto"],
							   "tara" => $_POST["ediTara"],
							   "netoK" => $_POST["ediNetoK"],
							   "netoQ" => $_POST["ediNetoQ"],
							   "netoT" => $_POST["ediNetoT"],
							   "humedad" => $_POST["ediHumedad"],
							   "impureza" => $_POST["ediImpureza"],
							   "germinado" => $_POST["ediGerminado"],
							   "negra" => $_POST["ediNegra"],
							   "verde" => $_POST["ediVerde"],
							   "picado" => $_POST["ediPicado"],
							   "partido" => $_POST["ediPartido"],
							   "ph" => $_POST["ediPh"],
							   "observa" => $_POST["ediObserva"]);
								
				$respuesta = ModeloCiudad::mdlEditarCiudad($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El acta ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "ciudad";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El acta no puede ir con los campos vacios o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "ciudad";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	RANGO FECHAS
	=============================================*/	

	static public function ctrRangoFechasCiudad($fechaInicial, $fechaFinal){

		$tabla ="ciudad";

		$respuesta =ModeloCiudad::mdlRangoFechasCiudad($tabla, $fechaInicial, $fechaFinal);

		return $respuesta;

	}

	/*=============================================
	REPORTES FECHAS
	=============================================*/	

	// static public function ctrReporteFechasCiudad($fechaIn, $fechaFi){

	// 	$tabla ="ciudad";

	// 	$respuesta =ModeloCiudad::mdlReporteFechasCiudad($tabla, $fechaIn, $fechaFi);

	// 	return $respuesta;

	// }

}