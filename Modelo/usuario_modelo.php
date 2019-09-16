<?php
  class usuario_modelo
  {
      public function listadoUsuario(){
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "SELECT * FROM usuario";
        $s = $c->prepare($sql);
        $s->execute();
        $datos = $s->fetchAll();
        return $datos;
      }
      public function validar_usuario($usuario , $password)
      {
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "SELECT * FROM usuario WHERE correo_usu = :usuario AND contra_usu = :password";
        $s = $c->prepare($sql);
        $r = $s->execute( array( "usuario" => $usuario, "password" => sha1($password)) );
        $r = $s->rowCount();
        if ($r > 0) {
          $datos = $s->fetch();
        }else {
          $datos = 0;
        }
        var_dump($datos);
          return $datos;
      }

      public function registroUsuario($nombre,$apellido,$correo,$password){
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "INSERT INTO usuario (nombre_usu,apellido_usu,correo_usu,contra_usu,rol_usu) VALUES (:nombre , :apellido , :correo , :password , :rol)";
        $s = $c->prepare($sql);
        $r = $s->execute( array("nombre"=> $nombre, "apellido"=> $apellido, "correo"=>$correo, "password"=>sha1($password),"rol"=>2 ));//md5 , sha1 ,password_hash
        return $r;
      }
      public function eliminarUsuario($id){
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "DELETE FROM usuario WHERE id_usu=".$id;
        $s = $c->prepare($sql);
        $respuesta = $s->execute();
        return $respuesta;
      }

      public function buscarPorID($id){
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "SELECT * FROM usuario WHERE id_usu =".$id;
        $s = $c->prepare($sql);
        $s->execute();
        $datos = $s->fetch();
        return $datos;
      }

      public function editarUsuario($nombre,$apellido,$correo,$id){
        $i = new conexion();
        $c = $i->getConexion();
        $sql = "UPDATE usuario SET nombre_usu =:n, apellido_usu =:a , correo_usu =:c WHERE id_usu=".$id ;
        $s = $c->prepare($sql);
        $r = $s->execute(array("n"=>$nombre,"a"=>$apellido,"c"=>$correo));
        return $r;
      }
  }
