<?php 
	require_once "../clases/conexionB.php";
	require_once "../clases/crudSesion.php";
    $obj = new crudSesion();
	$datosB=array(
		$_POST['nombre_sesion'],
		$_POST['id_sesion']
				);
	echo $obj->actualizarSesion($datosB);
	
 ?>