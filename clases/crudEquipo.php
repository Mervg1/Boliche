<?php
    class crudEquipo{
        public function agregarEquipos($datosE){
            $obj=new conectarB();
            $conexionE=$obj->conexionB();
            
            $sql="INSERT into equipo (nombre_equipo, puntos, total_pinos) 
                        values ('$datosE[0]','$datosE[1]','$datosE[2]')";
            return mysqli_query($conexionE,$sql) or die('impossible');
        }
        
        public function obtenDatosEquipos($id_tabla){
            $obj = new conectarB();
            $conexionB = $obj->conexionB();
            $sql="SELECT * from equipo 
            where id_equipo='$id_tabla'";
            $result=mysqli_query($conexionB, $sql);
            $ver=mysqli_fetch_row($result);
            $datos=array('id_equipo'=>$ver[0],'nombre_equipo'=>$ver[1], 'puntos'=>$ver[2], 'total_pinos'=>$ver[3]);
            return $datos;
        }
        
        public function actualizarEquipos($datosB){
            $obj=new conectarB();
            $conexionB=$obj->conexionB();
            $sql="UPDATE equipo 
            set nombre_equipo='$datosB[0]', puntos='$datosB[1]', total_pinos='$datosB[2]' 
            where id_equipo='$datosB[3]'";
            return mysqli_query($conexionB,$sql)or die('error');
        }
        
        public function eliminarEquipos($id_equipo){
			$obj= new conectarB();
			$conexion=$obj->conexionB();
			$sql="DELETE from equipo where id_equipo='$id_equipo'";
			return mysqli_query($conexion,$sql);
		}
        
        public function equipo_torneo($id_torneo){
            $obj = new conectarB();
            $conexion = $obj->conexionB();
            $obtain="SELECT max(id_equipo) from equipo";
            $var = mysqli_query($conexion,$obtain);
            $id_equipo = mysqli_fetch_row($var);
            //print_r('id_equipo='+$id_equipo[0]);
            //print_r('id_torneo='+$id_torneo);
            $sql="INSERT into torneo_equipo (id_torneo, id_equipo) values('$id_torneo', '$id_equipo[0]')";
            return mysqli_query($conexion,$sql)or die('demonios');
        }
        
        public function equipo_sesion($id_sesion){
            $obj = new conectarB();
            $conexion = $obj->conexionB();
            $obtain="SELECT max(id_equipo) from equipo";
            $var = mysqli_query($conexion,$obtain);
            $id_equipo = mysqli_fetch_row($var);
            print_r('id_equipo='+$id_equipo[0]);
            print_r('id_torneo='+$id_sesion);
            $sql="INSERT into sesion_equipo (id_sesion, id_equipo) values('$id_sesion', '$id_equipo[0]')";
            return mysqli_query($conexion,$sql)or die('demonios');
        }
        
        
    }

?>