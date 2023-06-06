<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
    }
    include '../../controlador/verCompraControlador.php'
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
        <h1>DETALLE DE LA COMPRA</h1>
        <div>
            <form action="#" id="datos_cabecera_venta">
            <div class="dato_cabecera_venta">
                <label for="id">Id</label>
                <input type="text" name="id" id="id" readonly value="<?php echo $datos_compra[0]['id_compras'] ?>">
            </div>
            <div class="dato_cabecera_venta">
                <label for="fecha">Fecha</label>
                <input type="text" name="fecha" id="fecha" readonly value="<?php echo $datos_compra[0]['fecha_compras'] ?>">
            </div>
            <div class="dato_cabecera_venta">
                <label for="canal">Canal</label>
                <input type="text" name="canal" id="canal" readonly value="<?php echo $datos_compra[0]['canal_compras'] ?>">
            </div>
            <div id="separador_datos_cabeceraVentas"></div>
            
            </form>
            <table class="tabla_verVenta">
                <thead>
                    <tr>
                        <th class="">DESCRIPCIÓN</th>
                        <th class="cantidad_tabla">CNT</th>
                        <th class="precio_tabla">PRECIO</th>
                        <th class="subtotal_tabla">SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        for ($i=0; $i < count($datos_compra); $i++) { ?>
                        <tr>
                            <td class="descripcion_tabla alinear_izquierda_texto"><?php echo $datos_compra[$i]['descripcion_lineas_compras'] ?></td>
                            <td class="cantidad_tabla centrar_texto"><?php echo $datos_compra[$i]['cantidad_lineas_compras'] ?></td>
                            <td class="precio_tabla alinear_derecha_texto"><?php echo number_format($datos_compra[$i]['precio_compra_lineas_compras'], 2, ",", ".") ?></td>
                            <td class="subtotal_tabla alinear_derecha_texto"><?php echo number_format($datos_compra[$i]['subtotal_lineas_compras'], 2, ",", ".") ?></td>
                        </tr>
                    <?php } ?>
                        
                </tbody>
            </table>
            <div id="contenedor_total"><span>Total $</span><input type="text" name="total" id="total_venta" class="total_venta" value="<?php echo number_format($datos_compra[0]['valor_compras'], 2, ",", ".") ?>" readonly></div>
        </div>
        <div class="contenedor_botones">
            <a class="boton_regresar" href="<?=$_SERVER['HTTP_REFERER']?>">Regresar</a>
        </div>
    </main>
    <script src="../js/header.js"></script>
</body>
</html>