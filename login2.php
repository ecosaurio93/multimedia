<?php session_start(); 



$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 

$usuario=$_REQUEST['usuario']; 
$password=$_REQUEST['password'];


$result = mysqli_query($link,"select  * from estudiante where 
usuario='$usuario' or correo='$usuario'");

   if($row=mysqli_fetch_array($result)){



       if($row["pass"] == $password)
           {
            $_SESSION["user"] = $row['usuario'];  
            $_SESSION["id"] = $row['id_estudiante'];         
            $_SESSION["name"] = $row['nombre'];  
         header("Location:alumno.php"); 
             // Para redireccionar automaticamente a una pagina: usar cualqueira de las dos opciones:  
            //echo '<SCRIPT LANGUAGE="javascript">  location.href = "index.php";    </SCRIPT>';
            //header("Location: index.php");
             

     }
    else {
  header("Location:error_login.html"); 
             } 

   
   }
  
 else {
  header("Location:error_login.html"); 
             } 



$result = mysqli_query($link,"select  * from profesor where 
usuario='$usuario' or correo='$usuario'");

   if($row=mysqli_fetch_array($result)){



       if($row["pass"] == $password)
           {
            $_SESSION["user"] = $row['usuario'];
            $_SESSION["id"] = $row['id_profesor'];             
            $_SESSION["name"] = $row['nombre']; 
            header("Location:index_profe.php"); 
             // Para redireccionar automaticamente a una pagina: usar cualqueira de las dos opciones:  
            //echo '<SCRIPT LANGUAGE="javascript">  location.href = "index.php";    </SCRIPT>';
            //header("Location: index.php");
            

     }
        else {
  header("Location:error_login.html"); 
             } 


   }








?> 