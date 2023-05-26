<?php

// Iniciar una nueva sesión o reanudar la existente, en este punto es necesario para poder cerrar la sesión
session_start();

//Se destruye cualquiera de las sesiones existentes
unset($_SESSION['admin']);
//unset($_SESSION['estandar']);
session_destroy();

//Redirecciona al index
header('location: ../vista/html/login.php');

 ?>