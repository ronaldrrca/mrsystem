<?php
// Iniciar una nueva sesión o reanudar la existente
session_start();
//Se requiere el archivo que contiene la clase Ventas
require_once('../modelo/gastos.php');

//Se reciben los valores que provienen del formulario
//Datos encabezado
$fecha_gasto=$_POST['fecha'];
$descripcion_gasto=$_POST['descripcion'];
$monto_gasto=$_POST['monto'];


//Se instancia la clase Gastos
$objGastos=new Gastos;

//Se registra el gasto
$registrarGasto=$objGastos->registrarGasto($fecha_gasto, $descripcion_gasto, $monto_gasto);

  //Consicional para revisar sí se registro correctamente la venta
  if ($registrarGasto) {
       echo '<script> alert ("Gasto registrado. Presione aceptar para continuar"); </script>';
    }else{
        echo '<script> alert ("Ocurrió un error. Presione aceptar para continuar"); </script>';
    }
echo "<meta http-equiv='refresh' content='0;../vista/html/gastos.php' />";
?>

  
  
 