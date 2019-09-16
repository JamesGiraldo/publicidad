<?php
/* El Siguiente Codigo Gestiona El Contenido A mostrar o Procesar */
function cargarContenido($cnt , $acc){
  // validar si El archivo Existe
  if (file_exists("Controlador/".$cnt."_controlador.php")) {
      require_once "Controlador/".$cnt."_controlador.php";
      $clase = $cnt."_controlador";
      $i = new $clase();
      if (method_exists($i , $acc)) {
          $i->$acc();
      }else {
        echo "Ese Archivo no Existe";
        //header("Location: /APPREGISTRO");
      }
  }else {
    echo "Ese Archivo no Existe";
    //header("Location: /APPREGISTRO");
  }
}
// cnt = controlador
// acc = accion
cargarContenido($cnt , $acc);
