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
                <span>Inversión</span>
                <span>$ 00.000.000,00</span>
            </div>
            <div class="elemento_administracion">
                <span>Compras</span>
                <span>$ 00.000.000,00</span>
            </div>
            <div class="elemento_administracion">
                <span>Gastos</span>
                <span>$ 00.000.000,00</span>
            </div>
            <div class="elemento_administracion">
                <span>Ventas</span>
                <span>$ 00.000.000,00</span>
            </div>
            <div class="elemento_administracion">
                <span>Saldo</span>
                <span>$ 00.000.000,00</span>
            </div>
            <div class="elemento_administracion">
                <span>Por ingresar</span>
                <span>$ 00.000.000,00</span>
            </div>
            <div class="elemento_administracion">
                <span>Disponible</span>
                <span>$ 00.000.000,00</span>
            </div>
            <div class="elemento_administracion">
                <span>Ventas del mes</span>
                <span>$ 00.000.000,00</span>
            </div>
        </section>
    </main>
    <script src="../js/header.js"></script>
</body>
</html>