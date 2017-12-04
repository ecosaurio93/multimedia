<!DOCTYPE html>
<html lang="es">

  <head>
    <style>
       #map {
        height: 200px;
        width: 200px;
       }
    </style>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />

  

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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">FORO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Inicio</a>
            </li>
           
           
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Registro</a>
        <div class="dropdown-menu">
         <a class="dropdown-item" href="logout.php">Registro de Alumno</a>
          <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="alta_profe.php">Registro de Profesor</a>
          </div>
     </li>      


            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Salir</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Cuerpo del documento --><!-- Cuerpo del documento --><!-- Cuerpo del documento --><!-- Cuerpo del documento --><!-- Cuerpo del documento -->
<br></br>

<div>

  
<body>
<br><br><br><br>

<?php
include('function.php');
session_start();
$usuario=$_SESSION['name'];
$numero= $_GET['numero'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"plataforma"); 

$result=mysqli_query($link,"select  * from foro where numero='$numero'");
  $row = mysqli_fetch_array($result);

  $tema=$row['comentario'];
   $desc=$row['descripcion'];
    $fecha=$row['fecha'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


 echo'<center><div class="col-md-10">';
echo "<br>
 <h5>Publicado: ".$fecha."</h5><br><br><br>
  <h3>TEMA: ".$tema."</h3><br>

 <h6><br> ".$desc."</h6> <br><HR NOSHADE>";


$sqlFind= getSQLResult("SELECT * FROM rforo where numero=$numero;");





if(mysqli_num_rows($sqlFind)>0){ //encontro al menos un usuario
    for($i = 1; $i <= mysqli_num_rows($sqlFind); $i++){
      $rows = mysqli_fetch_array($sqlFind);//los separa
      echo "<div ALIGN=LEFT><br>"; 
     
        echo "<h5>&nbsp;&nbsp; USUARIO: ".$rows['usuario']."</h5>"."";
          echo "&nbsp;&nbsp;&nbsp; PUBLICADO:".$rows['fecha']."<br><br><br>";
        echo "&nbsp;&nbsp;&nbsp;       ".$rows['comentario']."<br>";

      echo "<HR NOSHADE></div>";
    }
  }


echo "<div>
  <form action='hilo2.php?numero=".$numero."' method='post'>";


?>

      <div ALIGN=LEFT>
          <h4>Responder: </h4>
          <input type="text" size="80" name="comentario" required/><br>
      </div>
    <div class="button" ALIGN=LEFT>
    	<br>
          <button type="submit" >Responder</button>
      </div>
  </form>
  
 </div>
</body>
<!-- Cuerpo del documento --><!-- Cuerpo del documento --><!-- Cuerpo del documento --><!-- Cuerpo del documento --><!-- Cuerpo del documento -->
</div>
</div>
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