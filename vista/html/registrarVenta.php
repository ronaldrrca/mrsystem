<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
            header('Location: login.php');
    }
    include '../../controlador/listarArticulosControlador.php';
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
        <h1>REGISTRAR VENTA</h1>
        <form action="../../controlador/registrarVentaControlador.php" id="formulario_registrar_venta" method="POST">
            <div id="datos_cabecera_venta">
                <div class="dato_cabecera_venta">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha">
                </div>
                <div class="dato_cabecera_venta">
                    <label for="gastos">Gastos</label>
                    <input type="text" name="gastos" id="gastos" value="600.00">
                </div>
                <div class="dato_cabecera_venta">
                    <label for="canal">Canal</label>
                    <select name="canal" id="canal">
                        <option value="Mercado Libre">Mercado Libre</option>
                        <option value="Referido">Referido</option>
                        <option value="Personal">Personal</option>
                        <option value="Redes">Redes</option>
                    </select>
                    <!-- <input type="text" name="canal" id="canal" value=""> -->
                </div>
                <div id="separador_datos_cabeceraVentas"></div>
                <div class="dato_cabecera_venta">
                    <label for="ventaMl">Venta ML</label>
                    <input type="text" name="ventaMl" id="ventaMl">
                </div>
                <div class="dato_cabecera_venta" id="entregado">
                    <label for="entregado">Entregado</label>
                    <input type="checkbox" name="entregado" value="si">
                </div>
                <div class="dato_cabecera_venta" id="cobrado">
                    <label for="cobrado">Cobrado</label>
                    <input type="checkbox" name="cobrado" value="si">
                </div>
            </div>
            <div class="tabla_verVenta">
                <div>
                    <label class="descripcion_tabla" for="descripcion">DESCRIPCION</label>
                    <label class="cantidad_tabla" for="cantidad">CNT</label>
                    <label class="precio_tabla" for="precio">PRECIO</label>
                    <label class="subtotal_tabla" for="subtotal">SUBTOTAL</label>
                </div>
                <div class="linea_venta">
                    <input type="text" list="articulo1" name="articulo_1" id="articulo_1" class="descripcion_tabla">
                    <datalist id="articulo1">
                            <?php for ($i=0; $i < count($arrayArticulos); $i++) { ?>
                                    <option><?php echo $arrayArticulos[$i]['id_articulos'] . " - " . $arrayArticulos[$i]['descripcion_articulos'] . " / " . $arrayArticulos[$i]['precio_costo_promedio_articulos'] ?></option><?php } ?>
                        </datalist>
                    <input class="cantidad_tabla centrar_texto" name="cantidad_linea_1" for="cantidad" type="number" id="cantidad_linea_1">
                    <input class="precio_tabla alinear_derecha_texto" name="valor_linea_1" for="precio" type="number" id="valor_linea_1">
                    <input class="subtotal_tabla alinear_derecha_texto" name="subtotal_linea_1" for="subtotal" type="number" id="subtotal_linea_1" readonly >
                </div>
                <div class="linea_venta">
                <input type="text" list="articulo2" name="articulo_2" id="articulo_2" class="descripcion_tabla">
                    <datalist id="articulo2">
                            <?php for ($i=0; $i < count($arrayArticulos); $i++) { ?>
                                    <option><?php echo $arrayArticulos[$i]['id_articulos'] . " - " . $arrayArticulos[$i]['descripcion_articulos'] . " / " . $arrayArticulos[$i]['precio_costo_promedio_articulos'] ?></option><?php } ?>
                        </datalist>
                    <input class="cantidad_tabla centrar_texto" name="cantidad_linea_2" for="cantidad" type="number" id="cantidad_linea_2">
                    <input class="precio_tabla alinear_derecha_texto" name="valor_linea_2" for="precio" type="number" id="valor_linea_2">
                    <input class="subtotal_tabla alinear_derecha_texto" name="subtotal_linea_2" for="subtotal" type="number" id="subtotal_linea_2" readonly >
                </div>
                <div class="linea_venta">
                <input type="text" list="articulo3" name="articulo_3" id="articulo_3" class="descripcion_tabla">
                    <datalist id="articulo3">
                            <?php for ($i=0; $i < count($arrayArticulos); $i++) { ?>
                                    <option><?php echo $arrayArticulos[$i]['id_articulos'] . " - " . $arrayArticulos[$i]['descripcion_articulos'] . " / " . $arrayArticulos[$i]['precio_costo_promedio_articulos'] ?></option><?php } ?>
                        </datalist>
                    <input class="cantidad_tabla centrar_texto" name="cantidad_linea_3" for="cantidad" type="number" id="cantidad_linea_3">
                    <input class="precio_tabla alinear_derecha_texto" name="valor_linea_3" for="precio" type="number" id="valor_linea_3">
                    <input class="subtotal_tabla alinear_derecha_texto" name="subtotal_linea_3" for="subtotal" type="number" id="subtotal_linea_3" readonly >
                </div>
            </div>
            <div id="contenedor_total"><span>Total $</span><input type="text" name="total" id="total_venta" class="total_venta" value="0.00" readonly></div>
            <div class="contenedor_botones">
                <a class="boton_regresar" href="<?=$_SERVER['HTTP_REFERER']?>">Regresar</a>
                <button class="boton_accion">Registrar venta</button>
            </div>
        </form>
    </main>
    <script src="../js/header.js"></script>
    <script src="../js/registrarVenta.js"></script> 
</body>
</html>