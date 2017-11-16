<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listado de notas por curso</title>
        <style>
        </style>
    </head>
    <body background="fondo3.jpg">  
    </body>
    <?php
        session_start();
        include "tablas.php";
        /* cabecera */
        echo "<a href= 'login.html'><input type='button' id='boton' value='Cerrar sesión' style='padding: 8px; color: white; background: #17202A; border-radius: 4px; float:right;'></input></a>";        
        echo "<header><div style='filter:alpha(opacity=20); opacity:0.6; background:white; color:black;'><p style='margin:0 auto;'>Usuario: " .$_SESSION['nombre']. "</p><p style='margin:0 auto;'>Acceso: " .$_SESSION['fecha']. "</p></div></header>";
        /* recorrer los cursos y pintar nombre y notas de los alumnos */
        echo "<div style='text-align:center; border: 2px solid black; border-radius: 8px; background-color:white; width:500px; height:300px; margin:100px auto; '>";
        echo "<h2>Listado de los alumnos que están cursando: " .$_POST['curso']. "</h2>";

        //HE CAMBIADO ESTE FOR POR UN FOREACH!!!!!!!!!!!!!!!!!!!!!!!
        foreach ($ALUMNOS as $key => $fila) {
            if ($fila['curso'] == $_POST['curso']) {
                echo "<h4>Nombre alumno: -> ".$fila['nombre']."</h4>";
                echo "<h4>Nota matemáticas -> " .$fila['notaMates']. "</h4>";
                echo "<h4>Nota física -> " .$fila['notaFisica']. "</h4>";
            }
        }
        echo"</div>";
        echo"<br>";
        /* enlace para volver al menú principal */
        echo "<div style='text-align:center;'>";
        echo "<a href= 'principal.php'><button style='padding: 5px; border-radius: 3px; background-color: #F2F3F4;'>Volver</button></a>";
        echo"</div>";
    ?>
</html>