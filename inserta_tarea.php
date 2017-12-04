<?php session_start(); 
if(!isset($_SESSION['user'])) header("Location:index.html");

$usuario=$_SESSION['user'];
$id_alumno=$_SESSION['id'];
$id_curso=$_SESSION["id_curse"];
$id_cont=$_SESSION['id_contenido'];

$nombre_estu=$_SESSION["name"]; 
$tarea= $_REQUEST['tarea'];

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



$query = ("insert into tarea (id_contenido,id_curso,id_estudiante,nombre_alumno,tarea,fecha)
values('$id_cont','$id_curso','$id_alumno','$nombre_estu','$tarea','$fecha')");


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
 
header("Location:tarea_enviada_alumno.php");


?>