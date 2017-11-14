<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado alumnos</title>
    <style>
    </style>
</head>
<body background="fondo3.jpg">
    
</body>

<?php
session_start();
include "tablas.php";
echo "<header><div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p>El usuario: " .$_SESSION['nombre']. " , ha accedido: " /*.$_SESSION['fecha']*/. "</p></div></header>";

echo "<p>Alumnos que están cursando actualmente el curso: " .$_POST['curso']. "</p>";


for ($indice=0; $indice<count($ALUMNOS); $indice++){
    if ($ALUMNOS[$indice]['curso'] == $_POST['curso']){
        echo $ALUMNOS[$indice]['nombre'];
    }
        
}
echo "<a href='principal.php'>". "Volver". "</a>";
?>
</html>