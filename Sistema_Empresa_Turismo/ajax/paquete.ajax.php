<?php

require_once "../controladores/paquete.controlador.php";
require_once "../modelos/paquete.modelo.php";

class AjaxPaquete{

	/*=============================================
	EDITAR PAQUETE
	=============================================*/	

	public $cod_paquetes;

	public function ajaxEditarPaquete(){

		$item = "cod_paquetes";
		$valor = $this->cod_paquetes;

		$respuesta = ControladorPaquete::ctrMostrarPaquete($item, $valor);

		echo json_encode($respuesta);

	}


}

/*=============================================
EDITAR PAQUETE
=============================================*/
if(isset($_POST["cod_paquetes"])){

	$editar = new AjaxPaquete();
	$editar -> cod_paquetes = $_POST["cod_paquetes"];
	$editar -> ajaxEditarPaquete();

}