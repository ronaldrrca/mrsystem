<?php
//Se requiere el archivo que contiene la clase usuarios, con la ruta para llamarlo desde la vista
require_once('../../modelo/articulos.php');

//Se instancia la clase usuarios
  $objArticulos=new Articulos;

//Se invoca la función litarusuarios
$listar=$objArticulos->verInventario();
// $arrayInventario = array();



//Recibimos la respuesta y la almacenamos en un array
// while ($elemento = $ver->fetch_assoc()) {
// array_push($arrayInventario, $elemento);
// }


//Imprimimos el array en formato JSON
// print_r(json_encode($arrayInventario));
// die();

 ?>
