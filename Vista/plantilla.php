<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUBLICACIONES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="engine1/style.css"/>
    <link type="text/javascript" src="engine1/jquery.js"/>
    <script type="text/javascript" src="Recurso/default.js"></script>
    <script type="text/javascript" src="Recurso/bootstrap-notify.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/publicidad">Publicidades</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon">Hola</span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <?php
             if (!isset($_SESSION['nombre'])){
             echo '<a class="nav-link" href="?controlador=usuario&accion=fromLogin">Iniciar Sesion</a>';
             }
              ?>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="?controlador=usuario&accion=index">Usuarios</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Categorias</a>

             <!-- <a class="nav-link" href="?controlador=producto&accion=index">Productos</a> -->
           </li>
         </ul>
       </div>
       <?php if (isset($_SESSION['nombre'])){
           echo "".$_SESSION['nombre']." ".$_SESSION['apellido'];
           echo " . <a href='?controlador=usuario&accion=cerrarSession'>Cerrar Session</a>";
       }
       ?>
    </nav>
    <div class="row">
      <div class="col-md-12">
        <!-- El archivo rutas.php Gestionara  -->
        <?php  require_once "rutas.php"; ?>
      </div>
    </div>
  </body>
</html>
