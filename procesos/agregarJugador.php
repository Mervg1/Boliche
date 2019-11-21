<?php
    require_once "../clases/conexionB.php";
    require_once "../clases/crudJugador.php";
    $obj = new crudJugador();

    $datosJ=array($_POST['nombre_jugador'], $_POST['promedio'], $_POST['handicap'], $_POST['numero_lineas'], $_POST['pinos_jugador']);

    echo $obj->agregarJugador($datosJ);
?>