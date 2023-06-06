<?php
// Iniciar una nueva sesión o reanudar la existente
session_start();
//Se requiere el archivo que contiene la clase Ventas
require_once('../modelo/compras.php');

//Se reciben los valores que provienen del formulario
//Datos encabezado
$fechaVenta=$_POST['fecha'];
$canal_compra=$_POST['canal'];
$valor_compra=$_POST['total'];
$posicion_separacion;//Se obtiene la posición que nos permitirá separar el id de la decsripción en variables diferentes 

//Datos artículos
$articulo_linea_1=$_POST['articulo_1'];//Se recibe la información del artículo, un string con el id y la descripcion
$posicion_separacion=stripos($articulo_linea_1, " - ");//Se obtiene la posición que nos permitirá separar el id de la decsripción en variables diferentes 
$id_articulo_1=substr($articulo_linea_1, 0, $posicion_separacion);//Obteniendo el id
$descripcion_articulo_1 = substr($articulo_linea_1, $posicion_separacion+3);//Obteniendo la descripción
$cantidad_linea_1=$_POST['cantidad_linea_1'];
$valor_linea_1=$_POST['valor_linea_1'];
$subtotal_linea_1=$_POST['subtotal_linea_1'];
// $link_linea_1=$_POST['link_linea1'];
//Se crea un array con la primera línea de la venta
$arrayLineas[] = array("idArticulo" => $id_articulo_1, "descripcionArticulo" => $descripcion_articulo_1, "cantidadArticulo" => $cantidad_linea_1, "valorArticulo" => $valor_linea_1, "subtotalArticulo" => $subtotal_linea_1);

$articulo_linea_2=isset($_POST['articulo_2']) ? $_POST['articulo_2'] : "" ;
$posicion_separacion=stripos($articulo_linea_2, " - ");//Se obtiene la posición que nos permitirá separar el id de la decsripción en variables diferentes 
$id_articulo_2=substr($articulo_linea_2, 0, $posicion_separacion);//Obteniendo el id
$descripcion_articulo_2 = substr($articulo_linea_2, $posicion_separacion+3);//Obteniendo la descripción
$cantidad_linea_2=isset($_POST['cantidad_linea_2']) ? $_POST['cantidad_linea_2'] : 0 ;
$valor_linea_2=isset($_POST['valor_linea_2']) ? $_POST['valor_linea_2'] : 0 ;
$subtotal_linea_2=isset($_POST['subtotal_linea_2']) ? $_POST['subtotal_linea_2'] : 0 ;
// $link_linea_2=isset($_POST['link_linea2']) ? $_POST['link_linea2'] : "";
if ($articulo_linea_2 && $cantidad_linea_2 && $valor_linea_2 && $subtotal_linea_2) {//Se ingresa en el array la segunda línea de la venta, sí existe
    array_push($arrayLineas, array("idArticulo" => $id_articulo_2, "descripcionArticulo" => $descripcion_articulo_2, "cantidadArticulo" => $cantidad_linea_2, "valorArticulo" => $valor_linea_2, "subtotalArticulo" => $subtotal_linea_2));
}

$articulo_linea_3=isset($_POST['articulo_3']) ? $_POST['articulo_3'] : "" ;
$posicion_separacion=stripos($articulo_linea_3, " - ");//Se obtiene la posición que nos permitirá separar el id de la decsripción en variables diferentes 
$id_articulo_3=substr($articulo_linea_3, 0, $posicion_separacion);//Obteniendo el id
$descripcion_articulo_3 = substr($articulo_linea_3, $posicion_separacion+3);//Obteniendo la descripción
$cantidad_linea_3=isset($_POST['cantidad_linea_3']) ? $_POST['cantidad_linea_3'] : 0 ;
$valor_linea_3=isset($_POST['valor_linea_3']) ? $_POST['valor_linea_3'] : 0 ;
$subtotal_linea_3=isset($_POST['subtotal_linea_3']) ? $_POST['subtotal_linea_3'] : 0 ;
// $link_linea_3=isset($_POST['link_linea3']) ? $_POST['link_linea3'] : "";
if ($articulo_linea_3 && $cantidad_linea_3 && $valor_linea_3 && $subtotal_linea_3) {//Se ingresa en el array la tercera línea de la venta, sí existe
    array_push($arrayLineas, array("idArticulo" => $id_articulo_3, "descripcionArticulo" => $descripcion_articulo_3, "cantidadArticulo" => $cantidad_linea_3, "valorArticulo" => $valor_linea_3, "subtotalArticulo" => $subtotal_linea_3));
}



// echo '<pre>';
// print_r($arrayLineas);
// echo '</pre>';
// echo 'fecha' . $fechaVenta; 
// die();
//Se instancia la clase Ventas
$objCompras=new Compras;

//Se registra la venta(con los datos del encabezado)
$registrarCompra=$objCompras->registrarCompra($fechaVenta, $valor_compra, $canal_compra);

  //Consicional para revisar sí se registro correctamente la venta
  if ($registrarCompra) {

        $consultarId=$objCompras->consultarUltimoIdCompras(); // Se consulta el número del ID acaba de registrar
        $resultado=$consultarId->fetch_assoc();
        $idCompras=$resultado['id_compra'];//Se guarda el ID registrado
      
        for ($i=0; $i < count($arrayLineas); $i++) { //Se itera el array para registrar cada linea de la venta
            $registrarLineaCompra=$objCompras->registrarLineaCompra($idCompras, $arrayLineas[$i]['idArticulo'], $arrayLineas[$i]['descripcionArticulo'],
            $arrayLineas[$i]['cantidadArticulo'], $arrayLineas[$i]['valorArticulo'], $arrayLineas[$i]['subtotalArticulo'], $canal_compra); 
        }
        echo '<script> alert ("Compra registrada. Presione aceptar para continuar"); </script>';
    }else{
        echo '<script> alert ("Ocurrió un error. Presione aceptar para continuar"); </script>';
    }
echo "<meta http-equiv='refresh' content='0;../vista/html/compras.php' />";
?>

  
  
 