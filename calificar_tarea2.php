<?php session_start(); 
if(!isset($_SESSION['user'])) header("Location:index.html");

$usuario=$_SESSION['user'];
$id_alumno=$_SESSION['id'];
$id_tar=$_SESSION["id_tarea"];



$cali= $_REQUEST['calificacion'];
$com= $_REQUEST['comentario'];

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

$fecha=date("d/m/Y  H:i A");

$result=mysqli_query($link,"select  * from tarea where id_tarea='$id_tar' ");
 $row = mysqli_fetch_array($result);
$id_alum= $row['id_estudiante'];
$result=mysqli_query($link,"select  * from estudiante where id_estudiante='$id_estudiante' ");
  $row = mysqli_fetch_array($result);
$nombre_estu= $row['nombre'];


$query = ("insert into cal_tarea (id_tarea,id_estudiante,calificacion,comentario)
values('$id_tar','$id_alum','$cali','$com')");


 mysqli_query($link,$query);


/*

$result = mysqli_query($link,"select  * from estudiante where usuario='$usuario'");
$row = mysqli_fetch_array($result);
$alumno = $row['nombre'];


  
 

 $query = ("insert into curso (id_curso,nombre_curso,id_profesor,nombre_profesor,id_estudiante,nombre_estudiante)
values('$id_c','$curso','$id_prof','$profe','$id_estudiante','$alumno')");
 mysqli_query($link,$query);

 header("Location:registrado.php");

  */
//header("Location:cursos_alumno.php");
 
header("Location:cursos_profe.php");



?>