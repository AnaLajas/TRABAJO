<?php
//Cargar las tablas de un fichero:
//Cargamos alumnos:
    $alumnos = file_get_contents("tablasAlumnos.txt");
    $ALUMNOS = unserialize($alumnos);


//Cargar usuarios:
    $usuarios = file_get_contents("tablasUsuarios.txt");
    $USUARIOS = unserialize($usuarios);
?>