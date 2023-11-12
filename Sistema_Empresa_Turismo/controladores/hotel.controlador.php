<?php

class ControladorHotel{

	/*=============================================
	REGISTRO DE HOTEL
	=============================================*/

	static public function ctrCrearHotel(){

		if(isset($_POST["nuevoHotel"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoHotel"])){

				$tabla = "hotel";

				$datos = array("nombreH" => $_POST["nuevoHotel"],
							   "servicioH" => $_POST["nuevoServicio"],
							   "tipoH" => $_POST["nuevoTipo"],
							   "ubicacionH" => $_POST["nuevoUbicacion"],
							   "tipo_de_habitacionH" => $_POST["nuevoHabitacion"]);

				$respuesta = ModeloHotel::mdlIngresarHotel($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El hotel ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "hotel";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El hotel no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "hotel";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR HOTEL
	=============================================*/

	static public function ctrMostrarHotel($item, $valor){

		$tabla = "hotel";

		$respuesta = ModeloHotel::MdlMostrarHotel($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR HOTEL
	=============================================*/

	static public function ctrEditarHotel(){

		if(isset($_POST["editarHotel"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarHotel"])){

				$tabla = "hotel";

				$datos = array("idhotel" => $_POST["idhotel"],
							   "nombreH" => $_POST["editarHotel"],
							   "servicioH" => $_POST["editarServicio"],
							   "tipoH" => $_POST["editarTipo"],
							   "ubicacionH" => $_POST["editarUbicacion"],
							   "tipo_de_habitacionH" => $_POST["editarHabitacion"]);

				$respuesta = ModeloHotel::mdlEditarHotel($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El hotel ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "hotel";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "hotel";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR HOTEL
	=============================================*/

	static public function ctrBorrarHotel(){

		if(isset($_GET["idhotel"])){

			$tabla ="hotel";
			$datos = $_GET["idhotel"];

			$respuesta = ModeloHotel::mdlBorrarHotel($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El hotel ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "hotel";

									}
								})

					</script>';
			}
		}
		
	}

}
	



