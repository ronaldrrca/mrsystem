<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
    }
    include '../../controlador/listarArticulosControlador.php'
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
        <h1>ARTÍCULOS</h1>
        <table id="tabla_ventas">
            <thead>
                <tr>
                    <th class="id_tabla ocultar">ID</th>
                    <th class="descripcion_tabla_articulos">DESCRIPCIÓN</th>
                    <th class="valor_tabla">PRECIO</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for ($i=0; $i < count($arrayArticulos); $i++) { ?>
                    <tr>
                        <td class="id_tabla ocultar centrar_texto"> <?php echo $arrayArticulos[$i]['id_articulos'] ?></td>
                        <td class="descripcion_tabla_articulos alinear_izquierda_texto"> <?php echo $arrayArticulos[$i]['descripcion_articulos'] ?></td>
                        <td class="valor_tabla alinear_derecha_texto"> <?php echo number_format($arrayArticulos[$i]['precio_sugerido_articulos'], 2, ",", ".") ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="contenedor_botones">
            <a class="boton_accion" href="./crearArticulo.php">Crear artículo</a>
        </div>
    </main>
    <script src="../js/header.js"></script>
</body>
</html>