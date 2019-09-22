<?php
  class categoria_modelo
  {
    public function listadoCategoria(){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "SELECT * FROM categoria";
      $s = $c->prepare($sql);
      $s->execute();
      $datos = $s->fetchAll();
      return $datos;
    }
    public function registroCategoria($nombre){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "INSERT INTO categoria (nombre_cat) VALUES (:nombre)";
      $s = $c->prepare($sql);
      $r = $s->execute( array("nombre"=> $nombre));//md5 , sha1 ,password_hash
      return $r;
    }
    public function eliminarCategoria($id){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "DELETE FROM categoria WHERE id_cat=".$id;
      $s = $c->prepare($sql);
      $respuesta = $s->execute();
      return $respuesta;
    }
    public function buscarPorID($id){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "SELECT * FROM categoria WHERE id_cat =".$id;
      $s = $c->prepare($sql);
      $s->execute();
      $datos = $s->fetch();
      return $datos;
    }

    public function editarCategoria($nombre,$id){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "UPDATE categoria SET nombre_cat =:n WHERE id_cat=".$id ;
      $s = $c->prepare($sql);
      $r = $s->execute(array("n"=>$nombre));
      return $r;
    }
  }
?>
