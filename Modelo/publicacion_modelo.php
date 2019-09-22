<?php
  class publicacion_modelo
  {
    public function listadoPublicacion(){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "SELECT * FROM publicacion";
      $s = $c->prepare($sql);
      $s->execute();
      $datos = $s->fetchAll();
      return $datos;
    }
    public function registroPublicacion($titulo,$contenido, $fecha){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "INSERT INTO publicacion (titu_publi,cont_publi,fecha_pub) VALUES (:titulo , :contenido , :fecha)";
      $s = $c->prepare($sql);
      $r = $s->execute( array("titulo"=> $titulo, "contenido"=> $contenido, "fecha"=>$fecha));
      return $r;
    }
    public function eliminarPublicacion($id){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "DELETE FROM publicacion WHERE id_pub=".$id;
      $s = $c->prepare($sql);
      $respuesta = $s->execute();
      return $respuesta;
    }
    public function buscarPorID($id){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "SELECT * FROM publicacion WHERE id_pub =".$id;
      $s = $c->prepare($sql);
      $s->execute();
      $datos = $s->fetch();
      return $datos;
    }

    public function editarPublicacion($titulo,$contenido,$fecha,$id){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "UPDATE publicacion SET titu_publi =:n, cont_publi =:a , fecha_pub =:c WHERE id_pub=".$id ;
      $s = $c->prepare($sql);
      $r = $s->execute(array("n"=>$titulo,"a"=>$contenido,"c"=>$fecha));
      return $r;
    }
  }
?>
