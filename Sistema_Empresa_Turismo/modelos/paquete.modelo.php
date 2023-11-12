<?php

require_once "conexion.php";

class ModeloPaquete{

	/*=============================================
	MOSTRAR PAQUETE
	=============================================*/

	static public function mdlMostrarPaquete($tabla, $item, $valor){

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
	REGISTRO DE PAQUETE
	=============================================*/

	static public function mdlIngresarPaquete($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombreP, actividadesP, transporte, horario_de_atencionP, precioP, cod_agente, cod_hotel) VALUES (:nombreP, :actividadesP, :transporte, :horario_de_atencionP, :precioP, :cod_agente, :cod_hotel)");

		$stmt->bindParam(":nombreP", $datos["nombreP"], PDO::PARAM_STR);
		$stmt->bindParam(":actividadesP", $datos["actividadesP"], PDO::PARAM_STR);
		$stmt->bindParam(":transporte", $datos["transporte"], PDO::PARAM_STR);
		$stmt->bindParam(":horario_de_atencionP", $datos["horario_de_atencionP"], PDO::PARAM_STR);
		$stmt->bindParam(":precioP", $datos["precioP"], PDO::PARAM_STR);
		$stmt->bindParam(":cod_agente", $datos["cod_agente"], PDO::PARAM_STR);
		$stmt->bindParam(":cod_hotel", $datos["cod_hotel"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR PAQUETE
	=============================================*/

	static public function mdlEditarPaquete($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombreP = :nombreP, actividadesP = :actividadesP, transporte = :transporte, horario_de_atencionP = :horario_de_atencionP, precioP = :precioP, cod_agente = :cod_agente, cod_hotel = :cod_hotel WHERE cod_paquetes = :cod_paquetes");

		$stmt->bindParam(":cod_paquetes", $datos["cod_paquetes"], PDO::PARAM_STR);
		$stmt->bindParam(":nombreP", $datos["nombreP"], PDO::PARAM_STR);
		$stmt->bindParam(":actividadesP", $datos["actividadesP"], PDO::PARAM_STR);
		$stmt->bindParam(":transporte", $datos["transporte"], PDO::PARAM_STR);
		$stmt->bindParam(":horario_de_atencionP", $datos["horario_de_atencionP"], PDO::PARAM_STR);
		$stmt->bindParam(":precioP", $datos["precioP"], PDO::PARAM_STR);
		$stmt->bindParam(":cod_agente", $datos["cod_agente"], PDO::PARAM_STR);
		$stmt->bindParam(":cod_hotel", $datos["cod_hotel"], PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR PAQUETE
	=============================================*/

	static public function mdlBorrarPaquete($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cod_paquetes = :cod_paquetes");

		$stmt -> bindParam(":cod_paquetes", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}


}