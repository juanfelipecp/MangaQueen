<?php
incluce("conexion.php")

$nombre=$_POST['username'];
$contra=$_POST['password'];

  $con=conectar();
  $SQL="SELECT COUNT(*) AS cu FROM usuario
  WHERE username ='$nombre'AND password='$contra' ";
  $resul=mysqli_query($con,$SQL);
  while($file=mysquli_fetch_array($resul)){
    if ($file['cu']==0) {
      $si = FALSE;
    }
else {
  $si = TRUE;
  $sql2="SELECT * FROM usuario
  WHERE username='$nombre' AND password='$contra' ";
  $resul2=mysqli_query($con,$sql2);
  $file2=mysquli_fetch_array($resul2)
  $id = $file2["id"];
          header("location:index_sesion_iniciada.php?id=$id");

}
if ($si == FALSE) {
  header("location:index.php");

}

  }



 ?>
