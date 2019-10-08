<div class="row">
  <div class="col-md-4"> <br>
    <button class="btn btn-outline-success"> <a class=" text-dark nav-link" href="?controlador=publicacion&accion=index">Volver</a></button>
  </div>
  <div class="col-md-4"> <br> <h1>Nueva Publicacion </h1>
    <form method="post" action="?controlador=publicacion&accion=regPublicacion" id="rUsuario"> <br> <br>
      <div class="form-group">
        <label for="exampleInputEmail1">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="Titulo" aria-describedby="emailHelp" placeholder="ingrese titulo">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Contenido</label>
        <textarea name="contenido" id="Contenido" class="form-control" rows="8" cols="80" placeholder="Agregar contenido"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Categorias</label>
          <select class="form-control" name="categoria" id="Categoria">
            <?php foreach ($cat as $key => $value) { ?>
            <option value="<?php echo $value['id_cat']; ?>"><?php echo $value['nombre_cat']; ?></option>
            <?php } ?>
          </select>
      </div>
      <button type="submit" class="btn btn-outline-primary btn-lg">Guardar</button>
      <input type="hidden" name="opcion" value="1">
      <?php if (isset( $_SESSION['id_usu'])) { ?>
      <input type="hidden" name="id_usu" value="<?php echo $_SESSION['id_usu']; ?>">
      <?php } ?>
    </form>
  </div>
  <div class="col-md-4">
  </div>
</div>
