<?php
    class conectarB{
        public function conexionB(){
            $conexionB=mysqli_connect('localhost','root','root','boliche') or die ('error');
            return $conexionB;
        }
    }
    $obj = new conectarB();
    if($obj->conexionB()){
    }

?>