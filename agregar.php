<?php
include("conexion.php");
if ($_POST) {
  $user=$_POST['username'];
  $pass=$_POST['password'];
  $email=$_POST['email'];
  $con=conectar();
  $SQL="INSERT INTO usuario(username,password,correo)
  VALUES('$user','$pass','$email')";
  $resul=mysqli_query($con,$SQL);
  echo "$SQL";
    header("location:index.php");




}





 ?>
