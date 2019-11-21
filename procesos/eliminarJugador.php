<?php 
	
	require_once "../clases/conexionB.php";
    require_once "../clases/crudJugador.php";
    $obj = new crudJugador();
	echo $obj->eliminarJugador($_POST['id_jugador']);
 ?>