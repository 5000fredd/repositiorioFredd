<?php

require_once "conexion.php";

class ModeloReserva{

	/*=============================================
	MOSTRAR RESERVA
	=============================================*/

	static public function mdlMostrarReserva($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE RESERVA
	=============================================*/

	static public function mdlIngresarReserva($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fechaInicio, fechaFin, cod_usuario, idpaquetes) VALUES (:fechaInicio, :fechaFin, :cod_usuario, :idpaquetes)");

		$stmt->bindParam(":fechaInicio", $datos["fechaInicio"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaFin", $datos["fechaFin"], PDO::PARAM_STR);
		$stmt->bindParam(":cod_usuario", $datos["cod_usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":idpaquetes", $datos["idpaquetes"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR RESERVA
	=============================================*/

	static public function mdlEditarReserva($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fechaInicio = :fechaInicio, fechaFin = :fechaFin, cod_usuario = :cod_usuario, idpaquetes = :idpaquetes WHERE cod_reserva = :cod_reserva");

		$stmt->bindParam(":cod_reserva", $datos["cod_reserva"], PDO::PARAM_INT);
		$stmt->bindParam(":fechaInicio", $datos["fechaInicio"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaFin", $datos["fechaFin"], PDO::PARAM_STR);
		$stmt->bindParam(":cod_usuario", $datos["cod_usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":idpaquetes", $datos["idpaquetes"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR RESERVA
	=============================================*/

	static public function mdlBorrarReserva($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cod_reserva = :cod_reserva");

		$stmt -> bindParam(":cod_reserva", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}


}