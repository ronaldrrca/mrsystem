function verVenta(idVenta) {
    const id_venta=idVenta;
    const url="../../vista/html/verVenta.php";

    window.location.assign(url + "?id_venta=" + id_venta )
}
