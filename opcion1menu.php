<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de las calificaciones por curso</title>
    <style>
        #boton {
            float: right;
            padding: 5px;
            border-radius: 4px;
        }
        p {
            margin: 0 auto;
        }
    </style>
</head>
<?php
//iniciamos sesión:
    session_start();
?>
<body background='fondo3.jpg'>
    <!-- cabecera -->
    <?php
        include "header.php";
    ?>
    <h2>Escoge el curso que está actualmente cursando</h2>
    <!-- formulario -->
    <form action="respuestaopcion1.php" method="POST">
        <fieldset>
            <legend>Curso: </legend>
            <label for="curso">Primero</label>
            <input type="radio" name="curso" value="1º">
            <label for="curso">Segundo</label>
            <input type="radio" name="curso" value="2º" checked>
            <label for="curso">Tercero</label>
            <input type="radio" name="curso" value "3º">
        </fieldset>
        <br>
        <!-- botones -->
        <input id="boton" type="submit" value="Enviar">
        <a href= 'principal.php'><input type="button" id="boton" value="Volver"></input></a>
    </form>
</body>
</html>