<?php
function conectar()
{
$host="localhost";
$user="root";
$contra="";
$db="MangaQueen"

$connect=mysqli_connect($host,$user,$contra) or die ("error".mysql_error());
mysqli_select_db($connect,$db);
return $connect;


}



 ?>
