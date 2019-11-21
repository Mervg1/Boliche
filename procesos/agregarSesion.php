<?php
    require_once "../clases/conexionB.php";
    require_once "../clases/crudSesion.php";
    $obj = new crudSesion();

    $datos=array($_POST['nombre_sesion'], $_POST['id_torneo']);

    echo $obj->agregarSesion($datos);
?>