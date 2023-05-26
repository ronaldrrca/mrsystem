<?php
// Iniciar una nueva sesión o reanudar la existente
session_start();
//Se requiere el archivo que contiene la clase Usuarios
require_once('../modelo/usuarios.php');

//Se reciben los valores que provienen del formulario
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena']; 

//Se instancia la clase Usuarios
$objUsuario=new Usuarios;

//Se invoca la función para validar usuario y contraseña
$validar=$objUsuario->validarUsuario($usuario, $contrasena);

//Sí existe una coincidencia con los datos enviados(usuario y contrasena)    
if ($respuesta = $validar->fetch_assoc()) {
    $_SESSION['admin']=$respuesta['usuario_usuarios'];
    echo "<meta http-equiv='refresh' content='0;../vista/html/administracion.php' />";
} else {
    echo '<script> alert ("Usuario o contraseña inválida. Presione aceptar para continuar"); </script>';
    echo "<meta http-equiv='refresh' content='0;../vista/html/login.php' />";
}






  
  
 