<?php
//Se requiere el archivo que contiene la clase usuarios, con la ruta para llamarlo desde la vista
require_once('../../modelo/gastos.php');

//Se instancia la clase usuarios
  $objGastos=new Gastos;

//Se invoca la función litarusuarios
$listar=$objGastos->listarGastos();
// $arrayGastos = array();

//Recibimos la respuesta y la almacenamos en un array
// while ($elemento = $listar->fetch_assoc()) {
// array_push($arrayGastos, $elemento);
// }


//Imprimimos el array en formato JSON
// print_r(json_encode($myArray));
// die();

 ?>
