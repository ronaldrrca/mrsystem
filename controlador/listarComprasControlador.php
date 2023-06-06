<?php
//Se requiere el archivo que contiene la clase Compras
require_once('../../modelo/compras.php');

//Se instancia la clase Compras
  $objCompras=new Compras;

//Se invoca la función litarusuarios
$listar=$objCompras->listarCompras();
// $arrayCompras = array();

//Recibimos la respuesta y la almacenamos en un array
// while ($elemento = $listar->fetch_assoc()) {
// array_push($arrayCompras, $elemento);
// }


//Imprimimos el array en formato JSON
// print_r(json_encode($arrayCompras));
// die();

 ?>
