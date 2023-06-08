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
    <link rel="shortcut icon" href="#" type="image/x-icon">
</head>
<body>
    <?php 
    include './header.php';
    include './aside.php';
    ?>

    <main>
        <h1>REGISTRAR GASTO</h1>
        <form id="formulario_registrar_gasto" action="../../controlador/registrarGastoControlador.php" method="POST">
            <label for="fecha">Fecha</label>
            <input id="fecha" type="date" name="fecha" required autofocus>
            <label for="descripcion">Descripción</label>
            <input id="descripcion" type="text" name="descripcion" required>
            <label for="monto">Monto</label>
            <input type="number" id="monto" name="monto" required>
            <input class="boton_accion" type="submit" value="Registrar gasto">
        </form>
    </main>
    <script src="../js/header.js"></script>
</body>
</html>