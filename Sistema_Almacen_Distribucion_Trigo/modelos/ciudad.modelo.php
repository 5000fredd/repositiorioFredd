<?php

require_once "conexion.php";

class ModeloCiudad{

	/*=============================================
	REGISTRO DE CIUDAD
	=============================================*/
	
	static public function mdlIngresarCiudad($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(token,ciuda, idUsuario, destino, vehiculo, placa, conductor, ci, procedencia, porte, dim, proveedor, fechaS, precinto, factura, certificado, producto, bruto, tara, netoK, netoQ, netoT, humedad, impureza, germinado, negra, verde, picado, partido, ph, observa) VALUES (:token,:ciuda, :idUsuario, :destino, :vehiculo, :placa, :conductor, :ci, :procedencia, :porte, :dim, :proveedor, :fechaS, :precinto, :factura, :certificado, :producto, :bruto, :tara, :netoK, :netoQ, :netoT, :humedad, :impureza, :germinado, :negra, :verde, :picado, :partido, :ph, :observa)");

		$stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
		$stmt->bindParam(":ciuda", $datos["ciuda"], PDO::PARAM_STR);
		$stmt->bindParam(":idUsuario", $datos["idUsuario"], PDO::PARAM_INT);
		$stmt->bindParam(":destino", $datos["destino"], PDO::PARAM_STR);
		$stmt->bindParam(":vehiculo", $datos["vehiculo"], PDO::PARAM_STR);
		$stmt->bindParam(":placa", $datos["placa"], PDO::PARAM_STR);
		$stmt->bindParam(":conductor", $datos["conductor"], PDO::PARAM_STR);
		$stmt->bindParam(":ci", $datos["ci"], PDO::PARAM_STR);
		$stmt->bindParam(":procedencia", $datos["procedencia"], PDO::PARAM_STR);
		$stmt->bindParam(":porte", $datos["porte"], PDO::PARAM_STR);
		$stmt->bindParam(":dim", $datos["dim"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor", $datos["proveedor"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaS", $datos["fechaS"], PDO::PARAM_STR);
		$stmt->bindParam(":precinto", $datos["precinto"], PDO::PARAM_STR);
		$stmt->bindParam(":factura", $datos["factura"], PDO::PARAM_STR);
		$stmt->bindParam(":certificado", $datos["certificado"], PDO::PARAM_STR);
		$stmt->bindParam(":producto", $datos["producto"], PDO::PARAM_STR);
		$stmt->bindParam(":bruto", $datos["bruto"], PDO::PARAM_STR);
		$stmt->bindParam(":tara", $datos["tara"], PDO::PARAM_STR);
		$stmt->bindParam(":netoK", $datos["netoK"], PDO::PARAM_STR);
		$stmt->bindParam(":netoQ", $datos["netoQ"], PDO::PARAM_STR);
		$stmt->bindParam(":netoT", $datos["netoT"], PDO::PARAM_STR);
		$stmt->bindParam(":humedad", $datos["humedad"], PDO::PARAM_STR);
		$stmt->bindParam(":impureza", $datos["impureza"], PDO::PARAM_STR);
		$stmt->bindParam(":germinado", $datos["germinado"], PDO::PARAM_STR);
		$stmt->bindParam(":negra", $datos["negra"], PDO::PARAM_STR);
		$stmt->bindParam(":verde", $datos["verde"], PDO::PARAM_STR);
		$stmt->bindParam(":picado", $datos["picado"], PDO::PARAM_STR);
		$stmt->bindParam(":partido", $datos["partido"], PDO::PARAM_STR);
		$stmt->bindParam(":ph", $datos["ph"], PDO::PARAM_STR);
		$stmt->bindParam(":observa", $datos["observa"], PDO::PARAM_STR);

	
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR CIUDAD
	=============================================*/

	static public function mdlMostrarCiudad($tabla, $item, $valor){

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
	EDITAR DE CIUDAD
	=============================================*/
	
	static public function mdlEditarCiudad($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET token = :token, ciuda = :ciuda, idUsuario = :idUsuario, destino = :destino, vehiculo = :vehiculo, placa = :placa, conductor = :conductor, ci = :ci, procedencia = :procedencia, porte = :porte, dim = :dim, proveedor = :proveedor, fechaS = :fechaS, precinto = :precinto, factura = :factura, certificado = :certificado, producto = :producto, bruto = :bruto, tara = :tara, netoK = :netoK, netoQ = :netoQ, netoT = :netoT, humedad = :humedad, impureza = :impureza, germinado = :germinado, negra = :negra, verde = :verde, picado = :picado, partido = :partido, ph = :ph, observa = :observa WHERE idCiudad = :idCiudad");

		$stmt -> bindParam(":idCiudad", $datos["idCiudad"], PDO::PARAM_INT);
		$stmt -> bindParam(":token", $datos["token"], PDO::PARAM_STR);
		$stmt -> bindParam(":ciuda", $datos["ciuda"], PDO::PARAM_STR);
		$stmt -> bindParam(":idUsuario", $datos["idUsuario"], PDO::PARAM_INT);
		$stmt -> bindParam(":destino", $datos["destino"], PDO::PARAM_STR);
		$stmt -> bindParam(":vehiculo", $datos["vehiculo"], PDO::PARAM_STR);
		$stmt -> bindParam(":placa", $datos["placa"], PDO::PARAM_STR);
		$stmt -> bindParam(":conductor", $datos["conductor"], PDO::PARAM_STR);
		$stmt -> bindParam(":ci", $datos["ci"], PDO::PARAM_STR);
		$stmt->bindParam(":procedencia", $datos["procedencia"], PDO::PARAM_STR);
		$stmt->bindParam(":porte", $datos["porte"], PDO::PARAM_STR);
		$stmt->bindParam(":dim", $datos["dim"], PDO::PARAM_STR);
		$stmt->bindParam(":proveedor", $datos["proveedor"], PDO::PARAM_STR);
		$stmt->bindParam(":fechaS", $datos["fechaS"], PDO::PARAM_STR);
		$stmt->bindParam(":precinto", $datos["precinto"], PDO::PARAM_STR);
		$stmt->bindParam(":factura", $datos["factura"], PDO::PARAM_STR);
		$stmt->bindParam(":certificado", $datos["certificado"], PDO::PARAM_STR);
		$stmt->bindParam(":producto", $datos["producto"], PDO::PARAM_STR);
		$stmt->bindParam(":bruto", $datos["bruto"], PDO::PARAM_STR);
		$stmt->bindParam(":tara", $datos["tara"], PDO::PARAM_STR);
		$stmt->bindParam(":netoK", $datos["netoK"], PDO::PARAM_STR);
		$stmt->bindParam(":netoQ", $datos["netoQ"], PDO::PARAM_STR);
		$stmt->bindParam(":netoT", $datos["netoT"], PDO::PARAM_STR);
		$stmt->bindParam(":humedad", $datos["humedad"], PDO::PARAM_STR);
		$stmt->bindParam(":impureza", $datos["impureza"], PDO::PARAM_STR);
		$stmt->bindParam(":germinado", $datos["germinado"], PDO::PARAM_STR);
		$stmt->bindParam(":negra", $datos["negra"], PDO::PARAM_STR);
		$stmt->bindParam(":verde", $datos["verde"], PDO::PARAM_STR);
		$stmt->bindParam(":picado", $datos["picado"], PDO::PARAM_STR);
		$stmt->bindParam(":partido", $datos["partido"], PDO::PARAM_STR);
		$stmt->bindParam(":ph", $datos["ph"], PDO::PARAM_STR);
		$stmt->bindParam(":observa", $datos["observa"], PDO::PARAM_STR);
		

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	RANGO DE FECHAS 
	=============================================*/

	static public function mdlRangoFechasCiudad($tabla, $fechaInicial, $fechaFinal){

		if($fechaInicial == null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY idCiudad ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();	


		}else if($fechaInicial == $fechaFinal){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fechaH like '%$fechaFinal%'");

			$stmt -> bindParam(":fechaH", $fechaFinal, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$fechaActual = new DateTime();
			$fechaActual ->add(new DateInterval("P1D"));
			$fechaActualMasUno = $fechaActual->format("Y-m-d");

			$fechaFinal2 = new DateTime($fechaFinal);
			$fechaFinal2 ->add(new DateInterval("P1D"));
			$fechaFinalMasUno = $fechaFinal2->format("Y-m-d");

			if($fechaFinalMasUno == $fechaActualMasUno){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fechaH BETWEEN '$fechaInicial' AND '$fechaFinalMasUno'");

			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE fechaH BETWEEN '$fechaInicial' AND '$fechaFinal'");

			}
		
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

	}

	/*=============================================
	REPORTE POR FECHAS
	=============================================*/

	// static public function mdlReporteFechasCiudad($tabla, $fechaIn, $fechaFi){

	// 	if($fechaIn != null){

	// 	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE DATE(fechaH)>='$fechaIn' AND DATE(fechaH)<='$fechaFi'");

	// 	$stmt -> bindParam(":".$fechaIn, $fechaFi, PDO::PARAM_STR);

	// 	$stmt -> execute();

	// 	return $stmt -> fetch();

	// 	}else{

	// 		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

	// 		$stmt -> execute();

	// 		return $stmt -> fetchAll();

	// 	}

	// 	$stmt -> close();

	// 	$stmt = null;

	// }

}
