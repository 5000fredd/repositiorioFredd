<?php

require_once "../controladores/reserva.controlador.php";
require_once "../modelos/reserva.modelo.php";

class AjaxReserva{

	/*=============================================
	EDITAR RESERVA
	=============================================*/	

	public $cod_reserva;

	public function ajaxEditarReserva(){

		$item = "cod_reserva";
		$valor = $this->cod_reserva;

		$respuesta = ControladorReserva::ctrMostrarReserva($item, $valor);

		echo json_encode($respuesta);

	}


}

/*=============================================
EDITAR RESERVA
=============================================*/
if(isset($_POST["cod_reserva"])){

	$editar = new AjaxReserva();
	$editar -> cod_reserva = $_POST["cod_reserva"];
	$editar -> ajaxEditarReserva();

}