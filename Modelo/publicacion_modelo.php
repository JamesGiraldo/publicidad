<?php
  class publicacion_modelo
  {
    public function listadoPublicacion(){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "SELECT * FROM publicacion inner join categoria on publicacion.id_cat=categoria.id_cat";
      $s = $c->prepare($sql);
      $s->execute();
      $datos = $s->fetchAll();
      return $datos;
    }
    public function listarPostc($id){
        $i = new conexion();
        $c = $i->getconexion();
        $sql = "SELECT * FROM publicacion WHERE id_cat=".$id;
        $s = $c->prepare($sql);
        $s->execute();
        $datos = $s->fetchALL();
        return $datos;
    }
    public function listadoCategoria(){
        $i = new conexion();
        $c = $i->getconexion();
        $sql = "SELECT * FROM categoria ";
        $s = $c->prepare($sql);
        $s->execute();
        $cat = $s->fetchALL();
        return $cat;
    }
    public function listadoCatategoria2(){
        $i = new conexion();
        $c = $i->getconexion();
        $sql = "SELECT * FROM categoria";
        $s = $c->prepare($sql);
        $s->execute();
        $cat = $s->fetchALL();
        return $cat;
    }
    public function registroPublicacion($titulo,$categoria,$contenido,$id_usu){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "INSERT INTO publicacion (titu_publi,id_cat,cont_publi,fecha_pub)
                                VALUES (:titulo , :categoria, :contenido, :id_usu)";
      $s = $c->prepare($sql);
      $r = $s->execute( array("titulo"=> $titulo, "categoria"=>$categoria, "contenido"=> $contenido, "id_usu"=>$id_usu));
      return $r;
    }
    //Eliminacion
    public function eliminarPublicacion($id){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "DELETE FROM publicacion WHERE id_pub=".$id;
      $s = $c->prepare($sql);
      $respuesta = $s->execute();
      return $respuesta;
    }
    public function eliminarcomentario($id){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "DELETE FROM comentario WHERE id_publi=".$id;
      $s = $c->prepare($sql);
      $r = $s->execute();
      return $r;
    }
    // fin Eliminacion
    public function buscarPorID($id){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "SELECT * FROM publicacion WHERE id_pub =".$id;
      $s = $c->prepare($sql);
      $s->execute();
      $datos = $s->fetch();
      return $datos;
    }

    public function editarPublicacion($id,$titulo,$categoria,$contenido){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "UPDATE publicacion SET titu_publi =:n, id_cat=:categoria, cont_publi =:a WHERE id_pub=".$id ;
      $s = $c->prepare($sql);
      $r = $s->execute(array("n"=>$titulo, "categoria"=>$categoria, "a"=>$contenido));
      return $r;
    }
  }
?>
