<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <form class="form-group" action="?controlador=publicacion&accion=regPublicacion" method="post" id="rUsuario" > <br>
          <h1 class="text-center" >Crear Publicacion</h1>
          <div class="form-group">
             <label for="">Titulo</label>
             <input type="text" name="titulo" id="nombre" value="" placeholder="Titulo" class="form-control" required >
          </div>
          <div class="form-group">
             <label for="">Contenido</label>
             <textarea class="form-control" name="contenido" id="nombre" value="" placeholder="contenido" required aria-label="With textarea"></textarea>
          </div>
          <div class="form-group">
             <label for="">Fecha</label>
             <input type="date" name="fecha" id="nombre" value="" placeholder="Nombre" class="form-control" required >
          </div>
          <div class="form-group">
            <input type="hidden" name="opcion" value="1" required>
          </div>
          <div class="form-group">
            <button class="btn btn-outline-success">CREAR</button>
          </div>
      </form>
    </div>
    <div class="col-md-4">
    </div>
</div>
