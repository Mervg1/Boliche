<?php 
	
	require_once "../clases/conexionB.php";
    require_once "../clases/crudSesion.php";
    $obj = new crudSesion();
    
    $datos=$_POST['id_torneo'];
   
    echo $obj->eliminarSesion($datos) or die($datosB);
 ?>