<?php
//Se invoca el archivo que contiene la clase que permite la conexión a la BD
require_once('conexion.php');

//Clase Usuarios
class Usuarios{
  private $id;
  private $usuario;
  private $contrasena;


 public function validarUsuario($usuario, $contrasena){
  $this -> usuario = $usuario;
  $this -> contrasena = $contrasena;
  
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $validar = $conexion->query("call validarUsuario('$this->usuario', '$this->contrasena')");


    //Se retorna el resultado de la consulta
  return $validar;
}//Fin función crerUsuario


}//Fin de la clase Usuarios