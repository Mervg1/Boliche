<?php
    require_once "../clases/conexionB.php";
    require_once "../clases/crudEquipo.php";
        
    $obj = new crudEquipo();
    echo json_encode($obj->obtenDatosEquipos($_POST['id_equipo']));
    

?>