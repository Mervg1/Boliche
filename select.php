<?php
require_once "clases/conexionB.php";
$obj= new conectarB();
$conexionB=$obj->conexionB();
$sql="SELECT id_torneo, nombre
from torneo";
$result=mysqli_query($conexionB,$sql);
?>

<select>
  <option>Seleccione Torneo...</option>
    <?php
  

  while($resp=mysqli_fetch_row($result)){

      ?>
  <option id="sTorneos" value="<?php echo $resp[0] ?>"><?php echo $resp[1] ?></option>
 <?php }
  ?>
</select>
