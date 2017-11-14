<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de todos los cursos con su nota media</title>
    <style>

    </style>
</head>

<?php
    include "tablas.php";
    //iniciamos sesión:
        session_start();
    
?>

    <body background='fondo3.jpg'>
    <header>
        <?php
            echo "<header><div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p>El usuario: " .$_SESSION['nombre']. " , ha accedido: " /*.$_SESSION['fecha']*/. "</p></div></header>";
        ?>
    </header>
        <h2>Las notas medias de cada curso son las siguientes</h2>
        
        <?php
            //variables:
            $sumaNotaMates1=0;
            $sumaNotaMates2=0;
            $sumaNotaMates3=0;
            $sumaNotaFis1=0;
            $sumaNotaFis2=0;
            $sumaNotaFis3=0;
            $numAlumnos1=0;
            $numAlumnos2=0;
            $numAlumnos3=0;
            //recorrer array alumnos:
            foreach ($ALUMNOS as $fila){
                if ($fila['curso'] == 1){
                    $numAlumnos1 = $numAlumnos1 + 1;
                    $sumaNotaMates1 = $sumaNotaMates1 + $fila['notaMates'];
                    $sumaNotaFis1 = $sumaNotaFis1 + $fila['notaFisica'];
                } 
                if ($fila['curso'] == 2){
                    $numAlumnos2 = $numAlumnos2 + 1;
                    $sumaNotaMates2 = $sumaNotaMates2 + $fila['notaMates'];
                    $sumaNotaFis2 = $sumaNotaFis2 + $fila['notaFisica'];
                }
                if ($fila['curso'] == 3){
                    $numAlumnos3 = $numAlumnos3 + 1;
                    $sumaNotaMates3 = $sumaNotaMates3 + $fila['notaMates'];
                    $sumaNotaFis3 = $sumaNotaFis3 + $fila['notaFisica'];
                }
            }
            //operaciones:
            if ($numAlumnos1 > 0) {
                $notaMediaMates1 = $sumaNotaMates1 / $numAlumnos1;
                $notaMediaFis1 = $sumaNotaFis1 / $numAlumnos1;
                echo "<p>Los alumnos de primero: </p>". "<p>Tienen una media en matemáticas de: ". $notaMediaMates1 . "</p><p>Y una media en física de: ". $notaMediaFis1. "</p>";
   
            } else {
                echo "No hay alumnos matriculados en primero";
            }
            if ($numAlumnos2 > 0) {
                $notaMediaMates2 = $sumaNotaMates2 / $numAlumnos2;
                $notaMediaFis2 = $sumaNotaFis2 / $numAlumnos2;
                
                echo "<p>Los alumnos de segundo: </p>". "<p>Tienen una media en matemáticas de: ". $notaMediaMates2 . "</p><p>Y una media en física de: ". $notaMediaFis2. "</p>";
            } else {   
                echo "No hay alumnos matriculados en segundo";
            }
            if($numAlumnos3 > 0) {
                $notaMediaMates3 = $sumaNotaMates3 / $numAlumnos3;
                $notaMediaFis3 = $sumaNotaFis3 / $numAlumnos3;
                echo "<p>Los alumnos de tercero: </p>". "<p>Tienen una media en matemáticas de: ". $notaMediaMates3 . "</p><p>Y una media en física de: ". $notaMediaFis3. "</p>";
            } else {
                echo "No hay alumnos matriculados en tercero";
            }
       ?>
       <br>
        <br>
       <a href="principal.php">Volver</a>
    </body>

</html>