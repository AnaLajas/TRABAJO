<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios ordenador por fecha de acceso</title>
</head>
<?php
//iniciamos sesión:
    session_start();
?>
<body background='fondo3.jpg'>
    <header>
        <?php
            echo "<header><div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p>El usuario: " .$_SESSION['nombre']. " , ha accedido: " /*.$_SESSION['fecha']*/. "</p></div></header>";
        ?>
    </header>
    <h2>Listado de usuarios:</h2>
    <a href="principal.php">Volver</a>
</body>
</html>