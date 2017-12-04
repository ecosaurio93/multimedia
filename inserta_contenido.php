<?php session_start(); 
if(!isset($_SESSION['user'])) header("Location:index.html");

$usuario=$_SESSION['user'];
$id_profesor=$_SESSION['id'];
$id_curso=$_SESSION['id_curse'];


$tem= $_REQUEST["tema"];
$desc= $_REQUEST["actividad"];
$enla= $_REQUEST["enlace"];
$tar= $_REQUEST["tarea"];
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

echo "('$tem','$desc','$enla','$id_curso','$id_profesor,'$fecha')";

$query = ("insert into contenido (nombre_actividad,actividad,link,id_curso,id_profesor,fecha,tarea)
values('$tem','$desc','$enla','$id_curso','$id_profesor','$fecha','$tar')");


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
header("Location:cursos_profe.php");
 



?>