<?php session_start(); 
if(!isset($_SESSION['user'])) header("Location:index.html");

$usuario=$_SESSION['user'];
$id_estudiante=$_SESSION['id'];
$id_c=$_GET['dato'];


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 
 if (!($link=mysqli_connect("localhost","root",""))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysqli_select_db($link,"plataforma")) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   }


//echo "$busca";
$result2=mysqli_query($link,"select  * from curso_profe where id_curso='$id_c'");
$row2 = mysqli_fetch_array($result2); 

$curso= $row2['nombre_curso'];
$id_prof= $row2["id_profesor"];
$profe= $row2['nombre_profe'];





$result = mysqli_query($link,"select  * from estudiante where usuario='$usuario'");
$row = mysqli_fetch_array($result);
$alumno = $row['nombre'];


 
 

 $query = ("insert into curso (id_curso,nombre_curso,id_profesor,nombre_profesor,id_estudiante,nombre_estudiante)
values('$id_c','$curso','$id_prof','$profe','$id_estudiante','$alumno')");
 mysqli_query($link,$query);

 header("Location:registrado.php");


  

 



?>