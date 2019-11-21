<?php 
	require_once "../clases/conexionB.php";
	require_once "../clases/crudEquipo.php";
	$obj= new crudEquipo();
	$datos=array(
		$_POST['nombre_equipo'],
		$_POST['puntos'],
		$_POST['total_pinos'],
		$_POST['id_equipo']
				);  
    
	echo $obj->actualizarEquipos($datos);
	
 ?>