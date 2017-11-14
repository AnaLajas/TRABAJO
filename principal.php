<!DOCTYPE html>

<?php
    //iniciamos sesión:
    session_start();
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página principal</title>
    <style>
        #contenedor {
            margin-top: 100px;
        }

        #uno {
            background-color: white;
            border: 1px solid black;
            padding: .2em;
            width: 200px;
            margin: 0 auto;
            color: black;
            text-align: center;
            border-radius: 5px;
            margin-top: 5px;
        }

        #dos {
            background-color: white;
            border: 1px solid black;
            padding: .2em;
            width: 200px;
            margin: 0 auto;
            text-align: center;
            border-radius: 5px;
            margin-top: 5px;
        }

        #tres {
            background-color: white;
            border: 1px solid black;
            padding: .2em;
            width: 200px;
            margin: 0 auto;
            text-align: center;
            border-radius: 5px;
            margin-top: 5px;
        }

        #cuatro {
            background-color: white;
            border: 1px solid black;
            padding: .2em;
            width: 200px;
            margin: 0 auto;
            text-align: center;
            border-radius: 5px;
            margin-top: 5px;
        }

        p {
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        a:link {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body background='fondo.jpg'>

    <!-- TODO: HACER HEADER-->

    <h1>Menú principal</h1>
    <div id="contenedor">
        <a href='opcion1menu.html'><div id="uno">Listado de las calificaciones por curso</div></a>
        <div id="dos"><a href='opcion2menu.html'>Listado de todos los cursos con su nota media</a></div>
        <div id="tres"><a href='opcion3menu.html'>Modificaciones de notas</a></div>
        <div id="cuatro"><a href='opcion4menu.html'>Listado de usuarios ordenados por fecha de acceso</a></div>
    </div>

    <?php
    echo "<div><p>Usuario: " .$_SESSION['nombre']. "</p> <p>   Hora de acceso: " /*.$_SESSION['fecha']*/. "</p></div>";
    ?>
</body>

</html>