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
    <header>
        <?php
            echo "<a href= 'login.html'><input type='button' id='boton' value='Cerrar sesión' style='padding: 8px; color: white; background: #17202A; border-radius: 4px; float:right;'></input></a>";            
            echo "<header><div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p style='margin:0 auto;'>El usuario: " .$_SESSION['nombre']. "<p style='margin:0 auto;'>Acceso: " .$_SESSION['fecha']. "</p></div></header>";           
        ?>
    </header>
    <!-- contenedor -->
    <div style="text-align:center; border: 2px solid black; border-radius: 8px; background-color:white; width:500px; height:300px; margin:100px auto; ">
    <h2>Listado de usuarios:</h2>
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
        echo "<h4>" .$fila['usuario'] ." accedió ". $fila['acceso'].date('d/m/Y')."</h4>";
    }
    ?>
    </div>
    <!-- botón para volver a la página principal -->
    <div style="text-align:center">
        <a href= "principal.php"><button style="padding: 5px; border-radius: 3px; background-color: #F2F3F4;">Volver</button></a>
    </div>   
</body>
</html>