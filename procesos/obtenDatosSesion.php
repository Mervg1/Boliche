<?php
    require_once "../clases/conexionB.php";
    require_once "../clases/crudSesion.php";
        
    $obj = new crudSesion();
    echo json_encode($obj->obtenDatosSesion($_POST['id_sesion']));
    

?>