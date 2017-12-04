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

  <?php
session_start(); 

if(!isset($_SESSION['user'])) header("Location:index.html");

  ?>  

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
							 <a class="dropdown-item" href="calificaciones_alumno.php">Calificaciones </a>
      						<div class="dropdown-divider"></div>
				
							<a class="dropdown-item" href="#">Blog </a>
      						<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="foro.php">Foro </a>
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

 
 <!-- Menú curso -->
 <section id="contact">
 <div class="container">
                        
  <div class="dropdown">
    <a   class="dropdown-toggle"  data-toggle="dropdown" href="#">Mis cursos<b class="caret"></b>
  </a>
    <ul class="dropdown-menu">
      <li><a class="nav-link js-scroll-trigger" href="#">HTML</a></li>
      <li><a class="nav-link js-scroll-trigger" href="#">CSS</a></li>
      <li><a class="nav-link js-scroll-trigger" href="#">JavaScript</a></li>
    </ul>
  </div>
</div>
               
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

  <!-- Busca curso -->


<div class="container">
  <h1 class="text-center">Busca Curso</h1>
  
  <form action="buscar.php">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="buscar">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">Buscar</button>
      </div>
    </div>
  </form>
</div>
</section>     
        



<br></br>
<br></br>
<br></br>
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
