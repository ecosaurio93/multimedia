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
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
         <a class=" js-scroll-trigger" href="#page-top"><img src="img/MULE.png" alt="" >
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PROFESOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

             <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index_profe.php">Inicio</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="cursos_profe.php">Cursos</a>
          </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menú</a>
              <ul class="dropdown-menu">
                         <a class="dropdown-item" href="#">Entregar Tarea</a>
                  <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="crear_curso.php">Crear curso </a>
                  <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="blog.php">Blog </a>
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

<div>
<br></br>
<br></br>
<br></br>



<center>

<br>
<br>
<br>
      
<input type="button" value="volver " name="volver atrás2" onclick="history.back()" />
    
<div>

<?php  session_start(); 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 


$usuario=$_SESSION['user'];
$id_profe=$_SESSION['id'];
$nombre=$_SESSION['name'];

$id_curso=$_GET['dato'];
//Insertar video de youtube
/*echo('<iframe width="854" height="480" src="https://www.youtube.com/embed/cbH6nug22dU" frameborder="0" gesture="media" allowfullscreen></iframe>');
*/



  $result=mysqli_query($link,"select  * from contenido where id_curso='$id_curso' ");
  $row = mysqli_fetch_array($result);

echo '<table class="table table-hover table-dark">
   <thead>
    <tr>
    <td scope="col">N°</td>
      <td scope="col">Tema</td>
      <td scope="col">Opcion</td>
    </tr>
     </thead>'; 
  $i=1;
  while($row = mysqli_fetch_array($result)) 
  { 
$id=$row['id_contenido'];
$id_contenido= $row['nombre_actividad'];
 $curso= $row['nombre_actividad'];
 $tarea= $row['tarea'];

echo " <tr><td>$i</td><td>$curso</td> 
<td><a href='vercurso.php?dato=$id'>Ver Contenido</a></td>";

if($tarea!=NULL){
echo"<td><a href='ver_tareas.php?dato=$id'>Calificar tarea</a></td>";

}
echo"</tr>";

$i=$i+1;

  }

  ?>

</div>


</center>

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
