<br> <h1  class="text-center">Listado De Publicaciones</h1> <br>
<?php
if (isset($_SESSION['nombre'])) {
      if ($_SESSION['rol'] ==1) {
      echo "<button class='btn btn-outline-success'> <a  class='text-dark nav-link' href='?controlador=publicacion&accion=fromRPublicacion'>Crear Publicacion</a></button>";
    }
  }
?>
<?php
if (isset($_SESSION['nombre'])) {
      if ($_SESSION['rol'] ==1) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>TITULO</th>";
        echo "<th>CONTENIDO</th>";
        echo "<th>CATEGORIA</th>";
        echo "<th>FECHA CREACION</th>";
        echo "<th>EDITAR</th>";
        echo "<th>ELIMINAR</th>";
        echo "</tr>";
        foreach ($r as $key => $value) {
          echo "<tr>";
          echo "<td> <a class='text-dark' href='?controlador=publicacion&accion=show&id=".$value['id_pub']."'>".$value['titu_publi']."</a></td>";
          echo "<td> <a class='text-dark' href='?controlador=publicacion&accion=show&id=".$value['id_pub']."'>".$value['cont_publi']."</a></td>";
          echo "<td> ".$value['nombre_cat']."</td>";
          echo "<td> <a class='text-dark' href='?controlador=publicacion&accion=show&id=".$value['id_pub']."'>".$value['fecha_pub']."</a></td>";
          echo "<td> <a href='?controlador=publicacion&accion=frmEditar&id=".$value['id_pub']."'><button class='btn btn-outline-warning'>EDITAR</button></a></td>";
          echo "<td> <a href='?controlador=categoria&accion=eliminar&id=".$value['id_cat']."'><button class='btn btn-outline-dark'>ELIMINAR</button></a></td>";
          echo "</tr>";
          }
          echo "</table>";
     }
   }
?>
