<?php
    class conectar{
        public function conexion(){
            $conexion=mysqli_connect('localhost','mercy','','juegos') or die ('mysql_error()');
            return $conexion;
        }
    }
    

?>