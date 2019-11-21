<?php
    require_once "../clases/conexionB.php";
    require_once "../clases/crudEquipo.php";
        
    $obj = new crudEquipo();
    $obj2= new conectarB();
    $conexionB=$obj2->conexionB();
    $datos = $_POST['id_sesion'];
    echo $obj->equipo_sesion($datos);
?>