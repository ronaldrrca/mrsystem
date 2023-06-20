<?php
require_once('../../modelo/gastos.php');
require_once('../../modelo/compras.php');
require_once('../../modelo/ventas.php');
require_once('../../modelo/articulos.php');

$objGastos = new Gastos();
$objCompras = new Compras();
$objVentas = new ventas();
$objArticulos = new Articulos();

$consultaValorInventario = $objArticulos->consultarValorInvetario();
$resultadoValorInventario = $consultaValorInventario->fetch_assoc();

$consultaGastos = $objGastos->consultarTotalGastos();
$resultadoGastos = $consultaGastos->fetch_assoc();

$consultaCompras = $objCompras->consultarTotalCompras();
$resultadoCompras = $consultaCompras->fetch_assoc();

$consultaVentas = $objVentas->consultarTotalVentas();
$resultadoVentas = $consultaVentas->fetch_assoc();

$consultaPorIngresar = $objVentas->consultarTotalPorIngresar();
$resultadoPorIngresar = $consultaPorIngresar->fetch_assoc();


$consultarVentasMes = $objVentas->consultarTotalVentasMes(date("Y"), date("m"));
$resultadoVentasMes = $consultarVentasMes->fetch_assoc();


$inversion = 1972626.25;
$totalValorInventario = $resultadoValorInventario['total'];
$totalCompras = $resultadoCompras['total'];
$totalGastos = $resultadoGastos['total'];
$totalVentas =$resultadoVentas['total'];
$saldo = $inversion + $totalVentas - $totalCompras - $totalGastos;
$porIngresar = $resultadoPorIngresar['total'];
$disponible = $saldo - $porIngresar;
$ventasMes = $resultadoVentasMes['total'];


?>