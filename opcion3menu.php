<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar notas</title>
    <style>
        #boton {
            float: right;
            padding: 5px;
            border-radius: 4px;
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
        <h2>Realiza las modificaciones correspondientes a las notas</h2>
        <!-- formulario -->
        <form action="respuestaopcion3.php" method="POST">
            <fieldset>
                <legend>Cambios: </legend>
                <div>
                    <label for="numexp">Numero de expediente</label>
                    <input autofocus type="text" id="numexp" name="numexp" value="" maxlength="9" size="15">
                    <label for="notmat">Nota de matemáticas</label>
                    <input type="text" id="notmat" name="notmat" value="" maxlength="5" size="15">
                    <label for="notfis">Nota de fisica</label>
                    <input type="text" id="notfis" name="notfis" value="" maxlength="5" size="15">
            </fieldset>
            <br>
            <!-- botones -->
            <input id="boton" type="submit" value="Modificar">
            <a href= 'principal.php'><input type="button" id="boton" value="Volver"></input></a>
        </form>
    </body>
</html>