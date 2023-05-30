<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
    }
    include '../../controlador/listarVentasControlador.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRSystem</title>
</head>
<body>
    <?php 
    include './header.php';
    include './aside.php';
    ?>
    <main>
        <h1>VENTAS</h1>
        <table id="tabla_ventas">
            <thead>
                <tr>
                    <th class="id_tabla ocultar">ID</th>
                    <th class="fecha_tabla">FECHA</th>
                    <th class="valor_tabla">VALOR</th>
                    <th class="gastos_tabla ocultar">GASTOS</th>
                    <th class="canal_tabla">CANAL</th>
                    <th class="ventaMl_tabla ocultar">VENTA ML</th>
                    <th class="entregado_tabla"><img src="../imagenes/entregado_icon.svg" alt="icono camion"></th>
                    <th class="cobrado_tabla"><img src="../imagenes/pagado_icon.svg" alt="icono moneda"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($venta = $listar->fetch_assoc()) { ?>
                    <tr onClick="verVenta(<?php echo $venta['id_ventas'] ?>)">
                        <td class="id_tabla ocultar centrar_texto"> <?php echo $venta['id_ventas'] ?></td>
                        <td class="fecha_tabla centrar_texto"> <?php echo $venta['fecha_ventas'] ?></td>
                        <td class="valor_tabla alinear_derecha_texto"> <?php echo number_format($venta['valor_ventas'], 2, ",", ".") ?></td>
                        <td class="gastos_tabla ocultar alinear_derecha_texto"> <?php echo number_format($venta['gastos_ventas'], 2, ",", ".") ?></td>
                        <td class="canal_tabla alinear_izquierda_texto"> <?php echo $venta['canal_ventas'] ?></td>
                        <td class="ventaMl_tabla ocultar centrar_texto"> <?php echo $venta['numero_ventaMl_ventas'] ?></td>
                        <td class="entregado_tabla centrar_texto">
                            <?php if ($venta['entregado_ventas']=="si") { ?>
                                <img src="../imagenes/done_icon.svg" alt="icono verificacion">
                            <?php } ?>
                        </td>
                        <td class="cobrado_tabla centrar_texto">
                            <?php if ($venta['cobrado_ventas']=="si") { ?>
                                <img src="../imagenes/done_icon.svg" alt="icono verificacion">
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="boton_accion" href="./registrarVenta.php">Registrar Venta</a>
    </main>
    <script src="../js/header.js"></script>
    <script src="../js/ventas.js"></script>
</body>
</html>