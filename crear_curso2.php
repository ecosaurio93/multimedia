<?php session_start(); 
if(!isset($_SESSION['user'])) header("Location:index.html");



$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 

$nombre=$_REQUEST['nombre']; 
$descripcion=$_REQUEST['descripcion'];
$usuario=$_SESSION['user'];


$result = mysqli_query($link,"select  * from profesor where usuario='$usuario'");
$row=mysqli_fetch_array($result);
$id_profe=$row["id_profesor"];
$nom_prof=$row["nombre"];

$query = "insert into curso_profe (nombre_curso,descripcion,id_profesor,nombre_profe)
values('$nombre','$descripcion','$id_profe','$nom_prof')";
 mysqli_query($link,$query);



 
 header("Location:curso_creado.php");





?>