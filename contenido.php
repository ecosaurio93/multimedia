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
<!-- FORMULARIO -->
<br></br>

<div>
<br></br>
<br></br>
<br></br>

<center>

<div>

<?php  session_start(); 


$id_curso=$_GET['dato'];
function formulario(){

//formulario de registro de usuario
echo ('<form id="contact-form" method="post" action="inserta_contenido.php" role="form">

    <div class="col-md-6">
                <div class="form-group">
                    <label for="tema">Titulo de tema </label>
                    <input id="tema" type="text" name="tema" class="form-control" placeholder="tema*" required="required" data-error="debe llenar este campo">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

  <div class="col-md-6">
 <div class="form-group">
    <label for="actividad">Descripcion</label>
    <textarea class="form-control" id="actividad" name="actividad" class="form-control" rows="3"></textarea>

  </div
  </div>





  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="enlace">Link</label>
       <input id="enlace" type="text" name="enlace" class="form-control">
    </div>
    </div>


    
 <div class="form-row">
    <div class="form-group col-md-8">
      <label for="tarea">Tarea</label>
       <textarea class="form-control" id="tarea" name="tarea" class="form-control" rows="3"></textarea>
    </div>
    </div>





  <button type="submit" class="btn btn-primary">Registrar</button>
</form>');



}
 $_SESSION["id_curse"] = $id_curso; 


formulario();



?>
</div>
</center>

</div>
<br></br><br>
<br>


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
