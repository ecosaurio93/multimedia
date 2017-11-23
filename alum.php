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

              <li class="dropdown ">
           <a   class="dropdown-toggle nav-link js-scroll-trigger"  data-toggle="dropdown" href="#">Administración<span class="caret"></span>
           </a>
         
          <ul class="dropdown-menu ">
            <li><a class="nav-link js-scroll-trigger" href="curso.php">Cursos</a></li>
          
           </ul>
        </li>  

             <li class="dropdown ">
           <a  class="dropdown-toggle nav-link  js-scroll-trigger"  data-toggle="dropdown" href="#">Usuarios<span class="caret"></span>
           </a>&nbsp
          <ul class="dropdown-menu ">
         
            <li><a class="nav-link js-scroll-trigger" href="ad.php">Admin</a></li>
            <li><a class="nav-link js-scroll-trigger" href="alum.php">Alumnos</a></li>
             <li><a class="nav-link js-scroll-trigger" href="profe.php">Profesores</a></li>
           </ul>
        </li>  
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Salir</a>
          </li>
            
          </ul>
             
        </div>
      </div>
    </nav>

<br></br>
</br>


               
<br></br>
<br></br>


 <!-- Content page -->
    <div class="container-fluid">
      <div class="page-header">
        <h1 class="text-right"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Usuarios <small> Alumnos </small></h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              
              <li><a href="#list" data-toggle="tab">Lista de Alumnos</a></li>
          </ul>
          
              <div class="tab-pane fade" id="list">
              <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">Usuario</th>
                      <th class="text-center">Nombre</th>
                      <th class="text-center">Carrera</th>
                      <th class="text-center">Escuela</th>
                      <th class="text-center">Correo</th>
                      <th class="text-center">Actualizar</th>
                      <th class="text-center">Borrar</th>


                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Carl</td>
                      <td>Carlos</td>
                      <td>Ciencias Físico Matemáticas</td>
                      <td>BUAP</td>
                      <td>carlos@gmail.com</td>
                      
                      <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                      <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                       <td>User</td>
                      <td>Pedro</td>
                      <td>FCC</td>
                      <td>BUAP</td>
                      <td>user@gmail.com</td>
                      <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                      <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>User1</td>
                      <td>Sara</td>
                      <td>FCC</td>
                      <td>BUAP</td>
                      <td>user1@gmail.com</td>
                      <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                      <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>User2</td>
                      <td>Ximena/td>
                      <td>FCC</td>
                      <td>BUAP</td>
                      <td>ximena@gmail.com</td>
                      <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                      <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                    </tr>
                  </tbody>
                </table>
                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#!">«</a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li><a href="#!">»</a></li>
                </ul>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
