<?php
// Iniciar una nueva sesión o reanudar la existente
session_start();
//Se requiere el archivo que contiene la clase Ventas
require_once('../modelo/articulos.php');

$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$inventario=$_POST['inventario'];

$objArticulos = new Articulos;

$crear = $objArticulos->crearArticulo($descripcion, $precio, $inventario);

if ($crear) {
    echo '<script> alert ("Artículo creado. Presione aceptar para continuar"); </script>';
}

echo "<meta http-equiv='refresh' content='0;../vista/html/articulos.php' />";

?>