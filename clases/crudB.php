<?php
    class crudB{
        public function agregarB($datosB){
            $obj=new conectarB();
            $conexionB=$obj->conexionB();

            $sql="INSERT into torneo (nombre, fecha_inicio, fecha_final,numero_sesiones) 
                        values ('$datosB[0]','$datosB[1]','$datosB[2]','$datosB[3]')";
            
            return mysqli_query($conexionB,$sql) or die('impossible');
        }
        
        public function obtenDatosTorneo($id_tabla){
            $obj = new conectarB();
            $conexionB = $obj->conexionB();
            $sql="SELECT * from torneo 
            where id_torneo='$id_tabla'";
            $result=mysqli_query($conexionB, $sql);
            $ver=mysqli_fetch_row($result);
            $datos=array('id_torneo'=>$ver[0],'nombre'=>$ver[1], 'fecha_inicio'=>$ver[2],'fecha_final'=>$ver[3],'numero_sesiones'=>$ver[4]);
            return $datos;
        }
        
        public function actualizarTorneo($datosB){
            $obj=new conectarB();
            $conexionB=$obj->conexionB();
            $sql="UPDATE torneo 
            set nombre='$datosB[0]', fecha_inicio='$datosB[1]', fecha_final='$datosB[2]', numero_sesiones='$datosB[3]' 
            where id_torneo='$datosB[4]'";
            return mysqli_query($conexionB,$sql);
        }
        
        public function eliminarTorneo($id_tabla){
            $obj=new conectarB();
            $conexionB=$obj->conexionB();
			$sql="DELETE from torneo where id_torneo='$id_tabla'";
			return mysqli_query($conexionB,$sql);
            
		}
    }

?>