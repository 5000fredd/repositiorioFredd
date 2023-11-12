<?php

require_once "conexion.php";

class ModeloUsuarios{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

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
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, paternoU, maternoU, sexoU, nacimientoU, ci, telefonoU, direccionU, celularU, correoU, usuario, password, perfil, foto) VALUES (:nombre, :paternoU, :maternoU, :sexoU, :nacimientoU, :ci, :telefonoU, :direccionU, :celularU, :correoU, :usuario, :password, :perfil, :foto)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":paternoU", $datos["paternoU"], PDO::PARAM_STR);
		$stmt->bindParam(":maternoU", $datos["maternoU"], PDO::PARAM_STR);
		$stmt->bindParam(":sexoU", $datos["sexoU"], PDO::PARAM_STR);
		$stmt->bindParam(":nacimientoU", $datos["nacimientoU"], PDO::PARAM_STR);
		$stmt->bindParam(":ci", $datos["ci"], PDO::PARAM_STR);
		$stmt->bindParam(":telefonoU", $datos["telefonoU"], PDO::PARAM_INT);
		$stmt->bindParam(":direccionU", $datos["direccionU"], PDO::PARAM_STR);
		$stmt->bindParam(":celularU", $datos["celularU"], PDO::PARAM_INT);
		$stmt->bindParam(":correoU", $datos["correoU"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlEditarUsuario($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, paternoU = :paternoU, maternoU = :maternoU, sexoU = :sexoU, nacimientoU = :nacimientoU, ci = :ci, telefonoU = :telefonoU, direccionU = :direccionU, celularU = :celularU, correoU = :correoU, password = :password, perfil = :perfil, foto = :foto WHERE usuario = :usuario");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":paternoU", $datos["paternoU"], PDO::PARAM_STR);
		$stmt->bindParam(":maternoU", $datos["maternoU"], PDO::PARAM_STR);
		$stmt->bindParam(":sexoU", $datos["sexoU"], PDO::PARAM_STR);
		$stmt->bindParam(":nacimientoU", $datos["nacimientoU"], PDO::PARAM_STR);
		$stmt->bindParam(":ci", $datos["ci"], PDO::PARAM_STR);
		$stmt->bindParam(":telefonoU", $datos["telefonoU"], PDO::PARAM_INT);
		$stmt->bindParam(":direccionU", $datos["direccionU"], PDO::PARAM_STR);
		$stmt->bindParam(":celularU", $datos["celularU"], PDO::PARAM_INT);
		$stmt->bindParam(":correoU", $datos["correoU"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR USUARIO
	=============================================*/

	static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function mdlBorrarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}

}