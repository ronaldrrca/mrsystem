<?php 
session_start();
if (!isset($_SESSION['admin'])) {
        header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garantías</title>
</head>
<body>
    <?php include '../html/header.php' ?>
    <?php include '../html/aside.php' ?>
    <main>
        <h2>Garantías</h2>
    </main>
</body>
</html>