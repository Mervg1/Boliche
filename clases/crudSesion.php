<?php

    class crudSesion{
        public function agregarSesion($datos){
            $obj=new conectarB();
            $conexion=$obj->conexionB();

            $sql="INSERT into sesion (nombre_sesion,id_torneo) 
                        values ('$datos[0]','$datos[1]')";
            return mysqli_query($conexion,$sql) or die('impossible');
        }
        
        
        public function obtenDatosSesion($id_tabla){
            $obj = new conectarB();
            $conexionB = $obj->conexionB();
            $sql="SELECT nombre_sesion from sesion 
            where id_sesion='$id_tabla'";
            
            $result=mysqli_query($conexionB, $sql);
            $ver=mysqli_fetch_row($result);
            $datos=array('nombre_sesion'=>$ver[0]);
            return $datos;
        }
        
        public function actualizarSesion($datos){
            $obj=new conectarB();
            $conexionB=$obj->conexionB();
            $sql="UPDATE sesion 
            set nombre_sesion='$datos[0]'
            where id_sesion='$datos[1]'";
            return mysqli_query($conexionB,$sql);
        }
        
        public function eliminarSesion($id_sesion){
			print_r($id_sesion);
            $obj= new conectarB();
			$conexion=$obj->conexionB();
			$sql="DELETE from sesion where id_sesion='$id_sesion'";
			return mysqli_query($conexion,$sql);
		}
        
        /*public function jugador_torneo($id_torneo){
            $obj = new conectarB();
            $conexion = $obj->conexionB();
            $obtain="SELECT max(id_jugador) from jugador";
            $var = mysqli_query($conexion,$obtain);
            $id_jugador = mysqli_fetch_row($var);
            print_r($id_jugador[0]);
            print_r($id_torneo);
            $sql="INSERT into torneo_jugador (id_torneo, id_jugador) values('$id_torneo', '$id_jugador[0]')";
            return mysqli_query($conexion,$sql)or die('demonios');
        }*/
        
    }

?>