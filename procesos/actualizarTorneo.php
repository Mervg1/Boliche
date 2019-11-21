<?php 
	require_once "../clases/conexionB.php";
	require_once "../clases/crudB.php";
	$obj= new crudB();
	$datosB=array(
		$_POST['nombre'],
		$_POST['fecha_inicio'],
		$_POST['fecha_final'],
        $_POST['numero_sesiones'],
		$_POST['id_torneo']
				);  
	echo $obj->actualizarTorneo($datosB);
	
 ?>