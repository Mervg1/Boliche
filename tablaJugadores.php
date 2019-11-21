<?php
require_once "clases/conexionB.php";
$obj= new conectarB();
$conexionB=$obj->conexionB();
//$sql="SELECT * from jugador";
$torneo = $_REQUEST['id_torneo'];
$sesion = $_REQUEST['id_sesion'];
if($torneo == 'Seleccione Torneo...'){
    $sql="SELECT * from jugador"; 
}elseif($sesion == 'Seleccione una sesion...'){
    $sql="SELECT * from jugador
            INNER JOIN torneo_jugador
            ON jugador.id_jugador = torneo_jugador.id_jugador
            INNER JOIN torneo
            ON torneo.id_torneo = torneo_jugador.id_torneo
            where torneo.id_torneo='$torneo'"; 
}else{
   $sql="SELECT * from jugador
            INNER JOIN torneo_jugador
            ON jugador.id_jugador = torneo_jugador.id_jugador
            INNER JOIN torneo
            ON torneo.id_torneo = torneo_jugador.id_torneo
            INNER JOIN sesion_jugador
            ON sesion_jugador.id_jugador=jugador.id_jugador
            INNER JOIN sesion
            ON sesion.id_sesion=sesion_jugador.id_sesion
            where torneo.id_torneo='$torneo' AND sesion.id_sesion='$sesion'"; 
}
$result=mysqli_query($conexionB,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatableJugadores">
		<thead style="background-color: #ec1f26;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Promedio</td>
				<td>HDCP</td>
                <td>Gms</td>
                <td>Pins</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Promedio</td>
				<td>HDCP</td>
                <td>Gms</td>
                <td>Pins</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
                    <td><?php echo $mostrar[4] ?></td>
                    <td><?php echo $mostrar[5] ?></td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditarJugador" onclick="agregaFrmActualizarJugador('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-edit"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-primary btn-sm" onclick="eliminarDatosJugador('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-trash-alt"></span>
						</span>
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
    
	$(document).ready(function() {
		$('#iddatatableJugadores').DataTable();
	} );
</script>