<!DOCTYPE html>
<html>
<head>
    <title> USUARIO REGISTRADO</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

 


<?php session_start(); 



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

$user= $_POST["usuario"];
$mail=$_REQUEST["correo"];
$pa= $_REQUEST["pass"];
$pa2= $_REQUEST["pass2"];
$nom = $_REQUEST["nombre"];
$car = $_REQUEST["carrera"];
$esc= $_REQUEST["escuela"];


$result=mysqli_query($link,"select usuario from estudiante where usuario='$user'");


    // Hay campos en blanco
//alter table estudiantes drop promedio;
if($row=mysqli_fetch_array($result) ){

echo'el usuario '. $user.' ya existe elija otro nombre de usuario<br><br>';

 header("Location:user_repetido.php"); 

} 

if(strcmp($pa, $pa2) !== 0){

   header("Location:error_pass.php"); 
   
}


 else {
   $query = "insert into estudiante (usuario,pass,nombre,carrera,escuela,correo)
    values('$user','$pa','$nom','$car','$esc','$mail')";

$_SESSION["user"] = $user;      
  header("Location:alumno.php");  
        
    mysqli_query($link,$query);
    

 
  

 }



    // Hay campos en blanco


        mysqli_close($link);
         
 


?>


  <script src="js/jquery.js"></script>
         <script src="js/bootstrap.min.js"></script>

</body>
</html>

