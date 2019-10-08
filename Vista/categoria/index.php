<br> <h1  class="text-center">Listado De Categorias</h1> <br>
<?php
if (isset($_SESSION['nombre'])) {
      if ($_SESSION['rol'] ==1) {
      echo "<button class='btn btn-outline-success'><a class='text-dark nav-link' href='?controlador=categoria&accion=fromRCategoria'>Nueva Categoria</a></button>";
    }
  }
?>
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
          echo "<td> <a href='?controlador=categoria&accion=frmEditar&id=".$value['id_cat']."'><button class='btn btn-outline-warning'>EDITAR</button></a></td>";
          echo "<td> <a href='?controlador=categoria&accion=eliminar&id=".$value['id_cat']."'><button class='btn btn-outline-dark'>ELIMINAR</button></a></td>";
          echo "</tr>";
          }
          echo "</table>";
     }
   }else {
     echo "<table class='table'>";
     echo "<tr>";
      echo "<th>NOMBRE</th>";
     echo "</tr>";
     foreach ($r as $key => $value) {
       echo "<tr>";
       echo "<td> <a class='text-dark' href='?controlador=categoria&accion=show&id=".$value['id_cat']."'>".$value['nombre_cat']."</a></td>";
       echo "</tr>";
       }
       echo "</table>";
   }
?>

  <!-- // echo "<table class='table'>";
  // echo "<tr>";
  // echo "<th>NOMBRE</th>";
  // echo "</tr>";
  // foreach ($r as $key => $value) {
  //   echo "<tr>";
  //   echo "<td> <a class='text-dark' href='?controlador=categoria&accion=show&id=".$value['id_cat']."'>".$value['nombre_cat']."</a></td>";
  //   echo "</tr>";
  //   }
  //   echo "</table>"; -->

<button class="btn btn-outline-success"> <a  class=" text-dark nav-link" href="?controlador=publicacion&accion=index">Publicaciones</a></button>
