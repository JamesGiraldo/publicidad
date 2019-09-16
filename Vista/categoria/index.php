<h1  class="text-center">Listado De Categorias</h1> <br>
<button class="btn btn-outline-success"> <a  class=" text-dark nav-link" href="?controlador=categoria&accion=fromRCategoria">Registrar Categoria</a></button>
<?php
if (isset($_SESSION['nombre'])) {
      if ($_SESSION['rol'] ==1) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>NOMBRE</th>";
        echo "<th>EDITAR</th>";
        echo "<th>ELIMINAR</th>";
        echo "</tr>";
        foreach ($r as $key => $value) {
          echo "<tr>";
          echo "<td> <a class='text-dark' href='?controlador=categoria&accion=show&id=".$value['id_cat']."'>".$value['nombre_cat']."</a></td>";
          echo "<td> <a href='?controlador=categoriao&accion=frmEditar&id=".$value['id_usu']."'><button class='btn btn-outline-warning'>EDITAR</button></a></td>";
          echo "<td> <a href='?controlador=categoria&accion=eliminar&id=".$value['id_usu']."'><button class='btn btn-outline-dark'>ELIMINAR</button></a></td>";
          echo "</tr>";
          }
          echo "</table>";
     }
   }
?>
