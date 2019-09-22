<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <form class="form-group" action="?controlador=categoria&accion=editarCategoria" id="eUsuario" method="post"> <br>
      <h1 class="text-center" >Publicacion <?php echo $datos['titu_publi']; ?> </h1>
      <div class="form-group">
         <label for="">Titulo</label>
         <input type="text" name="titulo" id="titulo" value="<?php echo $datos['titu_publi']; ?>" placeholder="Titulo" class="form-control" required >
      </div>
      <div class="form-group">
         <label for="">Contenido</label>
         <textarea class="form-control" name="contenido" id="contenido" value="<?php echo $datos['cont_publi']; ?>" placeholder="contenido" required aria-label="With textarea"></textarea>
      </div>
      <div class="form-group">
         <label for="">Fecha</label>
         <input type="date" name="fecha" id="fecha" value="<?php echo $datos['fecha_pub']; ?>" class="form-control" required >
      </div>
      <div class="form-group">
        <input type="hidden" name="opcion" value="1" required>
      </div>
      <div class="form-group">
        <button class="btn btn-outline-success">ACTUALIZAR</button>
      </div>
    </form>
  </div>
  <div class="col-md-4">
  </div>
</div>
