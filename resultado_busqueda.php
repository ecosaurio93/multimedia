<?php session_start(); 
if(!isset($_SESSION['user'])) header("Location:index.html");



$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 

$busca=$_REQUEST['buscar']; 

$usuario=$_SESSION['user'];

//echo "$busca";

$result2 = mysqli_query($link,"select  * from curso_profe");

//$row2=mysqli_fetch_array($result2);
 while($row2 = mysqli_fetch_array($result2)) 
  { 
  	$cadena=$row2['nombre_curso']; 
    
	$pos = strripos($cadena, $busca);


 if($pos !== false){
 	$id_prof=$row2['id_profesor'];
 	$result=mysqli_query($link,"select  * from profesor where id_profesor='$id_prof' ");
 	$row = mysqli_fetch_array($result);
     
   $row = mysqli_fetch_array($result);
   
   
 	$id_c=$row2['id_curso'];
 	$nom=$row2['nombre_curso'];
 	$desc=$row2['descripcion'];
	$profe=$row2['nombre_profe'];

 	echo "$id_c";
 	echo "$nom";;
 	echo"$desc";
 	echo"$profe";


   }

  

 }

 mysqli_close($link);

?>