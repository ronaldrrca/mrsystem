<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
    }
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
                    <th class="ocultar">ID</th>
                    <th>FECHA</th>
                    <th>VALOR</th>
                    <th class="ocultar">GASTOS</th>
                    <th class="">CANAL</th>
                    <th class="ocultar">VENTA ML</th>
                    <th><img src="../imagenes/entregado_icon.svg" alt="icono camion"></th>
                    <th><img src="../imagenes/pagado_icon.svg" alt="icono moneda"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="id_tabla ocultar">67</td>
                    <td class="fecha_tabla">27/05/2023</td>
                    <td class="valor_tabla">35.000,00</td>
                    <td class="gastos_tabla ocultar">600,00</td>
                    <td class="canal_tabla">Mercado Libre</td>
                    <td class="ventaMl_tabla ocultar">20736490959599</td>
                    <td class="entregado_tabla"><img src="../imagenes/done_icon.svg" alt="icono verificacion"></td>
                    <td class="pagado_tabla"><img src="../imagenes/done_icon.svg" alt="icono verificacion"></td>
                </tr>
                <tr>
                    <td class="ocultar">67</td>
                    <td>27/05/2023</td>
                    <td class="valor_tabla">395.000,00</td>
                    <td class="ocultar" class="gastos_tabla">600,00</td>
                    <td class="">Personal</td>
                    <td class="ocultar">20736490959599</td>
                    <td><img src="../imagenes/done_icon.svg" alt="icono verificacion"></td>
                    <td><img src="../imagenes/done_icon.svg" alt="icono verificacion"></td>
                </tr>
            </tbody>
        </table>
        <a class="boton_accion" href="./registrarVenta.php">Registrar Venta</a>
    </main>
    <script src="../js/header.js"></script>
</body>
</html>