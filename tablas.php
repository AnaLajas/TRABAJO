<?php
//cargar las tablas de un fichero:
//cargamos alumnos:
    $alumnos = file_get_contents("tablasAlumnos.txt");
    $ALUMNOS = unserialize($alumnos);

//cargar usuarios:
    $usuarios = file_get_contents("tablasUsuarios.txt");
    $USUARIOS = unserialize($usuarios);
?>