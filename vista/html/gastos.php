<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
    }

    include '../../controlador/listarGastosControlador.php'
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
        <h1>GASTOS</h1>
        <table id="tabla_ventas">
            <thead>
                <tr>
                    <th class="id_tabla">ID</th>
                    <th class="fecha_tabla">FECHA</th>
                    <th class="descripcion_tabla centrar_texto">DESCRIPCIÓN</th>
                    <th class="valor_tabla">MONTO</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($gasto = $listar->fetch_assoc()) { ?>
                    <tr>
                        <td class="id_tabla centrar_texto"> <?php echo $gasto['id_gastos'] ?></td>
                        <td class="fecha_tabla centrar_texto"> <?php echo $gasto['fecha_gastos'] ?></td>
                        <td class="descripcion_tabla alinear_izquierda_texto"> <?php echo $gasto['descripcion_gastos'] ?></td>
                        <td class="valor_tabla alinear_derecha_texto"> <?php echo number_format($gasto['monto_gastos'], 2, ",", ".") ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="contenedor_botones">
            <a class="boton_accion" href="./registrarGasto.php">Registrar gasto</a>
        </div>
    </main>
    <script src="../js/header.js"></script>
</body>
</html>