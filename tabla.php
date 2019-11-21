<?php
require_once "clases/conexionB.php";
$obj= new conectarB();
$conexionB=$obj->conexionB();
//$sql="SELECT * from equipo";
$torneo = $_REQUEST['id_torneo'];
$sesion = $_REQUEST['id_sesion'];
if($torneo == 'Seleccione Torneo...'){
    $sql="SELECT * from equipo"; 
}elseif($sesion == 'Seleccione una sesion...'){
    $sql="SELECT * from equipo
            INNER JOIN torneo_equipo
            ON equipo.id_equipo = torneo_equipo.id_equipo
            INNER JOIN torneo
            ON torneo.id_torneo = torneo_equipo.id_torneo
            where torneo.id_torneo='$torneo'"; 
}else{
   $sql="SELECT * from equipo
            INNER JOIN torneo_equipo
            ON equipo.id_equipo = torneo_equipo.id_equipo
            INNER JOIN torneo
            ON torneo.id_torneo = torneo_equipo.id_torneo
            INNER JOIN sesion_equipo
            ON sesion_equipo.id_equipo = equipo.id_equipo
            INNER JOIN sesion
            ON sesion.id_sesion = sesion_equipo.id_sesion
            where torneo.id_torneo='$torneo' AND sesion.id_sesion='$sesion'"; 
}

$result=mysqli_query($conexionB,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #ec1f26 ;color: white; font-weight: bold;">
			<tr>
				<td>Equipo</td>
				<td>Puntos</td>
				<td>Pinos totales</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Equipo</td>
				<td>Puntos</td>
				<td>Pinos totales</td>
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
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php 
                        echo $mostrar[0] ?>')">
                           
							<span class="fa fa-edit"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-primary btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
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
		$('#iddatatable').DataTable();
	} );
</script>