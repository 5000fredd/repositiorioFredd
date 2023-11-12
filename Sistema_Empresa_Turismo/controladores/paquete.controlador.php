<?php

class ControladorPaquete{

	/*=============================================
	REGISTRO DE PAQUETE
	=============================================*/

	static public function ctrCrearPaquete(){

		if(isset($_POST["nuevoPaquete"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPaquete"])){

				$tabla = "paquetes";

				$datos = array("nombreP" => $_POST["nuevoPaquete"],
							   "actividadesP" => $_POST["nuevoActividades"],
							   "transporte" => $_POST["nuevoTransporte"],
							   "horario_de_atencionP" => $_POST["nuevoHorario"],
							   "precioP" => $_POST["nuevoPrecio"],
							   "cod_agente" => $_POST["nuevoUsuario"],
							   "cod_hotel" => $_POST["nuevoHotel"]);

				$respuesta = ModeloPaquete::mdlIngresarPaquete($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El paquete ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "paquete";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El paquete no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "paquete";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR PAQUETE
	=============================================*/

	static public function ctrMostrarPaquete($item, $valor){

		$tabla = "paquetes";

		$respuesta = ModeloPaquete::MdlMostrarPaquete($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	EDITAR PAQUETE
	=============================================*/

	static public function ctrEditarPaquete(){

		if(isset($_POST["editarPaquete"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPaquete"])){

				$tabla = "paquetes";

				$datos = array("cod_paquetes" => $_POST["cod_paquetes"],
							   "nombreP" => $_POST["editarPaquete"],
							   "actividadesP" => $_POST["editarActividades"],
							   "transporte" => $_POST["editarTransporte"],
							   "horario_de_atencionP" => $_POST["editarHorario"],
							   "precioP" => $_POST["editarPrecio"],
							   "cod_agente" => $_POST["editarUsuario"],
							   "cod_hotel" => $_POST["editarHotel"]);

				$respuesta = ModeloPaquete::mdlEditarPaquete($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El paquete ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "paquete";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre del paquete no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "paquete";

							}
						})

			  	</script>';

			}

		}

	}


	/*=============================================
	BORRAR PAQUETE
	=============================================*/

	static public function ctrBorrarPaquete(){

		if(isset($_GET["cod_paquetes"])){

			$tabla ="paquetes";
			$datos = $_GET["cod_paquetes"];

			$respuesta = ModeloPaquete::mdlBorrarPaquete($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El paquete ha sido borrada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "paquete";

									}
								})

					</script>';
			}
		}
		
	}

}
	



