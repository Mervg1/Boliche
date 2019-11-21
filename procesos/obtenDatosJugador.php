<?php
    require_once "../clases/conexionB.php";
    require_once "../clases/crudJugador.php";
        
    $obj = new crudJugador();
    echo json_encode($obj->obtenDatosJugador($_POST['id_jugador']));
    

?>