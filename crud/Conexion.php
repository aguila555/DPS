<?php 

class Conexion{
  	public function conectar(){
  		$conexion= new PDO("mysql:host=localhost;dbname=productos","root","");
  		return $conexion;
  	}
}



 ?>