<?php 

	require_once "../crud/crud.php";
	$obj= new Crud();
	$datos=$obj->mostrarDatos();

	$tabla='<table class="table table-dark">
									<thead>
										<tr class="font-weight-bold">
											<td>Nombre</td>
												<td>Imagen</td>
											<td>Valor</td>
											<td>Me interesa</td>
											<td>Eliminar</td> 
											
										</tr>
									</thead>
									<tbody>';
$datosTabla="";



foreach ($datos as $key => $value) {
	$datosTabla=$datosTabla.'<tr>
											<td>'.$value['nombre'].'</td>
											<td><img class="prueba" src="'.$value['imagen'].'" width="20%" ></td>
											<td>'.$value['valor'].'</td>
											<td>
													<a href="https://api.whatsapp.com/send?phone=[+57][314 4094858]" target="blank"><span class="btn btn-success btn">
														<i class="fab fa-whatsapp"></i>
													</span>
													</a>
												
											</td>
											<td>
												<span class="btn btn-danger" onclick="eliminarDatos('.$value['id'].')">
													<li class="fas fa-trash-alt"></li>
												</span>
											</td>
										</tr>';
}



echo $tabla.$datosTabla.'</tbody></table>';




 ?>