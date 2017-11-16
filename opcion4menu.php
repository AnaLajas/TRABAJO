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
    <!-- cabecera -->
    <header>
        <?php
            echo "<header><div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p style='margin:0 auto;'>El usuario: " .$_SESSION['nombre']. "<p style='margin:0 auto;'>Hora de acceso: " /*.$_SESSION['fecha']*/. "</p></div></header>";           
        ?>
    </header>
    <!-- contenedor -->
    <div style="text-align:center; border: 2px solid black; border-radius: 8px; background-color:white; width:500px; height:300px; margin:100px auto; ">
    <h2>Listado de usuarios:</h2>
    </div>
    <!-- enlace para volver a la página principal -->
    <div style="text-align:center">
        <a href= "principal.php"><button style="padding: 4px; border-radius: 3px; background-color: #F2F3F4;">Volver</button></a>
    </div>   
</body>
</html>