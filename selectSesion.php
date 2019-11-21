<?php
require_once "clases/conexionB.php";
$obj= new conectarB();
$conexionB=$obj->conexionB();
$torneo = $_REQUEST['id_torneo'];
print_r($torneo);
$sql="SELECT * from sesion where id_torneo='$torneo'";
$result=mysqli_query($conexionB,$sql);
?>

<select>
  <option>Seleccione una sesion...</option>
    <?php
  

  while($resp=mysqli_fetch_row($result)){

      ?>
  <option id="sesionSelect" value="<?php echo $resp[0] ?>"><?php echo $resp[1] ?></option>
 <?php }
  ?>
</select>