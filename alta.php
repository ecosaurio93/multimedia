<!DOCTYPE html>
<html>
<head>
    <title>REGISTRO </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <link rel="stylesheet" href="css/bootstrap.min.css">



<?php  


function formulario(){


echo ('<form action="alta2.php" method="POST">

Nombre de usuario <br>
<input type="text" name="usuario" /><br />
<br>
<br>

Contraseña<br>
<input type="password" name="pass" /><br />
<br>
<br>
Nombre de alumno <br>
<input type="text" name="nombre" /><br />
<br>
<br>
carrera <br>
<input type="text" name="carrera" /><br>
<br>
<br>

escuela <br>
<input type="text" name="escuela" /><br>
<br>
<br>

Correo<br>
<input type="text" name="correo" /><br />
<br>
<br>

  <button type="submit" class="btn btn-primary">Registrar</button>
</form>');

}



formulario();




?>
  <script src="js/jquery.js"></script>
         <script src="js/bootstrap.min.js"></script>


</head>
<body>





