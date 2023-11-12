<?php

class ControladorReserva{

	/*=============================================
	REGISTRO DE RESERVA
	=============================================*/

	static public function ctrCrearReserva(){

		if(isset($_POST["nuevoInicio"])){

			if($_POST["nuevoInicio"]){

				$tabla = "reserva";

				$datos = array("fechaInicio" => $_POST["nuevoInicio"],
							   "fechaFin" => $_POST["nuevoFin"],
							   "cod_usuario" => $_POST["nuevoUsuario"],
							   "idpaquetes" => $_POST["nuevoPaquete"]);

				$respuesta = ModeloReserva::mdlIngresarReserva($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡La reserva ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "reserva";

						}

					});
				

					</script>';


				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La reserva no puede ir con los campos vacios!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "reserva";

							}
						})

			  	</script>';

			}	

		}


	}

	/*=============================================
	MOSTRAR RESERVA
	=============================================*/

	static public function ctrMostrarReserva($item, $valor){

		$tabla = "reserva";

		$respuesta = ModeloReserva::MdlMostrarReserva($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR RESERVA
	=============================================*/

	static public function ctrEditarReserva(){

		if(isset($_POST["editarInicio"])){

			if($_POST["editarInicio"]){

				$tabla = "reserva";

				$datos = array("cod_reserva" => $_POST["cod_reserva"],
							   "fechaInicio" => $_POST["editarInicio"],
							   "fechaFin" => $_POST["editarFin"],
							   "cod_usuario" => $_POST["editarUsuario"],
							   "idpaquetes" => $_POST["editarPaquete"]);

				$respuesta = ModeloReserva::mdlEditarReserva($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La reserva ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "reserva";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La reserva no puede ir con los campos vacios!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "reserva";

							}
						})

			  	</script>';

			}	

		}

	}


	/*=============================================
	BORRAR RESERVA
	=============================================*/

	static public function ctrBorrarReserva(){

		if(isset($_GET["cod_reserva"])){

			$tabla ="reserva";
			$datos = $_GET["cod_reserva"];

			$respuesta = ModeloReserva::mdlBorrarReserva($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "La reserva ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "reserva";

									}
								})

					</script>';
			}
		}
		
	}

}
	



