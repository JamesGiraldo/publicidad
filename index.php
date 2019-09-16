<?php
session_start();
require_once "conexion.php";
//isset(var), valida si existe una variable
if (isset($_GET ["controlador"]) && isset($_GET["accion"]) ) {
    // Capturamos los valores de las variables
    $cnt = $_GET ["controlador"];
    $acc = $_GET["accion"];
} else {
  $cnt = "inicio";
  $acc = "index";
}
if (!isset($_POST["opcion"])) {
  require_once "Vista/plantilla.php";
}else {
  require_once "rutas.php";
}

  // echo sha1(1234);

?>
