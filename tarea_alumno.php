
<!DOCTYPE html>
<html lang="en">

  <head>
    <style>
       #map {
        height: 200px;
        width: 200px;
       }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plataforma de educación</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
         <a class=" js-scroll-trigger" href="#page-top"><img src="img/MULE.png" alt="" >
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ALUMNO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

             <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Inicio</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="cursos_alumno.php">Cursos</a>
          </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menú</a>
              <ul class="dropdown-menu">
                <a class="dropdown-item" href="#">Entregar Tarea</a>
      						<div class="dropdown-divider"></div>
							 <a class="dropdown-item" href="#">Lecturas </a>
      						<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Multimedia </a>
      						<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Blog </a>
      						<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Foro </a>
      						<div class="dropdown-divider"></div>
						
					
            </li>
          </ul>
             
		<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Salir</a>
          </li>
			 
			 
        </div>
      </div>
    </nav>

<br></br>
</br>


<div>
<br></br>
<br></br>
<br></br>

<input type="button" value="volver " name="volver atrás2" onclick="history.back()" />



<div>

<?php  session_start(); 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 


$id_tarea=$_GET['dato'];



$usuario=$_SESSION['user'];
$id_alumno=$_SESSION['id'];
$nombre=$_SESSION['name'];
//Insertar video de youtube
/*echo('<iframe width="854" height="480" src="https://www.youtube.com/embed/cbH6nug22dU" frameborder="0" gesture="media" allowfullscreen></iframe>');
*/

//$id_curso=$_SESSION['id_curse'];

  $result=mysqli_query($link,"select  * from contenido where id_contenido='$id_tarea' ");
  $row = mysqli_fetch_array($result);

$cadena="youtube";
$tema= $row['nombre_actividad'];
$tarea= $row['tarea'];
$desc= $row['actividad'];
$id_conte= $row['id_contenido'];
//$curso= $row['actividad'];
$enlace=$row['link'];
$fecha=$row['fecha'];
echo "<div><h6>";
echo "<br>";
echo "<br>";
echo ('<div class="col-md-3">');
echo('<div class="alert alert-secondary" role="alert">');
echo( "Pulicado: "."$fecha");
echo "</div>";
echo "</div>";
echo "<br>";
echo "<br>";
echo "<center>";

echo ('<div class="col-md-12">');
echo ('<div class="alert alert-primary" role="alert">');
echo "<h3>";
echo("TAREA :"."$tarea");
echo "</h3>";
echo "<br>";
echo "<br>";



//formulario de registro de usuario
echo ('<form id="contact-form" method="post" action="inserta_tarea.php? dato=$id_c" role="form">

    <div class="col-md-6">
                <div class="form-group">
                    <label for="tarea">Linnk tarea </label>
                    <input id="atrea" type="text" name="tarea" class="form-control" placeholder="Pegue aqui su link*" required="required" data-error="debe llenar este campo">
                    <div class="help-block with-errors"></div>
                </div>
            </div>



  <button type="submit" class="btn btn-primary" >enviar</button>
</form>');




 $_SESSION["id_contenido"] = $id_tarea; 



echo "</center>";
echo "</div>";
echo "</div>";


echo "</div><h6>";
echo '<center>
<input type="button" value="volver " name="volver atrás2" onclick="history.back()" />
</center>';

  ?>

</div>


</div>
<br></br><br>
<br>

   <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
    <!--Google api-->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtIgeguwfd5ARvs1QDdaVEK5iLmjhkndw&callback=initMap">//dirección del mapa antes del &
    </script>

  </body>

</html>
