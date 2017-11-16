<!DOCTYPE html>
<html>
<head>
    <title> USUARIO REGISTRADO</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

 


<?php



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
$esc= $_REQUEST["escuela"];



$result=mysqli_query($link,"select usuario from profesor where usuario='$user'");

if($pa!=$pa2){
   header("Location:error_pass_profe.php"); 


}
    // Hay campos en blanco
//alter table estudiantes drop promedio;
if($row=mysqli_fetch_array($result) ){

echo'el usuario '. $user.' ya existe elija otro nombre de usuario<br><br>';

 header("Location:user_repetido_profesor.php"); 

} 

 else {
   $query = "insert into profesor (usuario,pass,nombre,escuela,correo)
    values('$user','$pa','$nom','$esc','$mail')";


    mysqli_query($link,$query);
    

 
    echo 'El profesor '.$nom.' ha sido registrado de manera satisfactoria.<br />';
    echo '<br />';   
    echo '<p><a href="alta_profe.php">Volver</a></p>';
        

 }



    // Hay campos en blanco


        mysqli_close($link);
         
 


?>


  <script src="js/jquery.js"></script>
         <script src="js/bootstrap.min.js"></script>

</body>
</html>

