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
            border: 2px solid black;
            padding: .3em;
            width: 200px;
            margin: 0 auto;
            color: black;
            text-align: center;
            border-radius: 5px;
            margin-top: 5px;
        }

        #dos {
            background-color: white;
            border: 2px solid black;
            padding: .3em;
            width: 200px;
            margin: 0 auto;
            text-align: center;
            border-radius: 5px;
            margin-top: 5px;
        }

        #tres {
            background-color: white;
            border: 2px solid black;
            padding: .3em;
            width: 200px;
            margin: 0 auto;
            text-align: center;
            border-radius: 5px;
            margin-top: 5px;
        }

        #cuatro {
            background-color: white;
            border: 2px solid black;
            padding: .3em;
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
    <!-- cabecera -->
    <header>
    <?php
    echo "<a href= 'login.html'><input type='button' id='boton' value='Cerrar sesión' style='padding: 8px; color: white; background: #17202A; border-radius: 4px; float:right;'></input></a>";
    echo "<div style='filter:alpha(opacity=20); opacity:0.6;background:white;color:black;'><p>Usuario: " .$_SESSION['nombre']. "</p> <p>Acceso: " .$_SESSION['fecha']. "</p></div>";
    ?>
    </header>
    <h1>Menú principal</h1>
    <!-- opciones del menú -->
    <div id="contenedor">
        <a href='opcion1menu.php'><div id="uno">Listado de las calificaciones por curso</div></a>
        <a href='opcion2menu.php'><div id="dos">Listado de todos los cursos con su nota media</div></a>
        <a href='opcion3menu.php'><div id="tres">Modificaciones de notas</div></a>
        <a href='opcion4menu.php'><div id="cuatro">Listado de usuarios ordenados por fecha de acceso</div></a>
    </div>
</body>
</html>