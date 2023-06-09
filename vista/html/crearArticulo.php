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
        <h1>CREAR ARTÍCULO</h1>
        <form id="formulario_registrar_gasto" action="../../controlador/crearArticuloControlador.php" method="POST">
            <label for="descripcion">Descripción</label>
            <input id="descripcion" type="text" name="descripcion" required autofocus>
            <label for="precio">Precio</label>
            <input id="precio" type="number" name="precio" value="0.00" required>
            <label for="inventario">Inventario</label>
            <input type="number" id="inventario" name="inventario" value="0" required>
            <input class="boton_accion" type="submit" value="Crear artículo">
        </form>
    </main>
    <script src="../js/header.js"></script>
</body>
</html>