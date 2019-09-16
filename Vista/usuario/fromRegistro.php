<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <form class="form-group" action="?controlador=usuario&accion=regUsuario" method="post" id="rUsuario" >
          <h1 class="text-center" >Registrar</h1>
          <div class="form-group">
             <label for="">Nombre</label>
             <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre" class="form-control" required >
          </div>
          <div class="form-group">
             <label for="">Apellido</label>
             <input type="text" name="apellido" id="apellido" value="" placeholder="Apellido" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Correo</label>
            <input type="text" name="correo" id="correo" value="" placeholder="Correo" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Contraseña</label>
            <input type="password" name="password" id="password" value="" placeholder="Contraseña" class="form-control" required>
            <input type="hidden" name="opcion" value="1" required>
          </div>
          <div class="form-group">
            <button class="btn btn-outline-success">REGISTAR</button>
          </div>
      </form>
    </div>
    <div class="col-md-4">
    </div>
</div>
