<?php
  class publicacion_controlador
  {
    public function index()
    {
      $um = new publicacion_modelo();
      $r = $um->listadoPublicacion();
      require_once "Vista/publicacion/index.php";
    }
    public function frmNuevaPubli(){
        $um = new post_modelo();
        $cat = $um->listadoCategoria();
        require_once 'vistas/publicacion/fromRegistro.php';
    }
    public function __construct(){
      require_once "Modelo/publicacion_modelo.php";
    }
    public function fromRPublicacion()
    {
      $um = new publicacion_modelo();
      $cat = $um->listadoCatategoria2();
      require_once "Vista/publicacion/fromRegistro.php";
    }
    public function regPublicacion(){
      extract($_REQUEST);
      $um = new publicacion_modelo();
      $r = $um-> registroPublicacion($titulo,$categoria,$contenido,$id_usu);
      if($r > 0) {
        //echo "<br /> Usuario Registrado";
       echo  json_encode(array("texto"=>"Publicacion registrada", "estado"=>"success"));
      }else{
          //echo "<br /> Error Al Momento De Registrarse";
        echo  json_encode(array("texto"=>"Error Al Registrar Publicacion", "estado"=>"danger"));
      }
    }
      public function eliminar(){
        if (isset($_GET['id'])){
          $id = $_GET['id'];
          $um = new publicacion_modelo();
          $r = $um->eliminarPublicacion($id);
          if ($r > 0){
            echo  json_encode(array("texto"=>"Publicacion Eliminada", "estado"=>"success"));
            header("Location: ?controlador=publicacion&accion=index");
           }
        }else{
            echo  json_encode(array("texto"=>"Error Al Eliminar", "estado"=>"danger"));
            header("Location: /publicidad");
          }
        }
      public function frmEditar(){
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          var_dump($id);
          $um = new publicacion_modelo();
          $datos = $um->buscarPorID($id);
          $um = new publicacion_modelo();
          $cat = $um->listadoCatategoria2();
          require_once "Vista/publicacion/fromEditar.php";
        }else{
          header("Location: /publicidad");
        }
      }

      public function show(){
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $um = new publicacion_modelo();
          $datos = $um->buscarPorID($id);
          require_once "Vista/publicacion/show.php";
      }else{
          header("Location: /APPREGISTRO");
        }
      }

      // public function editarPublicacion(){
      //   if (isset($_POST['id'])) {
      //       extract($_POST);
      //       $um = new publicacion_modelo();
      //       $r = $um->editarPublicacion($contenido,$fecha,$id);
      //       if ($r > 0) {
      //         //echo "<br /> Usuario Editado";
      //         echo  json_encode(array("texto"=>"Publicacion Editada", "estado"=>"warning"));
      //       }
      //   }else{
      //         echo  json_encode(array("texto"=>"Error Al Editar", "estado"=>"danger"));
      //         header("Location: /publicidad");
      //   }
      // }
      public function editarPublicacion(){
       if(isset($_POST['id'])) {
          extract($_POST);
          $um = new publicacion_modelo();
          $r = $um->editarPublicacion($id, $titulo, $categoria,$contenido);
          if ($r > 0) {
              echo  json_encode(array("texto"=>"Publicacion Editada", "estado"=>"warning"));
          }
        }else {
          echo  json_encode(array("texto"=>"Error Al Editar", "estado"=>"danger"));
          header("Location: /publicidad");
      }
    }
  }
?>
