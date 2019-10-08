<div class="row"> <br>
  <div class="col-md-4"><br>
      <button class="btn-outline-success btn">  <a class="nav-link" href="?controlador=publicacion&accion=index">Ir Publicaciones</a></button>
    <h1>Publicacion  <?php echo $datos['titu_publi']; ?></h1>
    <div class="">
    __________________________________________________________________________________________________________________________________________________________________________________________________________________________________
    </div><br>
    <label for="">TITULO:</label> <?php echo $datos['titu_publi']; ?><br>
    <label for="">CONTENIDO:</label> <?php echo $datos['cont_publi']; ?><br>
    <label for="">CATEGORIA:</label> <?php echo $datos['id_cat']; ?><br>
    <button class="btn-outline-success btn">  <a class="nav-link" href="?controlador=publicacion&accion=index">Comentar</a></button>
  </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    </div>
</div>
