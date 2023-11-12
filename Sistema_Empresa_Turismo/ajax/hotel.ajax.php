<?php

require_once "../controladores/hotel.controlador.php";
require_once "../modelos/hotel.modelo.php";

class AjaxHotel{

	/*=============================================
	EDITAR HOTEL
	=============================================*/	

	public $idhotel;

	public function ajaxEditarHotel(){

		$item = "idhotel";
		$valor = $this->idhotel;

		$respuesta = ControladorHotel::ctrMostrarHotel($item, $valor);

		echo json_encode($respuesta);

	}


}

/*=============================================
EDITAR HOTEL
=============================================*/
if(isset($_POST["idhotel"])){

	$editar = new AjaxHotel();
	$editar -> idhotel = $_POST["idhotel"];
	$editar -> ajaxEditarHotel();

}