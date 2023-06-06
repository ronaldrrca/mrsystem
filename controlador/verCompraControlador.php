<?php
//Se requiere el archivo que contiene la clase usuarios, con la ruta para llamarlo desde la vista
require_once('../../modelo/compras.php');

$idCompra=$_GET['id_compra'];
// echo $idVenta; die();

//Se instancia la clase usuarios
  $objCompras=new Compras;

//Se invoca la función litarusuarios
$ver=$objCompras->verCompra($idCompra);
$datos_compra = [];

// Recibimos la respuesta y la almacenamos en un array
while ($elemento = $ver->fetch_assoc()) {
array_push($datos_compra, $elemento);
}


// Imprimimos el array en formato JSON
// print_r(json_encode($arrayCompra));
// die();