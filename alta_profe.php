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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">REGISTRO DE PROFESOR</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="alta_alumno.php">Registro Alumno</a>
            </li>
			
			 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="alta_profe.php">Registro Profesor</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
<!-- FORMULARIO -->
<br></br>

<div>
<br></br>
<br></br>
<br></br>
<?php  


function formulario(){

//formulario de registro de usuario
echo ('<form id="contact-form" method="post" action="alta_profe2.php" role="form">

    <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario">USUARIO *</label>
                    <input id="usuario" type="text" name="usuario" class="form-control" placeholder="nombre de usuario *" required="required" data-error="Nombre de usuario requerido">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

   <div class="col-md-6">
                <div class="form-group">
                    <label for="pass">CONTRASEÑA *</label>
                    <input id="pass" type="password" name="pass" class="form-control" placeholder="introduzca su contraseña*" required="required" data-error="la contraseña es requerida">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
    <div class="col-md-6">
                <div class="form-group">
                    <label for="pass2">REPITA CONTRASEÑA *</label>
                    <input id="pass2" type="password" name="pass2" class="form-control" placeholder="repita su contraseña*" required="required" data-error="la contraseña es requerida">
                    <div class="help-block with-errors"></div>
                </div>
            </div>



   <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">NOMBRE DEL PROFESOR *</label>
                    <input id="nombre" type="text" name="nombre" class="form-control" placeholder="introduzca su nombre*" required="required" data-error="Su nombre es requerido">
                    <div class="help-block with-errors"></div>
                </div>
            </div>





      <div class="col-md-6">
                <div class="form-group">
                    <label for="escuela">ESCUELA</label>
                    <input id="escuela" type="text" name="escuela" class="form-control">
                    
                </div>
            </div>





   <div class="col-md-6">
                <div class="form-group">
                    <label for="correo">CORREO ELECTRONICO INSTITUCIONAL *</label>
                    <input id="correo" type="text" name="correo" class="form-control" placeholder="introduzca su correo" required="required" data-error="Su correo es requerido">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

<br>

  <button type="submit" class="btn btn-primary">Registrar</button>
</form>');

}



formulario();




?>

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
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
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
