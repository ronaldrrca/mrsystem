<?php

//Se invoca el archivo que contiene la clase que permite la conexión a la BD
require_once('conexion.php');

class Compras{
  private $id;
  private $fecha;
  private $valor;
  private $canal;
  private $id_articulo;
  private $descripcion_articulo;
  private $cantidad_articulo; 
  private $valor_articulo; 
  private $subtotal_articulo; 
  private $link_articulo;
  
  //**************************************************** */

public function listarCompras(){
    
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $listar = $conexion->query("call listarCompras()");


    //Se retorna el resultado de la consulta
  return $listar;
}//Fin función listarVentas


public function verCompra($idCompra){
  $this->id = $idCompra;

  //Se instancia la clase conexión
  $objConexion = new Conexion();

  //Se invoca la función conectarse d ela clase Conexion
  $conexion = $objConexion -> conectarse();

  $ver = $conexion->query("call verCompra('$this->id')");

  return $ver;
}//Fin de la funcción registrar enta


public function consultarUltimoIdCompras(){
  //Se instancia la clase Conexion
 $objConexion = new Conexion();

 //Se invoca la función conectarse() de la clase Conexion
 $conexion = $objConexion -> conectarse();

$consultar = $conexion->query("call consultarUltimoIdCompras()");


  //Se retorna el resultado de la consulta
 return $consultar;

}//Fin de la funcion consultarUltimoIdCompras



  public function registrarCompra($fechaCompra, $valorCompra, $canalCompra){
    $this->fecha=$fechaCompra;
    $this->valor=$valorCompra;
    $this->canal=$canalCompra;
            
    //Se instancia la clase conexión
    $objConexion = new Conexion();

    //Se invoca la función conectarse d ela clase Conexion
    $conexion = $objConexion -> conectarse();

    $registrar = $conexion->query("call registrarCompra('$this->fecha', '$this->valor', '$this->canal')");

    return $registrar;
  }//Fin de la funcción registrar enta



  public function registrarLineaCompra($idCompra, $idArticulo, $descripcionArticulo, $cantidadArticulo, $valorArticulo, $subtotalArticulo, $canalArticulo){
    $this->id=$idCompra;
    $this->id_articulo=$idArticulo;
    $this->descripcion_articulo=$descripcionArticulo;
    $this->cantidad_articulo=$cantidadArticulo;
    $this->valor_articulo=$valorArticulo;
    $this->subtotal_articulo=$subtotalArticulo;
    $this->canal=$canalArticulo;
    
    //Se instancia la clase conexión
    $objConexion = new Conexion();

    //Se invoca la función conectarse d ela clase Conexion
    $conexion = $objConexion -> conectarse();

    $registrar = $conexion->query("call registrarLineaCompra('$this->id', '$this->id_articulo', '$this->descripcion_articulo', '$this->cantidad_articulo', '$this->valor_articulo', '$this->subtotal_articulo', '$this->canal')");

    return $registrar;
  }//Fin de la función registrarLineaVenta


   //******************************************** */

  public function consultarTotalCompras(){
    //Se instancia la clase conexión
    $objConexion = new Conexion();

    //Se invoca la función conectarse d ela clase Conexion
    $conexion = $objConexion -> conectarse();

    $consultar = $conexion->query("call consultarTotalCompras()");

    return $consultar;
  }//Fin de la función consultarTotalCompras


 



}//Fin de la clase Gastos

 ?>
