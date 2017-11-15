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

        //PROBLEMA AQUÍ QUE SE SOLUCIONARÁ --> Cambiarlo por un Foreach. El error es que los expedientes no tienen por qué ir en orden empezando por cero (no tiene mucho sentido, aunque nos funcionaba porque lo habíamos dejado así nosotros preparado). Por ejemplo, podría pasar que sólo hubiese un alumno, con el expediente 4. Haríamos un for desde 0 hasta 1 (es decir, valdría $índice el valor 0 en la única vuelta que da, pero nunca sacaríamos a ese alumno, porque el expediente 0 no existe, nos daría un error).
        //Con el forech en el ejemplo anterior sería algo parecido a --> foreach($alumno as $fila) lo que haríamos es recorrer cada fila (alumno), entonces funciona aunque el índice del alumno en el ejemplo (su expediente) sea 4.

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