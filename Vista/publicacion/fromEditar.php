<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <form class="form-group" action="?controlador=publicacion&accion=editarPublicacion" id="eUsuario" method="post"> <br>
      <h1 class="text-center" >Modificar <?php echo $datos['titu_publi']; ?> </h1>
      <div class="form-group">
         <label for="">Titulo</label>
         <input type="text" name="titulo" id="titulo" value="<?php echo $datos['titu_publi']; ?>" placeholder="Titulo" class="form-control" required >
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Categorias</label>
          <select class="form-control" name="categoria" id="Categoria">
            <?php foreach ($cat as $key => $value) { ?>
            <option value="<?php echo $value['id_cat']; ?>"><?php echo $value['nombre_cat']; ?></option>
            <?php } ?>
          </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Contenido</label>
        <textarea name="contenido" id="Contenido" class="form-control" rows="8" cols="80" placeholder="Agregar contenido"> <?php echo $datos['cont_publi']; ?> </textarea>
      </div>
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $datos['id_pub']; ?>">
      </div>
      <div class="form-group">
        <button class="btn btn-outline-success">ACTUALIZAR</button>
      </div>
    </form>
  </div>
  <div class="col-md-4">
  </div>
</div>
