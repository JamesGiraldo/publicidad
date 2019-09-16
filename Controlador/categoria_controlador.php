<?php
  class categoria_controlador
  {
    public function index()
    {
      $um = new categroia_modelo();
      $r = $um->listadoCategoria();
      require_once "Vista/categoria/index.php";
    }
    public function __construct(){
      require_once "Modelo/categoria_modelo.php";
    }
    public function fromRUsuario()
    {
      require_once "Vista/categoria/fromRegistro.php";
    }
  }
?>
