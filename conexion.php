<?php
class conexion{
     private $con;
  public function __construct(){
    try{
      $this-> con = new PDO("mysql:host=localhost;dbname=bd_post","root","");
      $this->con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo "error: ".$e;
    }
 }
   public function getConexion(){
    if ($this->con instanceof PDO) {
     return $this->con;
    }
  }
  public function cerrarConexion(){
  }
}
// PARA COMPROBAR LA CONEXION
// $i = new conexion();                 //creamos un objeto tipo conexion
// $c = $i->getConexion();              // Accedemos mediante el objeto al metodo
// $sql = "SELECT * FROM t_usuarios";   // establecemos la consulta
// $s = $c->prepare($sql);              // preparamos la consulta
// $s->execute();                       // ejecutamos la consulta
// $filas = $s->rowCount();             // retorna el numero de registro
// echo $filas;                         // inprime los registros encontrados
