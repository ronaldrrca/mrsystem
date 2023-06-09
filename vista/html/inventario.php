<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
    }
    include '../../controlador/verInventarioControlador.php'
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
        <h1>INVENTARIO</h1>
        <table id="tabla_ventas">
            <thead>
                <tr>
                    <th class="id_tabla ocultar">ID</th>
                    <th class="descripcion_tabla_articulos">DESCRIPCIÓN</th>
                    <th class="id_tabla">INV</th>
                    <th class="id_tabla ocultar">TR</th>
                    <th class="id_tabla ocultar">TM</th>
                    <th class="id_tabla ocultar">TC</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($articulo = $listar->fetch_assoc()) { ?>
                    <tr>
                        <td class="id_tabla ocultar centrar_texto"> <?php echo $articulo['id_articulos'] ?></td>
                        <td class="descripcion_tabla_articulos alinear_izquierda_texto"> <?php echo $articulo['descripcion_articulos'] ?></td>
                        <td class="id_tabla centrar_texto"><?php echo $articulo['inventario_articulos'] ?></td>
                        <td class="id_tabla centrar_texto ocultar"><?php echo $articulo['transito_ronald_articulos'] ?></td>
                        <td class="id_tabla centrar_texto ocultar"><?php echo $articulo['transito_marianna_articulos'] ?></td>
                        <td class="id_tabla centrar_texto ocultar"><?php echo $articulo['transito_celia_articulos'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <script src="../js/header.js"></script>
</body>
</html>