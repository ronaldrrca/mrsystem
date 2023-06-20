<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
    }
    include '../../controlador/adminControlador.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>MRSystem</title>
</head>
<body>
    <?php 
    include './header.php';
    include './aside.php';
    ?>

    <main>
        <h1>ADMINISTRACIÓN</h1>
        <section id="administracion">
            <div class="elemento_administracion">
                <span>Valor inv. Aprox.</span>
                <span><?php echo "$ " . number_format($totalValorInventario, 2, ",", ".") ?></span>
            </div>
            <div class="elemento_administracion">
                <span>Compras</span>
                <span><?php echo "$ " . number_format($totalCompras, 2, ",", ".") ?></span>
            </div>
            <div class="elemento_administracion">
                <span>Gastos</span>
                <span><?php echo "$ " . number_format($totalGastos, 2, ",", ".") ?></span>
            </div>
            <div class="elemento_administracion">
                <span>Ventas</span>
                <span><?php echo "$ " . number_format($totalVentas, 2, ",", ".") ?></span>
            </div>
            <div class="elemento_administracion">
                <span>Saldo</span>
                <span><?php echo "$ " . number_format($saldo, 2, ",", ".") ?></span>
            </div>
            <div class="elemento_administracion">
                <span>Por ingresar</span>
                <span><?php echo "$ " . number_format($porIngresar, 2, ",", ".") ?></span>
            </div>
            <div class="elemento_administracion">
                <span>Disponible</span>
                <span><?php echo "$ " . number_format($disponible, 2, ",", ".") ?></span>
            </div>
            <div class="elemento_administracion">
                <span>Ventas del mes</span>
                <span><?php echo "$ " . number_format($ventasMes, 2, ",", ".") ?></span>
            </div>
        </section>
    </main>
    <script src="../js/header.js"></script>
</body>
</html>