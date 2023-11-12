<?php

require_once "conexion.php";

class ModeloHotel{

	/*=============================================
	MOSTRAR HOTEL
	=============================================*/

	static public function mdlMostrarHotel($tabla, $item, $valor){

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
	REGISTRO DE HOTEL
	=============================================*/

	static public function mdlIngresarHotel($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombreH, servicioH, tipoH, ubicacionH, tipo_de_habitacionH) VALUES (:nombreH, :servicioH, :tipoH, :ubicacionH, :tipo_de_habitacionH)");

		$stmt->bindParam(":nombreH", $datos["nombreH"], PDO::PARAM_STR);
		$stmt->bindParam(":servicioH", $datos["servicioH"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoH", $datos["tipoH"], PDO::PARAM_STR);
		$stmt->bindParam(":ubicacionH", $datos["ubicacionH"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_de_habitacionH", $datos["tipo_de_habitacionH"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR HOTEL
	=============================================*/

	static public function mdlEditarHotel($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreH = :nombreH, servicioH = :servicioH, tipoH = :tipoH, ubicacionH = :ubicacionH, tipo_de_habitacionH = :tipo_de_habitacionH WHERE idhotel = :idhotel");

		$stmt->bindParam(":idhotel", $datos["idhotel"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreH", $datos["nombreH"], PDO::PARAM_STR);
		$stmt->bindParam(":servicioH", $datos["servicioH"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoH", $datos["tipoH"], PDO::PARAM_STR);
		$stmt->bindParam(":ubicacionH", $datos["ubicacionH"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_de_habitacionH", $datos["tipo_de_habitacionH"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR HOTEL
	=============================================*/

	static public function mdlBorrarHotel($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idhotel = :idhotel");

		$stmt -> bindParam(":idhotel", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}