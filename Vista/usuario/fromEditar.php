<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <form class="form-group" action="?controlador=usuario&accion=editarUsuario" id="eUsuario" method="post"> <br>
      <h1 class="text-center" >Usuario <?php echo $datos['nombre_usu']; ?> </h1>
      <div class="form-group">
         <label for="">Nombre</label>
         <input type="text" name="nombre" placeholder="Nombre" id="nombre" value="<?php echo $datos['nombre_usu']; ?>" class="form-control" required >
      </div>
      <div class="form-group">
         <label for="">Apellido</label>
         <input type="text" name="apellido" id="apellido" placeholder="Apellido" value="<?php echo $datos['apellido_usu']; ?>" class="form-control" required >
      </div>
      <div class="form-group">
         <label for="">Correo</label>
         <input type="text" name="correo" id="correo" placeholder="Correo" value="<?php echo $datos['correo_usu']; ?>" class="form-control" required >
      </div>
      <div class="form-group">
         <input type="hidden" name="id" value="<?php echo $datos['id_usu']; ?>" required >
      </div>
      <div class="from-group">
        <button class="btn btn-outline-success center">ACTUALIZAR USUARIO</button>
        <input type="hidden" name="opcion" value="1" required>
      </div>
    </form>
  </div>
  <div class="col-md-4">
  </div>
</div>
