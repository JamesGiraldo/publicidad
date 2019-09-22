<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <form class="form-group" action="?controlador=categoria&accion=editarCategoria" id="eUsuario" method="post">
      <h1 class="text-center" >Usuario <?php echo $datos['nombre_cat']; ?> </h1>
      <div class="form-group">
         <label for="">Nombre</label>
         <input type="text" name="nombre" placeholder="Nombre" id="nombre" value="<?php echo $datos['nombre_cat']; ?>" class="form-control" required >
      </div>
      <div class="form-group">
         <input type="hidden" name="id" value="<?php echo $datos['id_cat']; ?>" required >
      </div>
      <div class="from-group">
        <button class="btn btn-outline-success center">ACTUALIZAR CATEGORIA</button>
        <input type="hidden" name="opcion" value="1" required>
      </div>
    </form>
  </div>
  <div class="col-md-4">
  </div>
</div>
