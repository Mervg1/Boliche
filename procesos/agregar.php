<?php
    require_once "../clases/conexionB.php";
    require_once "../clases/crudEquipo.php";
    $obj = new crudEquipo();

    $datosE=array($_POST['nombre_equipo'], $_POST['puntos'], $_POST['total_pinos']);
    echo $obj->agregarEquipos($datosE);
?>