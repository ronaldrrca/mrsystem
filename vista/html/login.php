<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRSystem</title>
    <link rel="stylesheet" href="../css/movil.css" media="screen and (min-width: 380px)">
    <link rel="stylesheet" href="../css/laptop.css" media="screen and (min-width: 1200px)">
</head>
<body>
    <header>
        <span id="logo_header_login">MRSystem</span>
    </header>
    <main id="login_main">
        <h1>LOGIN</h1>
        <form id="formulario_login" action="../../controlador/loginControlador.php" method="POST">
            <label for="usuario">Usuario</label>
            <div class="input_contenedor">
                <input id="usuario" type="text" name="usuario" required autofocus>
                <img src="../imagenes/usuario_icono.svg" alt="icono usuario">
            </div>
            <label for="contrasena">Contraseña</label>
            <div class="input_contenedor">
                <input id="contrasena" type="password" name="contrasena" required>
                <img src="../imagenes/contrasena_icono.svg" alt="icono contraseña">
            </div>
            <input id="boton_ingresar" type="submit" value="Ingresar">
        </form>
    </main>
    <!-- <script src="../js/login.js"></script> -->
</body>
</html>