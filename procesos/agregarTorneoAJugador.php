<?php
    require_once "../clases/conexionB.php";
    require_once "../clases/crudJugador.php";
        
    $obj = new crudJugador();
    $obj2= new conectarB();
    $conexionB=$obj2->conexionB();
    $datos = $_POST['id_torneo'];
    echo $obj->jugador_torneo($datos);
?>