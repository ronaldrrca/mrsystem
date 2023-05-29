<?php

//Se invoca el archivo que contiene la clase que permite la conexión a la BD
require_once('conexion.php');

class Ventas{
  private $id_venta;
  private $fecha;
  private $valor;
  private $gastos;
  private $canal;
  private $numeroMl;
  private $entregado;
  private $cobrado;
  private $total_venta;
  private $id_articulo;
  private $descripcion_articulo;
  private $cantidad_articulo;
  private $valor_articulo;
  private $subtotal_articulo;
  private $anio_consulta;
  private $mes_consulta;


public function listarVentas(){
    
  //Se instancia la clase Conexion
  $objConexion = new Conexion();

  //Se invoca la función conectarse() de la clase Conexion
  $conexion = $objConexion -> conectarse();

     $listar = $conexion->query("call listarVentas()");


    //Se retorna el resultado de la consulta
  return $listar;
}//Fin función listarVentas


public function verVenta($idVenta){
  $this->id_venta=$idVenta;
   //Se instancia la clase Conexion
   $objConexion = new Conexion();

   //Se invoca la función conectarse() de la clase Conexion
   $conexion = $objConexion -> conectarse();
 
  $ver = $conexion->query("call verVenta($this->id_venta)");
 
 
  //Se retorna el resultado de la consulta
   return $ver;
  }//Fin de la función ver venta


  public function registrarVenta($fechaVenta, $valorVenta, $gastosVenta, $canalVenta, $numeroMlVenta, $entregado_venta, $cobrado_venta){
    $this->fecha=$fechaVenta;
    $this->valor=$valorVenta;
    $this->gastos=$gastosVenta;
    $this->canal=$canalVenta;
    $this->numeroMl=$numeroMlVenta;
    $this->entregado=$entregado_venta;
    $this->cobrado=$cobrado_venta;
    //Se instancia la clase conexión
    $objConexion = new Conexion();

    //Se invoca la función conectarse d ela clase Conexion
    $conexion = $objConexion -> conectarse();

    $registrar = $conexion->query("call registrarVenta('$this->fecha', '$this->valor', '$this->gastos', '$this->canal', '$this->numeroMl', '$this->entregado', '$this->cobrado')");

    return $registrar;
  }//Fin de la funcción registrar venta


  public function registrarLineaVenta($idVenta, $idArticulo, $descripcionArticulo, $cantidadArticulo, $valorArticulo, $subtotalArticulo){
    $this->id_venta=$idVenta;
    $this->id_articulo=$idArticulo;
    $this->descripcion_articulo=$descripcionArticulo;
    $this->cantidad_articulo=$cantidadArticulo;
    $this->valor_articulo=$valorArticulo;
    $this->subtotal_articulo=$subtotalArticulo;

    //Se instancia la clase conexión
    $objConexion = new Conexion();

    //Se invoca la función conectarse d ela clase Conexion
    $conexion = $objConexion -> conectarse();

    $registrar = $conexion->query("call registrarLineaVenta('$this->id_venta', '$this->id_articulo', '$this->descripcion_articulo', '$this->cantidad_articulo', 
    '$this->valor_articulo', '$this->subtotal_articulo')");

    return $registrar;
  }//Fin de la función registrarLineaVenta


  
  public function consultarUltimoIdVentas(){
    //Se instancia la clase Conexion
   $objConexion = new Conexion();

   //Se invoca la función conectarse() de la clase Conexion
   $conexion = $objConexion -> conectarse();
 
  $consultar = $conexion->query("call consultarUltimoIdVentas()");
 
 
    //Se retorna el resultado de la consulta
   return $consultar;

  }//Fin de la funcion listarArticulosParaVentas



  public function consultarTotalVentas(){
    //Se instancia la clase Conexion
   $objConexion = new Conexion();

   //Se invoca la función conectarse() de la clase Conexion
   $conexion = $objConexion -> conectarse();
 
  $consultar = $conexion->query("call consultarTotalVentas()");
 
 
    //Se retorna el resultado de la consulta
   return $consultar;

  }//Fin de la funcion consultarTotalVentas


  public function consultarTotalVentasMes($anioConsulta, $mesConsulta){
    $this->anio_consulta=$anioConsulta;
    $this->mes_consulta=$mesConsulta;
    //Se instancia la clase Conexion
   $objConexion = new Conexion();

   //Se invoca la función conectarse() de la clase Conexion
   $conexion = $objConexion -> conectarse();
 
  $consultar = $conexion->query("call consultarTotalVentasMes('$this->anio_consulta', '$this->mes_consulta')");
 
 
    //Se retorna el resultado de la consulta
   return $consultar;

  }//Fin de la funcion consultarTotalVentas


  public function consultarTotalPorIngresar(){
        //Se instancia la clase Conexion
   $objConexion = new Conexion();

   //Se invoca la función conectarse() de la clase Conexion
   $conexion = $objConexion -> conectarse();
 
  $consultar = $conexion->query("call consultarTotalPorIngresar()");
 
 
    //Se retorna el resultado de la consulta
   return $consultar;
  }//Fin de la función consultarTotalPorIngresar



}//Fin de la clase Ventas

 ?>
