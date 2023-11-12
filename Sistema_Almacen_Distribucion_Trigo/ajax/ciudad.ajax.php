<?php

require_once "../controladores/ciudad.controlador.php";
require_once "../modelos/ciudad.modelo.php";

class AjaxCiudad{

	/*=============================================
	EDITAR CIUDAD
	=============================================*/	

	public $idCiudad;

	public function ajaxEditarCiudad(){

		$item = "idCiudad";
		$valor = $this->idCiudad;

		$respuesta = ControladorCiudad::ctrMostrarCiudad($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CIUDAD
=============================================*/	
if(isset($_POST["idCiudad"])){

	$ciudad = new AjaxCiudad();
	$ciudad -> idCiudad = $_POST["idCiudad"];
	$ciudad -> ajaxEditarCiudad();
}
