
function verCompra(idCompras) {
    const id_compra=idCompras;
    const url="../../vista/html/verCompra.php";

    window.location.assign(url + "?id_compra=" + id_compra )
}



