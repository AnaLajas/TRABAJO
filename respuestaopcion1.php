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
        <?php
            session_start();
            include "tablas.php";    

            /* Cabecera */
            include "header.php";

            /* recorrer los cursos y pintar nombre y notas de los alumnos */
            echo "<div style='text-align:center; border: 2px solid black; border-radius: 8px; background-color:white; width:500px; height:300px; margin:100px auto; '>";
            echo "<h2>Listado de los alumnos que están cursando: " .$_POST['curso']. "</h2>";
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
    </body>
</html>