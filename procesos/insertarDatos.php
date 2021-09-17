<?php 

	require_once "../crud/crud.php";

	$datos=array(
				'nombre'=> $_POST['nombre'],
				'imagen'=> $_POST['imagen'],
				'valor'=> $_POST['valor']		
				);

	echo Crud::insertarDatos($datos);




 ?>