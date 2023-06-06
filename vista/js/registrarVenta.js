let id_linea_1=document.getElementById("valor_linea_1")
let subtotal_linea_1=document.getElementById("subtotal_linea_1");
let id_linea_2=document.getElementById("valor_linea_2")
let cantidad_linea_2=document.getElementById("cantidad_linea_2")
let valor_linea_2=document.getElementById("valor_linea_2")
let subtotal_linea_2=document.getElementById("subtotal_linea_2");
let id_linea_3=document.getElementById("valor_linea_3")
let cantidad_linea_3=document.getElementById("cantidad_linea_3")
let valor_linea_3=document.getElementById("valor_linea_3")
let subtotal_linea_3=document.getElementById("subtotal_linea_3");
let totalVenta=document.getElementById("total_venta")

id_linea_1.addEventListener("keyup", ()=>{
    let cantidad_linea_1=document.getElementById("cantidad_linea_1").value;
    let valor_linea_1=document.getElementById("valor_linea_1").value;
    subtotal_linea_1.value=cantidad_linea_1*valor_linea_1;
    totalVenta.value=Number(subtotal_linea_1.value) + Number(subtotal_linea_2.value) + Number(subtotal_linea_3.value);
})

id_linea_2.addEventListener("keyup", ()=>{
    let cantidad_linea_2=document.getElementById("cantidad_linea_2").value;
    let valor_linea_2=document.getElementById("valor_linea_2").value;
    subtotal_linea_2.value=cantidad_linea_2*valor_linea_2;
    totalVenta.value=Number(subtotal_linea_1.value) + Number(subtotal_linea_2.value) + Number(subtotal_linea_3.value);
})

id_linea_3.addEventListener("keyup", ()=>{
    let cantidad_linea_3=document.getElementById("cantidad_linea_3").value;
    let valor_linea_3=document.getElementById("valor_linea_3").value;
    subtotal_linea_3.value=cantidad_linea_3*valor_linea_3;
    totalVenta.value=Number(subtotal_linea_1.value) + Number(subtotal_linea_2.value) + Number(subtotal_linea_3.value);
})

