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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ADMINISTRADOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

               <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="admin.php">Inicio</a>
          </li>

 <li class="nav-item dropdown">
           <a  class="dropdown-toggle nav-link  js-scroll-trigger"  data-toggle="dropdown" href="#">Administracion<span class="caret"></a span>
         
          <ul class="dropdown-menu ">
                 <a class="dropdown-item" href="curso.php">Curso</a>
                  <div class="dropdown-divider"></div>
           </ul>
        </li>  


             
              <li class="nav-item dropdown">
           <a  class="dropdown-toggle nav-link  js-scroll-trigger"  data-toggle="dropdown" href="#">Usuarios<span class="caret"></a span>
          <ul class="dropdown-menu">
         <a class="dropdown-item" href="foro.php">Foro</a>
                  <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="alum.php">Alumnos</a>
                  <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="profe.php">Profesores</a>
                  <div class="dropdown-divider"></div>

      
           </ul>
        </li>  
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Salir</a>
          </li>
            
          </ul>
             
        </div>
      </div>
    </nav>

<br></br>
</br>


               
<br></br>
<br></br>



   <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
             
              <li><h4>Lista de Alumnos<h4></li>
          </ul>
          </div>
        </div>
      </div>


<?php 


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 


//echo "$busca";


$i=1;


//$row2=mysqli_fetch_array($result2);


echo "<br>";
echo "<br>";
echo "<br>";
echo '<table class="table table-hover table-dark">
   <thead>
    <tr>
    <td scope="col">#</td>
      <td scope="col">Nombre</td>
      <td scope="col">Correo</td>
      <td scope="col">Usuario </td>
      <td scope="col">Escuela</td>
       <td scope="col">Eliminar</td>

    </tr>
     </thead>'; 



  $result=mysqli_query($link,"select  * from estudiante");
  $row = mysqli_fetch_array($result);

  $id_alu=$row["id_estudiante"];
  $nom_alu= $row["nombre"];
 $user= $row["usuario"];
  $escuela= $row["escuela"];
  $correo= $row["correo"];
  echo " <tr><td>$i</td><td>$nom_alu</td> <td>$correo</td> <td>$user</td><td>$escuela</td>";
 echo"<td><a href='elimina_alumno.php?dato=$id_alu' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td></tr>";
 while($row = mysqli_fetch_array($result)) 
  { 
$i=$i+1;
  $id_alu=$row["id_estudiante"];
  $nom_alu= $row["nombre"];
 $user= $row["usuario"];
  $escuela= $row["escuela"];
  $correo= $row["correo"];


echo " <tr><td>$i</td><td>$nom_alu</td> <td>$correo</td> <td>$user</td><td>$escuela</td>";
 echo"<td><a href='elimina_alumno.php?dato=$id_alu' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td></tr>";







  }




 

echo "</table>"













?>


<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
    <!-- Footer -->
   <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Ubicación</h3>
             <center>
    <div id="map"></div>
    <script>
      function initMap() {
        var coordenadas = {lat: 19.005181, lng: -98.204421};//coordenadas latitud, longitud
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: coordenadas
        });
        var marker = new google.maps.Marker({
          position: coordenadas,
          draggeable:true,
          title: 'Arrastrame', //título  sobre el marcador
          animation:google.maps.Animation.BOUNCE,//animación
          map: map
        });
      }
    </script>
  </center>
            </div>
            <div class="footer-col col-md-4">
              <h3>Acerca de la Web</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>Contacto</h3>
              <p>mule@gmail.com
            </p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Your Website 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    

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
