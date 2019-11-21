<?php 
	
	require_once "../clases/conexionB.php";
    require_once "../clases/crudB.php";
    $obj = new crudB();
    
    $datosB=$_POST['id_torneo'];
   
    echo $obj->eliminarTorneo($datosB) or die($datosB);
 ?>