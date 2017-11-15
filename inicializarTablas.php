<?php
/*crear array bidimensional (un array dentro de otro array)*/
/*  tabla alumnos */
    $ALUMNOS = array(
        0 => array( "nombre" => "Jesús", "curso" => 1, "notaMates" => 8, "notaFisica" => 6),
        1 => array( "nombre" => "Ana", "curso" => 2, "notaMates" => 9, "notaFisica" => 6)
        );
/* tabla usuarios */
    $USUARIOS = array (
        0 => array("usuario" =>"jesus", "clave" => 4444),
        1 => array("usuario" =>"ana", "clave" => 2406)
    );

//Guardar tabla de Alumnos
//para cargar los datos del array hay que convertirlo en cadena el array primero
$alumnos = serialize($ALUMNOS);
file_put_contents("tablasAlumnos.txt",$alumnos);

//Guardar tabla de Usuarios
$usuarios = serialize($USUARIOS);
file_put_contents("tablasUsuarios.txt",$usuarios);
?>