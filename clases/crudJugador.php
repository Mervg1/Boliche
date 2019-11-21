<?php
    class crudJugador{
        public function agregarJugador($datosJ){
            $obj=new conectarB();
            $conexionJ=$obj->conexionB();

            $sql="INSERT into jugador (nombre_jugador, promedio, handicap, numero_lineas, pinos_jugador) 
                        values ('$datosJ[0]','$datosJ[1]','$datosJ[2]','$datosJ[3]','$datosJ[4]')";
            return mysqli_query($conexionJ,$sql) or die('impossible');
        }
        
        
        public function obtenDatosJugador($id_tabla){
            $obj = new conectarB();
            $conexionB = $obj->conexionB();
            $sql="SELECT id_jugador, nombre_jugador, promedio, handicap,numero_lineas,pinos_jugador 
            from jugador 
            where id_jugador='$id_tabla'";
            
            $result=mysqli_query($conexionB, $sql);
            $ver=mysqli_fetch_row($result);
            $datos=array('id_jugador'=>$ver[0],'nombre_jugador'=>$ver[1], 'promedio'=>$ver[2], 'handicap'=>$ver[3],'numero_lineas'=>$ver[4],'pinos_jugador'=>$ver[5]);
            return $datos;
        }
        
        public function actualizarJugador($datosB){
            $obj=new conectarB();
            $conexionB=$obj->conexionB();
            $sql="UPDATE jugador 
            set nombre_jugador='$datosB[0]', promedio='$datosB[1]', handicap='$datosB[2]', numero_lineas='$datosB[3]', pinos_jugador='$datosB[4]'
            where id_jugador='$datosB[5]'";
            return mysqli_query($conexionB,$sql);
        }
        
        public function eliminarJugador($id_jugador){
			$obj= new conectarB();
			$conexion=$obj->conexionB();
			$sql="DELETE from jugador where id_jugador='$id_jugador'";
			return mysqli_query($conexion,$sql);
		}
        
        public function jugador_torneo($id_torneo){
            $obj = new conectarB();
            $conexion = $obj->conexionB();
            $obtain="SELECT max(id_jugador) from jugador";
            $var = mysqli_query($conexion,$obtain);
            $id_jugador = mysqli_fetch_row($var);
            //print_r($id_jugador[0]);
            //print_r($id_torneo);
            $sql="INSERT into torneo_jugador (id_torneo, id_jugador) values('$id_torneo', '$id_jugador[0]')";
            return mysqli_query($conexion,$sql)or die('demonios');
        }
        
        public function jugador_sesion($id_sesion){
            $obj = new conectarB();
            $conexion = $obj->conexionB();
            $obtain="SELECT max(id_jugador) from jugador";
            $var = mysqli_query($conexion,$obtain);
            $id_jugador = mysqli_fetch_row($var);
            //print_r($id_jugador[0]);
            //print_r($id_sesion);
            $sql="INSERT into sesion_jugador (id_sesion, id_jugador) values('$id_sesion', '$id_jugador[0]')";
            return mysqli_query($conexion,$sql)or die('demonios');
        }
        
    }

?>