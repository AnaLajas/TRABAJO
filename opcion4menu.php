<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios ordenador por fecha de acceso</title>
</head>
<?php
//iniciamos sesión e incluimos archivo tablas:
    session_start();
    include "tablas.php";
?>
<body background='fondo3.jpg'>
    <!-- cabecera -->
    <?php
        include "header.php";
    ?>
    <!-- contenedor -->
    <div style="text-align:center; border: 2px solid black; border-radius: 8px; background-color:white; width:500px; height:300px; margin:100px auto; ">
    <h2>Listado de usuarios que han accedido:</h2>
    <?php
    //funcion para ordenar un array (el array de primera dimension $USUARIOS):
    //puede devolver valores positivos, negativos y 0:
    //positivo -> $a > $b
    //0 -> $a == $b
    //negativo -> $a < $b
    function ordenarFecha($a,$b){
        return $a['acceso'] - $b['acceso'];
    }
    //el usort lo ordena de mayor a menor:
    usort($USUARIOS, 'ordenarFecha');
    $USUARIOS = array_reverse($USUARIOS);
    //pintar por pantalla la fecha del último acceso:
    foreach ($USUARIOS as $key => $fila) {
        echo "<h4>" .$fila['usuario'] ." -> ".date('d/m/Y - H:i:s',
            $fila['acceso'])."</h4>";
    }
    ?>
    </div>
    <!-- botón para volver a la página principal -->
    <div style="text-align:center">
        <a href= "principal.php"><button style="padding: 5px; border-radius: 3px; background-color: #F2F3F4;">Volver</button></a>
    </div>   
</body>
</html>