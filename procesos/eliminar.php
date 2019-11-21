<?php 
	
	require_once "../clases/conexionB.php";
    require_once "../clases/crudEquipo.php";
    $obj = new crudEquipo();
	echo $obj->eliminarEquipos($_POST['id_equipo']);
 ?>