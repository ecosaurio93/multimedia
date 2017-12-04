<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 



$id=$_REQUEST['dato'];



$query2="delete from profesor where id_profesor='$id'";

$result2=mysqli_query($link,$query2); 
//mysqli_free_result($result); 
mysqli_close($link);    

header("Location:profe.php");
?> 
 