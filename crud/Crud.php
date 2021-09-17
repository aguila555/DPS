<?php 

require_once "Conexion.php";

class Crud extends Conexion{
	public function mostrarDatos(){
		$sql="SELECT id,
					nombre,
					imagen,
					valor
				from insumos";
		$query=Conexion::conectar()->prepare($sql);	
		$query->execute();
		return $query->fetchAll();
		$query->close();
	}

	public function insertarDatos($datos){
		$sql="INSERT into insumos (nombre, imagen, valor)
								values (:nombre,:imagen,:valor)";
		$query=Conexion::conectar()->prepare($sql);
		$query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$query->bindParam(":imagen", $datos["imagen"], PDO::PARAM_LOB);
		$query->bindParam(":valor", $datos["valor"], PDO::PARAM_STR);

		return $query->execute();

		$query->close();
	}
}




 ?>