<?php
    require_once "../clases/conexionB.php";
    require_once "../clases/crudB.php";
        
    $obj = new crudB();
    echo json_encode($obj->obtenDatosJugador($_POST['id_torneo']));
    

?>