<?php

//Se invoca el archivo que contiene la clase que permite la conexión a la BD
require_once('conexion.php');

class Gastos{
  private $id;
  private $fecha;
  private $descripcion;
  private $monto;
  

public function listarGastos(){
    
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $listar = $conexion->query("call listarGastos()");


    //Se retorna el resultado de la consulta
  return $listar;
}//Fin función listarVentas




  public function registrarGasto($fechaGasto, $descripcionGasto, $montoGasto){
    $this->fecha=$fechaGasto;
    $this->descripcion=$descripcionGasto;
    $this->monto=$montoGasto;
    
    //Se instancia la clase conexión
    $objConexion = new Conexion();

    //Se invoca la función conectarse d ela clase Conexion
    $conexion = $objConexion -> conectarse();

    $registrar = $conexion->query("call registrarGasto('$this->fecha', '$this->descripcion', '$this->monto')");

    return $registrar;
  }//Fin de la funcción registrar enta

  

  public function consultarTotalGastos(){
    //Se instancia la clase conexión
    $objConexion = new Conexion();

    //Se invoca la función conectarse d ela clase Conexion
    $conexion = $objConexion -> conectarse();

    $consultar = $conexion->query("call consultarTotalGastos()");

    return $consultar;
  }//Fin de la función consultarTotalGastos


  



}//Fin de la clase Gastos

 ?>
