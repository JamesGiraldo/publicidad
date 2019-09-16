<?php
  class usuario_controlador
  {
    public function index()
    {
      $um = new usuario_modelo();
      $r = $um->listadoUsuario();
      require_once "Vista/usuario/index.php";
    }
    public function __construct(){
      require_once "Modelo/usuario_modelo.php";
    }
    public function  fromLogin()
    {
        require_once "Vista/usuario/fromLogin.php";
    }
    public function fromRUsuario()
    {
      require_once "Vista/usuario/fromRegistro.php";
    }

    public function validar()
    {
        extract($_POST);
        $um = new usuario_modelo();
        $r = $um->validar_usuario($Usuario, $Contrasena);
        if ( is_array ($r)) {
          $_SESSION["nombre"]  =$r["nombre_usu"];
          $_SESSION["apellido"]  =$r["apellido_usu"];
          $_SESSION["rol"] =$r["rol_usu"];
          header("Location: /publicidad");
        }
        else {
          echo "Verifique Su Usuario Y Contraseña";
        }
    }
    public function cerrarSession(){
      session_destroy();
      header("Location: /publicidad");
    }
    public function regUsuario(){
      extract($_REQUEST);
      $um = new usuario_modelo();
      $r = $um-> registroUsuario($nombre,$apellido,$correo,$password);
      if($r > 0) {
        //echo "<br /> Usuario Registrado";
       echo  json_encode(array("texto"=>"Usuario registrado", "estado"=>"success"));
      }else{
          //echo "<br /> Error Al Momento De Registrarse";
        echo  json_encode(array("texto"=>"Error Al Registrar", "estado"=>"danger"));
      }
    }

      public function eliminar(){
        if (isset($_GET['id']))
         {
          $id = $_GET['id'];
          $um = new usuario_modelo();
          $r = $um->eliminarUsuario($id);
          if ($r > 0)
           {
            echo  json_encode(array("texto"=>"Usuario Eliminado", "estado"=>"success"));
            header("Location: ?controlador=usuario&accion=index");
           }
        }
          else
          {
            echo  json_encode(array("texto"=>"Error Al Eliminar", "estado"=>"danger"));
            header("Location: /publicidad");
          }
        }

      public function frmEditar(){
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $um = new usuario_modelo();
            $datos = $um->buscarPorID($id);
            require_once "Vista/usuario/fromEditar.php";
        }else{
            header("Location: /publicidad");
          }
      }

      public function show(){
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $um = new usuario_modelo();
          $datos = $um->buscarPorID($id);
          require_once "Vista/usuario/show.php";
      }else{
          header("Location: /APPREGISTRO");
        }
      }

      public function editarUsuario(){
        if (isset($_POST['id'])) {
            extract($_POST);
            $um = new usuario_modelo();
            $r = $um->editarUsuario($nombre,$apellido,$correo,$id);
            if ($r > 0) {
              //echo "<br /> Usuario Editado";
              echo  json_encode(array("texto"=>"Usuario Editado", "estado"=>"warning"));
            }
        }else{
              echo  json_encode(array("texto"=>"Error Al Editar", "estado"=>"danger"));
              header("Location: /publicidad");
        }
      }

  }
?>
