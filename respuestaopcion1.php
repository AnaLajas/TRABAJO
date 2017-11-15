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
        echo "<header><div style='filter:alpha(opacity=20); opacity:0.6; background:white; color:black;'><p style='margin:0 auto;'>Usuario: " .$_SESSION['nombre']. "</p><p style='margin:0 auto;'>Hora de acceso: " /*.$_SESSION['fecha']*/. "</p></div></header>";
        /* recorrer los cursos y pintar nombre y notas de los alumnos */
        echo "<div style='text-align:center; border: 2px solid black; border-radius: 8px; background-color:white; width:500px; height:300px; margin:100px auto; '>";
        echo "<p>Listado de los alumnos que están cursando: " .$_POST['curso']. "</p>";
        for ($indice=0; $indice<count($ALUMNOS); $indice++) {
            if ($ALUMNOS[$indice]['curso'] == $_POST['curso']) {
                echo "<p>Nombre alumno: -> ".$ALUMNOS[$indice]['nombre']."</p>";
                echo "<p>Nota matemáticas -> " .$ALUMNOS[$indice]['notaMates']. "</p>";
                echo "<p>Nota física -> " .$ALUMNOS[$indice]['notaFisica']. "</p>";
            }
        }
        echo"</div>";
        echo"<br>";
        /* enlace para volver al menú principal */
        echo "<div style='text-align:center;'>";
        echo "<a href= 'principal.php'><button style='padding: 4px; border-radius: 3px; background-color: #F2F3F4;'>Volver</button></a>";
        echo"</div>";
    ?>
</html>