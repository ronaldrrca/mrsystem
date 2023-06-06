<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
    }
    include '../../controlador/listarComprasControlador.php';
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
        <h1>COMPRAS</h1>
        <table id="tabla_ventas">
            <thead>
                <tr>
                    <th class="id_tabla">ID</th>
                    <th class="fecha_tabla">FECHA</th>
                    <th class="valor_tabla">VALOR</th>
                    <th class="canal_tabla">CANAL</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while ($compra = $listar->fetch_assoc()) { ?>
                    <tr onClick="verCompra(<?php echo $compra['id_compras'] ?>)">
                        <td class="id_tabla centrar_texto"> <?php echo $compra['id_compras'] ?></td>
                        <td class="fecha_tabla centrar_texto"> <?php echo $compra['fecha_compras'] ?></td>
                        <td class="valor_tabla alinear_derecha_texto"> <?php echo number_format($compra['valor_compras'], 2, ",", ".") ?></td>
                        <td class="canal_tabla alinear_izquierda_texto"> <?php echo $compra['canal_compras'] ?></td>
                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="contenedor_botones">
            <a class="boton_accion" href="./registrarCompra.php">Registrar Compra</a>
        </div>
    </main>
    <script src="../js/header.js"></script>
    <script src="../js/compras.js"></script>
</body>
</html>