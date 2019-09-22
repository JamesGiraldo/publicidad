<?php
  class categoria_controlador
  {
    public function index()
    {
      $um = new categoria_modelo();
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
    public function regCategoria(){
      extract($_REQUEST);
      $um = new categoria_modelo();
      $r = $um-> registroCategoria($nombre);
      if($r > 0) {
        //echo "<br /> Categoria Registrada";
       echo  json_encode(array("texto"=>"Categoria registrada", "estado"=>"success"));
      }else{
          //echo "<br /> Error Al Momento De Registrarse";
        echo  json_encode(array("texto"=>"Error Al Registrar", "estado"=>"danger"));
      }
    }
    public function editarCategoria(){
      if (isset($_POST['id'])) {
          extract($_POST);
          $um = new categoria_modelo();
          $r = $um->editarCategoria($nombre,$id);
          if ($r > 0) {
            //echo "<br /> Usuario Editado";
            echo  json_encode(array("texto"=>"Categoria Editada", "estado"=>"warning"));
          }
      }else{
            echo  json_encode(array("texto"=>"Error Al Editar", "estado"=>"danger"));
            header("Location: /publicidad");
      }
    }
    public function frmEditar(){
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $um = new categoria_modelo();
          $datos = $um->buscarPorID($id);
          require_once "Vista/categoria/fromEditar.php";
      }else{
          header("Location: /publicidad");
        }
    }
    public function show(){
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $um = new categoria_modelo();
        $datos = $um->buscarPorID($id);
        require_once "Vista/categoria/show.php";
    }else{
        header("Location: /APPREGISTRO");
      }
    }
  }
?>
