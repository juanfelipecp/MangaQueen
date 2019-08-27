<?php
function conectar()
{
$host="localhost";
$user="root";
$contra="";
$db="mangaqueen";

$connect=mysqli_connect($host,$user,$contra) or die ("error".mysql_error());
mysqli_select_db($connect,$db);
return $connect;


}



 ?>
