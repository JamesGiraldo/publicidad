<br> <h1  class="text-center">Listado De Usuarios</h1> <br>
<button class="btn btn-outline-success"> <a  class=" text-dark nav-link" href="?controlador=usuario&accion=fromRUsuario">Registrar Usuarios</a></button>
<?php
if (isset($_SESSION['nombre'])) {
      if ($_SESSION['rol'] ==1) {
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>NOMBRE</th>";
        echo "<th>APELLIDO</th>";
        echo "<th>CORREO</th>";
        echo "<th>EDITAR</th>";
        echo "<th>ELIMINAR</th>";
        echo "</tr>";
        foreach ($r as $key => $value) {
          echo "<tr>";
          echo "<td> <a class='text-dark' href='?controlador=usuario&accion=show&id=".$value['id_usu']."'>".$value['nombre_usu']."</a></td>";
          echo "<td> <a class='text-dark' href='?controlador=usuario&accion=show&id=".$value['id_usu']."'>".$value['apellido_usu']."</a></td>";
          echo "<td> <a class='text-dark' href='?controlador=usuario&accion=show&id=".$value['id_usu']."'>".$value['correo_usu']."</a> </td>";
          echo "<td> <a href='?controlador=usuario&accion=frmEditar&id=".$value['id_usu']."'><button class='btn btn-outline-warning'>EDITAR</button></a></td>";
          echo "<td> <a href='?controlador=usuario&accion=eliminar&id=".$value['id_usu']."'><button class='btn btn-outline-dark'>ELIMINAR</button></a></td>";
          echo "</tr>";
          }
          echo "</table>";
     }
   }
?>
