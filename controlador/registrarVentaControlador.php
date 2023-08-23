<?php
// Iniciar una nueva sesión o reanudar la existente
session_start();
//Se requiere el archivo que contiene la clase Ventas
require_once('../modelo/ventas.php');
require_once('../modelo/gastos.php');

//Se reciben los valores que provienen del formulario
//Datos encabezado
$fechaVenta=$_POST['fecha'];
$gastos_venta=$_POST['gastos'];
$canal_venta=$_POST['canal'];
$numeroMl_venta=isset($_POST['ventaMl']) ? $_POST['ventaMl'] : "";
$entregado_venta=isset($_POST['entregado']) ? $_POST['entregado'] : "no";
$cobrado_venta=isset($_POST['cobrado']) ? $_POST['cobrado'] : "no";
$valor_venta=$_POST['total'];
$costo_total=0;
// $utilidad_total=0;

//Datos artículos
$articulo_linea_1=$_POST['articulo_1'];//Se recibe la información del artículo, un string con el id y la descripcion
$posicion_separacion_1=stripos($articulo_linea_1, " - ");//Se obtiene la posición que nos permitirá separar el id de la decsripción en variables diferentes 
$posicion_separacion_2=stripos($articulo_linea_1, " / ");////Se obtiene la posición que nos permitirá separar la descripción del precio costo en variables diferentes
$id_articulo_1 = substr($articulo_linea_1, 0, $posicion_separacion_1);//Obteniendo el id
$descripcion_articulo_1 = substr($articulo_linea_1, $posicion_separacion_1 + 3, $posicion_separacion_2-4);//Obteniendo la descripción
$precio_costo_articulo_1 = substr($articulo_linea_1, $posicion_separacion_2 + 3);//Obteniendo el precio costo
$cantidad_linea_1=$_POST['cantidad_linea_1'];
$valor_linea_1=$_POST['valor_linea_1'];
$subtotal_linea_1=$_POST['subtotal_linea_1'];
$subtotal_costo_linea_1 = $cantidad_linea_1 * $precio_costo_articulo_1;
$subtotal_utilidad_linea_1 = $subtotal_linea_1 - $subtotal_costo_linea_1;
$costo_total += $subtotal_costo_linea_1;
//Se crea un array con la primera línea de la venta
$arrayLineas[] = array("idArticulo" => $id_articulo_1, "descripcionArticulo" => $descripcion_articulo_1, "cantidadArticulo" => $cantidad_linea_1, "valorArticulo" => $valor_linea_1, "subtotalArticulo" => $subtotal_linea_1, "subtotalCostoArticulo" => $subtotal_costo_linea_1, "subtotalUtilidadArticulo" => $subtotal_utilidad_linea_1);

$articulo_linea_2=isset($_POST['articulo_2']) ? $_POST['articulo_2'] : "" ;
$posicion_separacion_1=stripos($articulo_linea_2, " - ");//Se obtiene la posición que nos permitirá separar el id de la decsripción en variables diferentes 
$posicion_separacion_2=stripos($articulo_linea_2, " / ");////Se obtiene la posición que nos permitirá separar la descripción del precio costo en variables diferentes
$id_articulo_2=substr($articulo_linea_2, 0, $posicion_separacion_1);//Obteniendo el id
$descripcion_articulo_2 = substr($articulo_linea_2, $posicion_separacion_1 + 3, $posicion_separacion_2-4);//Obteniendo la descripción
$precio_costo_articulo_2 = substr($articulo_linea_2, $posicion_separacion_2+3);//Obteniendo el precio costo
$cantidad_linea_2=isset($_POST['cantidad_linea_2']) ? $_POST['cantidad_linea_2'] : 0 ;
$valor_linea_2=isset($_POST['valor_linea_2']) ? $_POST['valor_linea_2'] : 0 ;
$subtotal_linea_2=isset($_POST['subtotal_linea_2']) ? $_POST['subtotal_linea_2'] : 0 ;
$subtotal_costo_linea_2=$cantidad_linea_2 ? $cantidad_linea_2 * $precio_costo_articulo_2 : 0; 
$subtotal_utilidad_linea_2 = $valor_linea_2 ? $subtotal_linea_2 - $subtotal_costo_linea_2 : 0;
$costo_total += $subtotal_costo_linea_2;
if ($articulo_linea_2 && $cantidad_linea_2 && $valor_linea_2 && $subtotal_linea_2) {//Se ingresa en el array la segunda línea de la venta, sí existe
    array_push($arrayLineas, array("idArticulo" => $id_articulo_2, "descripcionArticulo" => $descripcion_articulo_2, "cantidadArticulo" => $cantidad_linea_2, "valorArticulo" => $valor_linea_2, "subtotalArticulo" => $subtotal_linea_2, "subtotalCostoArticulo" => $subtotal_costo_linea_2, "subtotalUtilidadArticulo" => $subtotal_utilidad_linea_2));
}

$articulo_linea_3=isset($_POST['articulo_3']) ? $_POST['articulo_3'] : "" ;
$posicion_separacion_1=stripos($articulo_linea_3, " - ");//Se obtiene la posición que nos permitirá separar el id de la decsripción en variables diferentes 
$posicion_separacion_2=stripos($articulo_linea_3, " / ");////Se obtiene la posición que nos permitirá separar la descripción del precio costo en variables diferentes
$id_articulo_3=substr($articulo_linea_3, 0, $posicion_separacion_1);//Obteniendo el id
$descripcion_articulo_3 = substr($articulo_linea_3, $posicion_separacion_1 + 3, $posicion_separacion_2-4);//Obteniendo la descripción
$precio_costo_articulo_3 = substr($articulo_linea_3, $posicion_separacion_2+3);//Obteniendo el precio costo
$cantidad_linea_3=isset($_POST['cantidad_linea_3']) ? $_POST['cantidad_linea_3'] : 0 ;
$valor_linea_3=isset($_POST['valor_linea_3']) ? $_POST['valor_linea_3'] : 0 ;
$subtotal_linea_3=isset($_POST['subtotal_linea_3']) ? $_POST['subtotal_linea_3'] : 0 ;
$subtotal_costo_linea_3=$cantidad_linea_3 ? $cantidad_linea_3 * $precio_costo_articulo_3 : 0; 
$subtotal_utilidad_linea_3 = $valor_linea_3 ? $subtotal_linea_3 - $subtotal_costo_linea_3 : 0;
$costo_total += $subtotal_costo_linea_3;
if ($articulo_linea_3 && $cantidad_linea_3 && $valor_linea_3 && $subtotal_linea_3) {//Se ingresa en el array la tercera línea de la venta, sí existe
    array_push($arrayLineas, array("idArticulo" => $id_articulo_3, "descripcionArticulo" => $descripcion_articulo_3, "cantidadArticulo" => $cantidad_linea_3, "valorArticulo" => $valor_linea_3, "subtotalArticulo" => $subtotal_linea_3, "subtotalCostoArticulo" => $subtotal_costo_linea_3, "subtotalUtilidadArticulo" => $subtotal_utilidad_linea_3));
}

$utilidad_total=$valor_venta - $costo_total;// Se establece la utilidad totald de la venta
// echo "<pre>";
// print_r($arrayLineas);
// echo "</pre>"; 
// echo "subtotal_costo_linea_1: " . $subtotal_costo_linea_1 . "</br>";
// echo "subtotal_costo_linea_2: " . $subtotal_costo_linea_2 . "</br>";
// echo "subtotal_costo_linea_3: " . $subtotal_costo_linea_3 . "</br>";
// echo "subtotal_utilidad_linea_1: " . $subtotal_utilidad_linea_1 . "</br>";
// echo "subtotal_utilidad_linea_2: " . $subtotal_utilidad_linea_2 . "</br>";
// echo "subtotal_utilidad_linea_3: " . $subtotal_utilidad_linea_3 . "</br>";
// echo $descripcion_articulo_1 . "</br>";
// echo $descripcion_articulo_2 . "</br>";
// echo $descripcion_articulo_3 . "</br>";

// echo $valor_venta . " ";
// echo $costo_total . " ";
// echo $utilidad_total;
// die();

//Se instancia la clase Ventas
$objVenta=new Ventas;

//Se registra la venta(con los datos del encabezado)
$registrarVenta=$objVenta->registrarVenta($fechaVenta, $valor_venta, $gastos_venta, $utilidad_total, $canal_venta, $numeroMl_venta, $entregado_venta, $cobrado_venta);

  //Consicional para revisar sí se registro correctamente la venta
  if ($registrarVenta) {

        if ($gastos_venta>0) {
            $objGastos=new Gastos;

            //Se instancia la clase Gastos
            $objGastos=new Gastos;

            //Se registra el gasto
            $registrarGasto=$objGastos->registrarGasto($fechaVenta, 'Impresión guía', $gastos_venta);
        }
        

        $consultarId=$objVenta->consultarUltimoIdVentas(); // Se consulta el número del ID acaba de registrar
        $resultado=$consultarId->fetch_assoc();
        $idVentas=$resultado['id_venta'];//Se guarda el ID registrado
       
        for ($i=0; $i < count($arrayLineas); $i++) { //Se itera el array para registrar cada linea de la venta
            $registrarLineaVenta=$objVenta->registrarLineaVenta($idVentas, $arrayLineas[$i]['idArticulo'], $arrayLineas[$i]['descripcionArticulo'],
            $arrayLineas[$i]['cantidadArticulo'], $arrayLineas[$i]['valorArticulo'], $arrayLineas[$i]['subtotalArticulo'], $arrayLineas[$i]['subtotalCostoArticulo'], $arrayLineas[$i]['subtotalUtilidadArticulo']); 
        }
        echo '<script> alert ("Venta registrada. Presione aceptar para continuar"); </script>';
    }
echo "<meta http-equiv='refresh' content='0;../vista/html/ventas.php' />";
?>

  
  
 