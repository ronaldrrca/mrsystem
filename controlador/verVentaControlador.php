<?php
require_once('../../modelo/ventas.php');

$idVenta=$_GET['id_venta'];

//Se instancia la clase usuarios
  $objVentas=new Ventas;

//Se invoca la función litarusuarios
$ver=$objVentas->verVenta($idVenta);
$datos_venta = [];

while ($resultado = $ver->fetch_assoc()) {
  array_push($datos_venta, $resultado);
}



