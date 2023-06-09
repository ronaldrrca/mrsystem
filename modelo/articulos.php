<?php

//Se invoca el archivo que contiene la clase que permite la conexión a la BD
require_once('conexion.php');

class Articulos{
  private $id;
  private $descripcion;
  private $precio_sugerido;
  private $inventario;
  private $transito_ronald;
  private $transito_marianna;
  private $transito_celia;
  

public function verInventario(){
    
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $ver = $conexion->query("call verInventario()");


    //Se retorna el resultado de la consulta
  return $ver;
}//Fin función listarVentasverInventario


public function listarArticulos(){
  //Se instancia la clase Conexion
 $objConexion = new Conexion();

 //Se invoca la función conectarse() de la clase Conexion
 $conexion = $objConexion -> conectarse();

$listar = $conexion->query("call listarArticulos()");


  //Se retorna el resultado de la consulta
 return $listar;

}//Fin de la funcion listarArticulos


public function crearArticulo($descripcionArticulo, $precioArticulo, $inventarioArticulo){
  $this->descripcion=$descripcionArticulo;
  $this->precio_sugerido=$precioArticulo;
  $this->inventario=$inventarioArticulo;
  
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $crear = $conexion->query("call crearArticulo('$this->descripcion', '$this->precio_sugerido', '$this->inventario=$inventarioArticulo')");


    //Se retorna el resultado de la consulta
  return $crear;

}


public function consultarValorInvetario(){
    //Se instancia la clase Conexion
    $objConexion = new Conexion();

    //Se invoca la función conectarse() de la clase Conexion
    $conexion = $objConexion -> conectarse();

    $consultar = $conexion->query("call consutarValorVentaInventario()");

    return $consultar;
}





}//Fin de la clase Ventas

 ?>
