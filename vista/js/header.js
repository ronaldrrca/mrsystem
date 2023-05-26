const icono_menu = document.getElementById("icono_menu");
const icono_cerrar_menu = document.getElementById("icono_cerrar_menu");
const menu_movil = document.getElementById("menu_movil");

icono_menu.addEventListener("click", ()=>{
    icono_menu.style.display = "none";
    icono_cerrar_menu.style.display = "block";
    menu_movil.style.display = "block";
});

icono_cerrar_menu.addEventListener("click", ()=>{
    icono_cerrar_menu.style.display = "none";
    menu_movil.style.display = "none";
    icono_menu.style.display = "block";
})