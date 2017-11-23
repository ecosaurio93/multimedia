<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 
echo $_POST['usuario'];

$usuario=$_REQUEST['usuario']; 
echo $usuario;	


$result = mysqli_query($link,"select  * from estudiante where 
usuario='$usuario'");
   if($row=mysqli_fetch_array($result)){
       if($row["usuario"] == $usuario)
           {          
            $contraseña = $row['pass'];
             

$mensaje = "Recuperacion de tu usuario y contrasena MULE\r\n\r\nUsuario: ".$usuario."\r\nContrasena: ".$contraseña."\r\n\n\n\nwww.mule.com";
// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");
// Enviamos el email
mail('mule@mule.com', 'Recuperacion de contrasena', $mensaje);

echo "EMAIL ENVIADO...";
     }
   
   }



$result = mysqli_query($link,"select  * from profesor where 
usuario='$usuario'");
  if($row=mysqli_fetch_array($result)){
       if($row["usuario"] == $usuario)
           {          
            $contraseña = $row['pass'];
        

$mensaje = "Recuperacion de tu usuario y contrasena MULE\r\n\r\nUsuario: ".$usuario."\r\nContrasena: ".$contraseña."\r\n\n\n\nwww.mule.com";
// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");
// Enviamos el email
mail('mule@mule.com', 'Recuperacion de contrasena', $mensaje);

echo "EMAIL ENVIADO...";
     }
   }
   header("correo.php");
?> 